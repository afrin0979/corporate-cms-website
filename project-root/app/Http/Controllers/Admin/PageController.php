<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of pages.
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'asc')->get();
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for editing a specific page.
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified page in storage.
     */
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        // Validation
        $request->validate([
            'page_name' => 'required|string|max:100',
            'content' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:255'
        ]);

        // Update page
        $page->page_name = $request->page_name;
        $page->slug = \Str::slug($request->page_name);
        $page->content = $request->content;
        $page->seo_title = $request->seo_title;
        $page->seo_description = $request->seo_description;
        $page->save();

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
    }

    /**
     * Optional: Show a single page preview in admin.
     */
    public function show($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.show', compact('page'));
    }
}