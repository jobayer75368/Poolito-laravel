<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('creator', 'updater')->get();
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
            'service_slug' => Str::slug($request->service_slug ?? $request->service_title),
            'service_icon' => $request->service_icon,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'service_image' => $image_path,
            'created_by' => Auth::user()->id,

        ]);
        return redirect()->route('admin.service.index');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.service.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, $id)

    {

        // $request->validate([
        //     'service_image' => 'required|image',
        // ]);
        $service = Service::findOrFail($id);
        $image_path = $service->service_image;
        if ($request->hasFile('service_image')) {

            if ($image_path && Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }
            $image_path = $request->file('service_image')->store('service_images', 'public');
        }

        $service->update([

            'service_title' => $request->service_title,
            'service_slug' => Str::slug($request->service_slug ?? $request->service_title),
            'service_icon' => $request->service_icon,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'service_image' => $image_path,
            'updated_by' => Auth::user()->id,

        ]);
        return redirect()->route('admin.service.index')->with('success', 'Service Updated Successfully');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $service = Service::findOrFail($id);
            $image_path = $service->service_image;
            if ($image_path && Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }

            $service->delete();
            DB::commit();
            return redirect()->route('admin.service.index')->with('success', 'Service deleted Successfully!');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error('Error deleting Service', [$th->getMessage() . '-' . $th->getLine()]);
            return redirect()->route('admin.service.index')->with('success', 'Something went Wrong!');
        }
    }
}
