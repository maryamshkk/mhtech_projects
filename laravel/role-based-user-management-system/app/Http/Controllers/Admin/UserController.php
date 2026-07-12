<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    // show all users 
    public function index()
    {
        // access all users
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    
    // create new user
    public function create()
    {
        return view('admin.users.create');
    }

    // store user info
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,customer',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'role' => $validated['role'],
        ]);

        return redirect('/admin/users')
        ->with('success', 'User created successfully');
    }

}
