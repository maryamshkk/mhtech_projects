<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Register 
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

// Dashboard
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

// Profile
Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth');
Route::get('/profile/edit', [AuthController::class, 'editprofile'])->middleware('auth');
Route::put('/profile/update', [AuthController::class, 'updateprofile'])->middleware('auth');

// Show Change Password page
Route::get('/profile/changepassword', [AuthController::class, 'showChangePassword'])->middleware('auth');
// Change Password
Route::put('/profile/changepassword', [AuthController::class, 'changePassword'])->middleware('auth');

// Logout
Route::post('/logout', [AuthController::class, 'logout']);

