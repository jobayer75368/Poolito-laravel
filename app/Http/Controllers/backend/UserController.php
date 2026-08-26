<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $totalUsers = count($users);
        return view('backend.user.index', compact('users', 'totalUsers'));
    }
    public function dashboardIndex()
    {
        $users = User::latest()->get();
        return view('backend.dashboard', compact('users'));
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
