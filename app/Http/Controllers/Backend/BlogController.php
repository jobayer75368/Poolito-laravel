<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;
use Throwable;
use Illuminate\Http\UploadedFile;

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
            'blog_image' => 'required|image|mimes:jpg,jpeg,png,webp,gif,avif|max:1536',
        ], [
            'blog_image.max' => 'Image size must not be larger than 1.5 MB.',
        ]);
        $file = $request->file('blog_image');

        $image = ImageManager::usingDriver(Driver::class)->decode($file);
        $image->cover(920, 539);
        $path = storage_path('app/' . uniqid() . '.webp');
        $image->encodeUsingFormat(Format::WEBP)->save($path);

        $file = new UploadedFile(
            $path,
            basename($path),
            'image/webp',
            null,
            true
        );
        $image_path = $this->uploadImage($file, 'blog_images');
        unlink($path);
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
        $request->validate([
            'blog_image' => 'required|image|mimes:jpg,jpeg,png,webp,gif,avif|max:1536',
        ], [
            'blog_image.max' => 'Image size must not be larger than 1.5 MB.',
        ]);

        $blog = Blog::findOrFail($id);
        $image_path = $blog->blog_image;

        $file = $request->file('blog_image');

        $image = ImageManager::usingDriver(Driver::class)->decode($file);
        $image->cover(920, 539);
        $path = storage_path('app/' . uniqid() . '.webp');
        $image->encodeUsingFormat(Format::WEBP)->save($path);

        $file = new UploadedFile(
            $path,
            basename($path),
            'image/webp',
            null,
            true
        );
        $image_path = $this->uploadImage($file, 'blog_images');
        unlink($path);

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

            if (app()->environment('local')) {
                $this->deleteImage($image_path);
            } else {
                $publicId = pathinfo(parse_url($image_path, PHP_URL_PATH), PATHINFO_FILENAME);

                (new \Cloudinary\Cloudinary())
                    ->uploadApi()
                    ->destroy('blog_images/' . $publicId);
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
