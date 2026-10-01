<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;
use Throwable;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('backend.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('backend.portfolio.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'portfolio_image' => 'required|image|mimes:jpg,jpeg,png,webp,gif,avif|max:1536',
        ], [
            'portfolio_image.max' => 'Image size must not be larger than 1.5 MB.',
        ]);

        $file = $request->file('portfolio_image');

        $image = ImageManager::usingDriver(Driver::class)->decode($file);
        $image->cover(480, 400);
        $path = storage_path('app/' . uniqid() . '.webp');
        $image->encodeUsingFormat(Format::WEBP)->save($path);

        $file = new UploadedFile(
            $path,
            basename($path),
            'image/webp',
            null,
            true
        );
        $image_path = $this->uploadImage($file, 'portfolio_images');
        unlink($path);

        Portfolio::create([

            'portfolio_title' => $request->portfolio_title,
            'portfolio_slug' => Str::slug($request->portfolio_slug ?? $request->portfolio_title),
            'description' => $request->description,
            'status' => $request->status,
            'portfolio_image' => $image_path,

        ]);
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio created successfully!');
    }

    public function show(int $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.portfolio.show', compact('portfolio'));;
    }

    public function edit(int $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'portfolio_image' => 'required|image|mimes:jpg,jpeg,png,webp,gif,avif|max:1536',
        ], [
            'portfolio_image.max' => 'Image size must not be larger than 1.5 MB.',
        ]);

        $portfolio = Portfolio::findOrFail($id);
        $image_path = $portfolio->portfolio_image;

        if ($request->hasFile('portfolio_image')) {

            $file = $request->file('portfolio_image');

            $image = ImageManager::usingDriver(Driver::class)->decode($file);
            $image->cover(299, 320);
            $path = storage_path('app/' . uniqid() . '.webp');
            $image->encodeUsingFormat(Format::WEBP)->save($path);

            $file = new UploadedFile(
                $path,
                basename($path),
                'image/webp',
                null,
                true
            );
            $image_path = $this->uploadImage($file, 'portfolio_images');
            unlink($path);

            // Delete previous image
            if (app()->environment('local')) {
                $this->deleteImage($portfolio->portfolio_image);
            } else {
                $publicId = pathinfo(
                    parse_url($portfolio->portfolio_image, PHP_URL_PATH),
                    PATHINFO_FILENAME
                );

                (new \Cloudinary\Cloudinary())
                    ->uploadApi()
                    ->destroy('portfolio_images/' . $publicId);
            }
        }

        $portfolio->update([

            'portfolio_title' => $request->portfolio_title,
            'portfolio_slug' => Str::slug($request->portfolio_slug ?? $request->portfolio_title),
            'description' => $request->description,
            'status' => $request->status,
            'portfolio_image' => $image_path,

        ]);
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio updated Successfully!');
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $portfolio = Portfolio::findOrFail($id);
            $image_path = $portfolio->portfolio_image;
            if (app()->environment('local')) {
                $this->deleteImage($image_path);
            } else {
                $publicId = pathinfo(parse_url($image_path, PHP_URL_PATH), PATHINFO_FILENAME);

                (new \Cloudinary\Cloudinary())
                    ->uploadApi()
                    ->destroy('portfolio_images/' . $publicId);
            }

            $portfolio->delete();
            DB::commit();
            return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio deleted Successfully!');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error('Error deleting Portfolio', [$th->getMessage() . '-' . $th->getLine()]);
            return redirect()->route('admin.portfolio.index')->with('success', 'Something went Wrong!');
        }
    }
}
