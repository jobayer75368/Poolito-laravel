<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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

        // $request->validate([
        //     'member_image' => 'required|image',
        // ]);
        $image_path = null;
        if ($request->hasFile('member_image')) {
            $image_path = $request->file('member_image')->store('member_images', 'public');
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

        // $request->validate([
        //     'member_image' => 'required|image',
        // ]);
        $member = Member::findOrFail($id);
        $image_path = $member->member_image;
        if ($request->hasFile('member_image')) {

            if ($image_path && Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }
            $image_path = $request->file('member_image')->store('member_images', 'public');
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
            if ($image_path && Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
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
