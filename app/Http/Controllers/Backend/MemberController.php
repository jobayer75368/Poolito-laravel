<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;
use Throwable;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('backend.team.index', compact('members'));
    }

    public function create()
    {
        return view('backend.team.create');
    }
    public function store(Request $request)

    {

        $request->validate([
            'member_image' => 'image|mimes:jpg,jpeg,png,webp,gif,avif|max:1536',
        ], [
            'member_image.max' => 'Image size must not be larger than 1.5 MB.',
        ]);

        $image_path = null;
        if ($request->hasFile('member_image')) {
            $file = $request->file('member_image');

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
            $image_path = $this->uploadImage($file, 'member_images');
            unlink($path);
        }

        Member::create([

            'name' => $request->name,
            'slug' => Str::slug($request->slug ?? $request->name),
            'designation' => $request->designation,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'age' => $request->age,
            'experience' => $request->experience,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'status' => $request->status,
            'member_image' => $image_path,

        ]);
        return redirect()->route('admin.team.index')->with('success', 'Member created successfully!');
    }

    public function show(int $id)
    {
        $member = Member::findOrFail($id);
        return view('backend.team.show', compact('member'));
    }

    public function edit(int $id)
    {
        $member = Member::findOrFail($id);
        return view('backend.team.edit', compact('member'));
    }

    public function update(Request $request, int $id)

    {

        $request->validate([
            'member_image' => 'image|mimes:jpg,jpeg,png,webp,gif,avif|max:1536',
        ], [
            'member_image.max' => 'Image size must not be larger than 1.5 MB.',
        ]);

        $member = Member::findOrFail($id);
        $image_path = $member->member_image;

        if ($request->hasFile('member_image')) {

            $file = $request->file('member_image');

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
            $image_path = $this->uploadImage($file, 'member_images');
            unlink($path);

            // Delete previous image
            if (app()->environment('local')) {
                $this->deleteImage($member->member_image);
            } else {
                $publicId = pathinfo(
                    parse_url($member->member_image, PHP_URL_PATH),
                    PATHINFO_FILENAME
                );

                (new \Cloudinary\Cloudinary())
                    ->uploadApi()
                    ->destroy('member_images/' . $publicId);
            }
        }

        $member->update([

            'name' => $request->name,
            'slug' => Str::slug($request->slug ?? $request->name),
            'designation' => $request->designation,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'age' => $request->age,
            'experience' => $request->experience,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'status' => $request->status,
            'member_image' => $image_path,

        ]);
        return redirect()->route('admin.team.index')->with('success', 'Member Updated Successfully');
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $member = Member::findOrFail($id);
            $image_path = $member->member_image;

            if (app()->environment('local')) {
                $this->deleteImage($image_path);
            } else {
                $publicId = pathinfo(parse_url($image_path, PHP_URL_PATH), PATHINFO_FILENAME);

                (new \Cloudinary\Cloudinary())
                    ->uploadApi()
                    ->destroy('member_images/' . $publicId);
            }

            $member->delete();
            DB::commit();
            return redirect()->route('admin.team.index')->with('success', 'Member deleted Successfully!');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error('Error deleting Member', [$th->getMessage() . '-' . $th->getLine()]);
            return redirect()->route('admin.team.index')->with('success', 'Something went Wrong!');
        }
    }
}
