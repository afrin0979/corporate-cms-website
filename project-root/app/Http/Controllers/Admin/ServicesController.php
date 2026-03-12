<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    /**
     * Display a listing of services.
     */
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle image upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'_'.Str::slug($request->title).'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/services', $imageName);
        } else {
            $imageName = null;
        }

        Service::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'image' => $imageName ? 'storage/services/'.$imageName : null
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service added successfully.');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle new image upload
        if($request->hasFile('image')){
            if($service->image && Storage::exists(str_replace('storage/', 'public/', $service->image))){
                Storage::delete(str_replace('storage/', 'public/', $service->image));
            }
            $image = $request->file('image');
            $imageName = time().'_'.Str::slug($request->title).'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/services', $imageName);
            $service->image = 'storage/services/'.$imageName;
        }

        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified service from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete image
        if($service->image && Storage::exists(str_replace('storage/', 'public/', $service->image))){
            Storage::delete(str_replace('storage/', 'public/', $service->image));
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}