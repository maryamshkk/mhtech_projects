<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    // show all users 
    public function index(Request $request)
    {
        // access all users
        $query = User::where('role', 'customer')->latest();
        
        $query->when($request->filled('search'), function($query) use ($request){
            $query->where(function ($query) use ($request){
                $query->where('name', 'like', '%' . $request->search. '%')
                    ->orWhere('email', 'like', '%' . $request->search. '%');
            });    
        });
        
        $users = $query->paginate(5)->withQueryString();

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

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name'=> 'required|min:3|max:100',
            'password' => 'nullable|min:6|confirmed',
            'role' => 'required|in:admin,customer',
        ]);

        $user->name = $validated['name'];

        $user->role = $validated['role'];

        // Update password only if admin entered one
        if ($request->filled('password')) {

            $user->password = Hash::make($request->password);

        }

        $user->save();


        return redirect('/admin/users')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        // Admin apna account delete nhi ker skta
        if (Auth::id() == $user->id)
            {
                return back()->with('error', 'You cannot delete your own account');
            }
        if ($user->image &&
                Storage::disk('public')->exists($user->image))
                {
                    Storage::disk('public')->delete($user->image);
                }
        
        $user->delete();

        return redirect('/admin/users')->with('success', 'User deleted successfully. ');
    }
}

// 🟡 Eloquent Advanced (25%)

// Completed:

// ✅ Basic Queries

// Remaining:

// ⏳ where()
// ⏳ orWhere()
// ⏳ latest()
// ⏳ orderBy()
// ⏳ firstOrFail()
// ⏳ with()
// ⏳ whereHas()
// ⏳ Eager Loading
