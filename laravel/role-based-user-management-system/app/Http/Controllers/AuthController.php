<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
    // profile
    public function profile()
    {
        return view('profile.index');

    }
    // edit
    public function editProfile()
    {
        return view('profile/edit');
    }
    // update
    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',

            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'file' => 'nullable|file|mimes:pdf,doc,docx,xlsx,xls|max:5120',
        ]);

        $user = Auth::user();
        // image validation
        if($request->hasFile('image')){
            if($user->image && 
                Storage::disk('public')->exists($user->image))
            {
                Storage::disk('public')->delete($user->image);
            }
     
            $image = $request->file('image');
            $extension = $image->extension();
            // user_15.png
            $fileName = 'user_' . $user->id . '.' . $extension;
            // image store path
            $path = $image->storeAs('profiles', $fileName, 'public');
            // file dtore path
            $user->image = $path;
            
        }
        // file validation
        if($request->hasFile('file'))
            {
                if($user->file &&
                    Storage::disk('public')->exists($user->file))
                    {
                        Storage::disk('public')->delete($user->file);
                    }

                $file = $request->file('file');
                $extension = $file->extension();
                $fileName = 'file_' . $user->id . '.' . $extension;
                $filePath = $file->storeAs('files', $fileName, 'public');
                $user->file = $filePath;
            }

        
        $user->name = $validated['name'];

        $user->save();

        return redirect('/profile')
                ->with('success', "Profile updated successfully");
    }
    // changepassw
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
