<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle image upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'_'.Str::slug($request->title).'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/products', $imageName);
        } else {
            $imageName = null;
        }

        Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName ? 'storage/products/'.$imageName : null
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully.');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle new image upload
        if($request->hasFile('image')){
            if($product->image && Storage::exists(str_replace('storage/', 'public/', $product->image))){
                Storage::delete(str_replace('storage/', 'public/', $product->image));
            }
            $image = $request->file('image');
            $imageName = time().'_'.Str::slug($request->title).'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/products', $imageName);
            $product->image = 'storage/products/'.$imageName;
        }

        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete image
        if($product->image && Storage::exists(str_replace('storage/', 'public/', $product->image))){
            Storage::delete(str_replace('storage/', 'public/', $product->image));
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}