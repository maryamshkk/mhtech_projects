<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Store Register Form 
    public function showRegister()
    {
        return view('auth.register');
    }

    // Store User
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect('/login');
    }
    // Show Login Form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Login User
    public function login(Request $request)
    {
        $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
        
        if (Auth::attempt($credentials))
        {   
                $request->session()->regenerate();    
                return redirect('/dashboard');
            }
        
            return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }
    // Dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

    // Profile
    public function profile()
    {
        return view('profile.index');
    }

    // Edit Profile
    public function editprofile()
    {
        return view('profile.edit');
    }
    // Update profile 
    public function updateprofile(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email,'.Auth::id(),
        ]);
        $user = Auth::user();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/profile');
    }

    // show change passowrd
    public function showChangePassword()
    {
        return view('profile.changePassword');
    }

    // change password
    public function changePassword(Request $request)
    {
        $request->validate([
        'current_password' => 'required',
        'password' => 'required|min:6|confirmed',
        ]);
        if(!Hash::check($request->current_password, Auth::user()->password))
            {
                return back()->withErrors([
                    'current_password' => 'Current password is incorrect.',
                ]);
            }
        $user = Auth::user();
        
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect('/profile');
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
