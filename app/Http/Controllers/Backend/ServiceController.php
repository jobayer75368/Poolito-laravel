<?php

namespace App\Http\Controllers\Backend;

use Cloudinary\Cloudinary;
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
        $request->validate([
            'service_image' => 'required|image',
        ]);

        $image_path1 = null;

        if ($request->hasFile('service_icon')) {
            $image_path1 = $request->file('service_icon')->store('service_icons', 'public');
        }

        $image_path2 = null;

        if ($request->hasFile('service_image')) {
            $image_path2 = $request->file('service_image')->store('service_images', 'public');
        }

        Service::create([
            'service_title' => $request->service_title,
            'service_slug' => Str::slug($request->service_slug ?? $request->service_title),
            'service_icon' => $image_path1,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'service_image' => $image_path2,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->route('admin.service.index');
    }

    public function show(int $id)
    {
        $service = Service::findOrFail($id);

        return view('backend.service.show', compact('service'));
    }

    public function edit(int $id)
    {
        $service = Service::findOrFail($id);

        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, int $id)
    {
        $service = Service::findOrFail($id);

        $image_path1 = $service->service_icon;
        $image_path2 = $service->service_image;

        if ($request->hasFile('service_icon')) {

            if ($image_path1 && Storage::disk(config('filesystems.default'))->exists($image_path1)) {
                Storage::disk(config('filesystems.default'))->delete($image_path1);
            }

            $image_path1 = $request->file('service_icon')->store('service_icons', 'public');
        }

        if ($request->hasFile('service_image')) {

            if ($image_path2 && Storage::disk(config('filesystems.default'))->exists($image_path2)) {
                Storage::disk(config('filesystems.default'))->delete($image_path2);
            }

            $image_path2 = $request->file('service_image')->store('service_images', 'public');
        }

        $service->update([
            'service_title' => $request->service_title,
            'service_slug' => Str::slug($request->service_slug ?? $request->service_title),
            'service_icon' => $image_path1,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'service_image' => $image_path2,
            'updated_by' => Auth::user()->id,
        ]);

        return redirect()
            ->route('admin.service.index')
            ->with('success', 'Service Updated Successfully');
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();

        try {
            $service = Service::findOrFail($id);

            $image_path1 = $service->service_icon;
            $image_path2 = $service->service_image;

            if ($image_path1 && Storage::disk(config('filesystems.default'))->exists($image_path1)) {
                Storage::disk(config('filesystems.default'))->delete($image_path1);
            }

            if ($image_path2 && Storage::disk(config('filesystems.default'))->exists($image_path2)) {
                Storage::disk(config('filesystems.default'))->delete($image_path2);
            }

            $service->delete();

            DB::commit();

            return redirect()
                ->route('admin.service.index')
                ->with('success', 'Service deleted Successfully!');
        } catch (Throwable $th) {

            DB::rollBack();

            Log::error('Error deleting Service', [
                $th->getMessage() . '-' . $th->getLine()
            ]);

            return redirect()
                ->route('admin.service.index')
                ->with('success', 'Something went Wrong!');
        }
    }
}
