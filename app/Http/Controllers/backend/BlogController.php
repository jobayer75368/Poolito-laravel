<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Throwable;

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
    public function store(Request $request)
    {
        $request->validate([
            'blog_image' => 'required|image',
        ]);
        $image_path = null;
        if ($request->hasFile('blog_image')) {
            $image_path = $request->file('blog_image')->store('blog_images', 'public');
        }

        Blog::create([

            'blog_title' => $request->blog_title,
            'blog_slug' => Str::slug($request->blog_slug ?? $request->blog_title),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'blog_image' => $image_path,
            'created_by' => Auth::user()->id,

        ]);
        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully!');
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

    public function update(Request $request, int $id)
    {
        // $request->validate([
        //     'blog_image' => 'required|image',
        // ]);
        $blog = Blog::findOrFail($id);
        $image_path = $blog->blog_image;

        if ($request->hasFile('blog_image')) {
            $image_path = $request->file('blog_image')->store('blog_images', 'public');
        }

        $blog->update([

            'blog_title' => $request->blog_title,
            'blog_slug' => Str::slug($request->blog_slug ?? $request->blog_title),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'blog_image' => $image_path,
            'updated_by' => Auth::user()->id,

        ]);
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated Successfully!');
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $blog = Blog::findOrFail($id);
            $image_path = $blog->blog_image;
            if ($image_path && Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }

            $blog->delete();
            DB::commit();
            return redirect()->route('admin.blog.index')->with('success', 'Blog deleted Successfully!');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error('Error deleting Blog', [$th->getMessage() . '-' . $th->getLine()]);
            return redirect()->route('admin.blog.index')->with('success', 'Something went Wrong!');
        }
    }
}
