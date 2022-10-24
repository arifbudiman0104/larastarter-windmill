<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalAdminUsers = User::where('is_admin', true)->count();
        $users = User::paginate(8);

        return view('users.index', compact('users', 'totalUsers', 'totalAdminUsers'));
    }
}
