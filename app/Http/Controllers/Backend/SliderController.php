<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Illuminate\Http\UploadedFile;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('backend.slider.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'slider_image' => 'required|image|mimes:jpg,jpeg,png,webp,gif,avif|max:1536',
        ], [
            'slider_image.max' => 'Image size must not be larger than 1.5 MB.',
        ]);

        $file = $request->file('slider_image');

        $image = ImageManager::usingDriver(Driver::class)->decode($file);

        $image->cover(893, 822);

        $path = storage_path('app/' . uniqid() . '.webp');

        $image->encodeUsingFormat(Format::WEBP)->save($path);

        $file = new UploadedFile(
            $path,
            basename($path),
            'image/webp',
            null,
            true
        );

        $image_path = $this->uploadImage($file, 'slider_images');
        unlink($path);

        Slider::create([
            'slider_image' => $image_path,
        ]);

        return redirect()->route('admin.slider.index');
    }



    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $slider = Slider::findOrFail($id);
            $image_path = $slider->slider_image;


            if (app()->environment('local')) {
                $this->deleteImage($image_path);
            } else {
                $publicId = pathinfo(parse_url($image_path, PHP_URL_PATH), PATHINFO_FILENAME);

                (new \Cloudinary\Cloudinary())
                    ->uploadApi()
                    ->destroy('slider_images/' . $publicId);
            }

            $slider->delete();
            DB::commit();
            return redirect()->route('admin.slider.index')->with('success', 'Slide deleted Successfully!');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error('Error deleting Slide', [$th->getMessage() . '-' . $th->getLine()]);
            return redirect()->route('admin.slider.index')->with('success', 'Something went Wrong!');
        }
    }
}
