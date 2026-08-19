<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('backend.blog.index');
    }

    public function create()
    {
        return view('backend.blog.create');
    }
    public function store()
    {
        return redirect()->route('admin.blog.index');
    }
    public function show()
    {
        return view('backend.blog.show');
    }
    public function edit()
    {
        return view('backend.blog.edit');
    }
    public function update()
    {
        return redirect()->route('admin.blog.index');
    }
    public function destroy()
    {
        return redirect()->route('admin.blog.index');
    }
}
