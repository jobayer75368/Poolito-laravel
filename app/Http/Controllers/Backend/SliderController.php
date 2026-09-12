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
    public function store()
    {
        return view('backend.slider.create');
    }
    public function destroy()
    {
        return view('backend.slider.create');
    }
}
