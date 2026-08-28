<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function show(): View
    {
        $user = Auth::user();
        return view('backend.profile.show', compact('user'));
    }
    public function edit(Request $request): View
    {
        return view('backend.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $image_path = $user->user_image;

        if ($request->hasFile('user_image')) {

            if ($image_path && Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }

            $image_path = $request->file('user_image')->store('profile_images', 'public');
        }

        $user->update([

            'name' => $request->name,
            'email' => $request->email,
            'user_image' => $image_path,

        ]);

        if ($request->filled('password')) {

            $user->update([
                'password' => bcrypt($request->password),
            ]);
        }

        return redirect()->route('admin.profile.show')
            ->with('success', 'Profile Updated Successfully');
    }
}
