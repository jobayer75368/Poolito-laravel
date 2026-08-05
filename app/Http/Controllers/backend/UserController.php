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
}
