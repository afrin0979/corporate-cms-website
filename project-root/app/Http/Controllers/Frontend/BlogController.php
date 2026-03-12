<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(6); // Show 6 blogs per page
        return view('frontend.blog.index', compact('blogs'));
    }

    /**
     * Display a single blog post.
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.blog.show', compact('blog'));
    }
}