<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // $sliders = Slider::all();
        return view('backend.slider.index');
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
    public function destroy()
    {
        return view('backend.slider.index');
    }
}
