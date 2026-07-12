<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});

// register 
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// login
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// ADMIN dashboard
Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard'])->middleware(['auth', 'role:admin']);
// view user in admin
Route::get('/admin/users', [UserController::class, 'index'])->middleware(['auth', 'role:admin']);
// create and store user in admin panel
Route::get('/admin/users/create', [UserController::class, 'create'])->middleware(['auth', 'role:admin']);
Route::post('/admin/users', [UserController::class, 'store'])->middleware(['auth', 'role:admin']);


// dashboard
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware(['auth', 'role:customer']);

// profile
Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth');
Route::get('/profile/edit', [AuthController::class, 'editProfile'])->middleware('auth');
Route::put('/profile/update', [AuthController::class, 'updateProfile'])->middleware('auth');
Route::post('/profile', [AuthController::class, 'updateProfile']);

// Change Password show 
Route::get('/profile/change-password', [AuthController::class, 'showChangePassword'])->middleware('auth');
// Change password
Route::put('/profile/change-password', [AuthController::class, 'changePassword'])->middleware('auth');
// logout
Route::post('/logout', [AuthController::class, 'logout']);
