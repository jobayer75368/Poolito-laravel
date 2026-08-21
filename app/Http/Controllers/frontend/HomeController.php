<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()

    {
        $services = Service::where('status', 'active')->get();
        $blogs = Blog::where('status', 'published')->get();
        return view('frontend.index', compact('services', 'blogs'));
    }
    public function serviceIndex()
    {
        $services = Service::where('status', 'active')->get();
        return view('frontend.services', compact('services'));
    }
    public function serviceDetails(string $slug)
    {
        $allServices = Service::where('status', 'active')->get();
        $service = Service::where('service_slug', $slug)->firstOrFail();
        return view('frontend.service_details', compact('service', 'allServices'));
    }
    public function blogIndex()
    {
        $blogs = Blog::where('status', 'published')->get();
        return view('frontend.blogs', compact('blogs'));
    }
    public function blogDetails(string $slug)
    {
        $allBlogs = Blog::where('status', 'active')->get();
        $blog = Blog::where('blog_slug', $slug)->firstOrFail();
        return view('frontend.blog_details', compact('blog', 'allBlogs'));
    }
}
