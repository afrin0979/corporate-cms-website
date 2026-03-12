<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSlider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HeroSliderController extends Controller
{
    /**
     * Display a listing of hero sliders.
     */
    public function index()
    {
        $sliders = HeroSlider::orderBy('created_at', 'desc')->get();
        return view('admin.hero-slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new slider.
     */
    public function create()
    {
        return view('admin.hero-slider.create');
    }

    /**
     * Store a newly created slider in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|url',
            'status' => 'required|in:active,inactive'
        ]);

        // Handle image upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'_'.Str::slug($request->title).'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/hero-sliders', $imageName);
        }

        HeroSlider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => 'storage/hero-sliders/'.$imageName,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'status' => $request->status
        ]);

        return redirect()->route('admin.hero-sliders.index')->with('success', 'Hero Slider added successfully.');
    }

    /**
     * Show the form for editing the specified slider.
     */
    public function edit($id)
    {
        $slider = HeroSlider::findOrFail($id);
        return view('admin.hero-slider.edit', compact('slider'));
    }

    /**
     * Update the specified slider in storage.
     */
    public function update(Request $request, $id)
    {
        $slider = HeroSlider::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|url',
            'status' => 'required|in:active,inactive'
        ]);

        // Handle new image upload
        if($request->hasFile('image')){
            // Delete old image if exists
            if($slider->image && Storage::exists(str_replace('storage/', 'public/', $slider->image))){
                Storage::delete(str_replace('storage/', 'public/', $slider->image));
            }

            $image = $request->file('image');
            $imageName = time().'_'.Str::slug($request->title).'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/hero-sliders', $imageName);
            $slider->image = 'storage/hero-sliders/'.$imageName;
        }

        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->status = $request->status;
        $slider->save();

        return redirect()->route('admin.hero-sliders.index')->with('success', 'Hero Slider updated successfully.');
    }

    /**
     * Remove the specified slider from storage.
     */
    public function destroy($id)
    {
        $slider = HeroSlider::findOrFail($id);

        // Delete image from storage
        if($slider->image && Storage::exists(str_replace('storage/', 'public/', $slider->image))){
            Storage::delete(str_replace('storage/', 'public/', $slider->image));
        }

        $slider->delete();

        return redirect()->route('admin.hero-sliders.index')->with('success', 'Hero Slider deleted successfully.');
    }
}