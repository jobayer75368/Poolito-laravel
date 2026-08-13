<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        $totalUsers = count($users);
        return view('backend.users', compact('users', 'totalUsers'));
    }
    public function dashboardIndex()
    {
        $users = User::latest()->get();
        return view('backend.dashboard', compact('users'));
    }
}
