<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

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
            'slider_image' => 'required|image',
        ]);

        $image_path = null;

        if ($request->hasFile('slider_image')) {
            $image_path = $this->uploadImage($request->file('slider_image'), 'slider_images');
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
