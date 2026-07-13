<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'customer',
        ]);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('/login');

    }
    public function showLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin')
                {
                    return redirect('/admin/dashboard');
                }
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }
    public function adminDashboard()
    {
        return view('admin.index');
    }
    public function dashboard()
    {
        return view('dashboard');

    }
    public function profile()
    {
        return view('profile.index');

    }
    public function editProfile()
    {
        return view('profile/edit');
    }
    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
        ]);
        $user = Auth::user();

        $user->update([
            'name' => $validated['name'],
        ]);

        return redirect('/profile');
    }

    public function showChangePassword()
    {
        return view('profile.change-password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]); 
        if (!Hash::check($request->current_password, Auth::user()->password))
            {
                return back()->withErrors([
                    'current_password' => 'Current password is incorrect',
                ]);
            }

        $user = Auth::user();
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        return redirect('/profile');
    }

    public function logout(Request $request)
    {
        Auth::logout ();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }
}
