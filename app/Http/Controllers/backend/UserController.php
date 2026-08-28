<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Throwable;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $totalUsers = count($users);
        $activeUsers = count(User::where('status', 'active')->get());
        $pendingUsers = count(User::where('status', 'pending')->get());
        $inactiveUsers = count(User::where('status', 'inactive')->get());
        return view('backend.user.index', compact('users', 'totalUsers', 'activeUsers', 'pendingUsers', 'inactiveUsers'));
    }
    public function dashboardIndex()
    {
        $users = User::latest()->get();
        $totalUsers = count($users);
        $totalServices = count(Service::where('status', 'active')->get());
        $totalMembers = count(Member::where('status', 'active')->get());
        $totalBlogs = count(Blog::where('status', 'published')->get());
        return view('backend.dashboard', compact('users', 'totalUsers', 'totalServices', 'totalMembers', 'totalBlogs'));
    }
    public function show(int $id)
    {
        $user = User::findOrFail($id);
        return view(Auth::user()->role == 'editor' ? 'backend.user.inaccessible' : 'backend.user.show', compact('user'));
    }

    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.edit', compact('user'));
    }
    public function update(Request $request, int $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'status' => $request->status,
            'role' => $request->role,
        ]);
        return redirect()->route('admin.user.index')->with('success', 'User permissions were updated successfully!');
    }

    public function approve(int $id)
    {

        $user = User::findOrFail($id);

        $user->update([
            'status' => 'active',
        ]);
        return redirect()->route('admin.user.index')->with('success', 'User Approved successfully!');
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $image_path = $user->user_image;
            if ($image_path && Storage::disk('public')->exists($image_path)) {
                Storage::disk('public')->delete($image_path);
            }

            $user->delete();
            DB::commit();
            return redirect()->route('admin.user.index')->with('success', 'User deleted Successfully!');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error('Error deleting User', [$th->getMessage() . '-' . $th->getLine()]);
            return redirect()->route('admin.user.index')->with('success', 'Something went Wrong!');
        }
    }
}
