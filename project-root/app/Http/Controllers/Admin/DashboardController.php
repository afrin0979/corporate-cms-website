<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HeroSlider;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Project;

class DashboardController extends Controller
{
    /**
     * Admin Dashboard
     *
     * Display key metrics for the admin panel:
     * - Total users
     * - Active hero sliders
     * - Total products
     * - Total blogs
     * - Total projects
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Count total users
        $totalUsers = User::count();

        // Count active hero sliders
        $activeSliders = HeroSlider::where('status', 'active')->count();

        // Count total products
        $totalProducts = Product::count();

        // Count total blogs
        $totalBlogs = Blog::count();

        // Count total projects
        $totalProjects = Project::count();

        // Pass data to dashboard view
        return view('admin.dashboard', compact(
            'totalUsers',
            'activeSliders',
            'totalProducts',
            'totalBlogs',
            'totalProjects'
        ));
    }

    /**
     * Optional: Admin Analytics / Charts
     *
     * You can add methods to fetch:
     * - Monthly user registrations
     * - Hero slider performance
     * - Blog posts per category
     * - Project completion stats
     *
     * Example:
     * public function monthlyUsers()
     * {
     *     $monthlyUsers = User::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
     *                         ->groupBy('month')
     *                         ->get();
     *     return response()->json($monthlyUsers);
     * }
     */

}