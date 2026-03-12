<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSlider;
use App\Models\Service;
use App\Models\Product;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $hero_sliders = HeroSlider::where('status', 'active')->get();
        $services = Service::all();
        $products = Product::take(6)->get(); // Show 6 featured products
        $blogs = Blog::latest()->take(3)->get(); // Show 3 latest blogs

        return view('frontend.home', compact('hero_sliders', 'services', 'products', 'blogs'));
    }

    public function services()
    {
        $services = Service::all();
        return view('frontend.services', compact('services'));
    }

    public function products()
    {
        $products = Product::all();
        return view('frontend.products', compact('products'));
    }
}