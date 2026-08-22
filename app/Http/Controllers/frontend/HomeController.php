<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Member;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()

    {
        $services = Service::where('status', 'active')->get();
        $blogs = Blog::where('status', 'published')->get();
        $members = Member::where('status', 'active')->get();
        return view('frontend.index', compact('services', 'blogs', 'members'));
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
        $recentBlogs = Blog::where('status', 'published')->latest()->get();
        $blog = Blog::where('blog_slug', $slug)->firstOrFail();
        return view('frontend.blog_details', compact('blog', 'recentBlogs'));
    }
    public function teamIndex()
    {
        $members = Member::where('status', 'active')->get();
        return view('frontend.team_members', compact('members'));
    }
    public function memberDetails(string $slug)
    {
        $member = Member::where('slug', $slug)->firstOrFail();
        return view('frontend.team_details', compact('member'));
    }

    public function portfolioIndex()
    {
        $portfolios = Portfolio::where('status', 'active')->get();
        return view('frontend.portfolio', compact('portfolios'));
    }
    public function portfolioDetails(string $slug)
    {
        $allPortfolios = Portfolio::where('status', 'active')->latest()->get();
        $portfolio = Portfolio::where('portfolio_slug', $slug)->firstOrFail();
        return view('frontend.portfolio_details', compact('portfolio', 'allPortfolios'));
    }
}
