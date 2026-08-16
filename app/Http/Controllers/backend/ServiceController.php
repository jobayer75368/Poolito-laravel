<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('backend.service.index', compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }
    public function store(Request $request)

    {

        // $request->validate([
        //     'service_image' => 'required|image',
        // ]);
        $image_path = null;
        if ($request->hasFile('service_image')) {
            $image_path = $request->file('service_image')->store('service_images', 'public');
        }

        Service::create([

            'service_title' => $request->service_title,
            'service_slug' => $request->service_slug,
            'service_icon' => $request->service_icon,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'service_image' => $image_path,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,

        ]);
        return redirect()->route('admin.service.index');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.service.show', compact('service'));
    }
}
