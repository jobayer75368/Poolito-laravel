<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('creator', 'updater')->get();
        return view('backend.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }
    public function store()
    {
        return redirect()->route('admin.blog.index');
    }
    public function show(int $id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blog.show', compact('blog'));;
    }
    public function edit(int $id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        return redirect()->route('admin.blog.index');
    }
    public function destroy()
    {
        return redirect()->route('admin.blog.index');
    }
}
