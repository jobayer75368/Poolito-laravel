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
        $request->validate(
            [
                'slider_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
            ],
            [
                'slider_image.max' => 'Image size must not be larger than 4 MB.',
            ]
        );

        $file = $request->file('slider_image');

        if ($file->getSize() > 1024 * 1024) {
            $manager = ImageManager::usingDriver(Driver::class);

            // read 
            $image = $manager->decode($file);
            $image->scaleDown(width: 2100);

            $fileName = uniqid() . '.webp';
            $tempPath = storage_path('app/' . $fileName);

            $low = 1;
            $high = 100;
            $bestQuality = 1;

            // Encode as Webp 

            while ($low <= $high) {
                $quality = intdiv($low + $high, 2);

                $image->encodeUsingFormat(
                    Format::WEBP,
                    quality: $quality
                )->save($tempPath);

                $fileSize = filesize($tempPath);

                if ($fileSize <= 1024 * 1024) {
                    $bestQuality = $quality;
                    $low = $quality + 1;
                } else {
                    $high = $quality - 1;
                }
            }

            $image->encodeUsingFormat(Format::WEBP, quality: $bestQuality)->save($tempPath);

            $file = new UploadedFile(
                $tempPath,
                $fileName,
                'image/webp',
                null,
                true
            );
        }
        $image_path = $this->uploadImage(
            $file,
            'slider_images'
        );
        if (isset($tempPath)) {
            unlink($tempPath);
        }

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
            $this->deleteImage($image_path);

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
