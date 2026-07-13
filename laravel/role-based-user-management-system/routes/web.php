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
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AuthController::class, 'adminDashboard'])
            ->name('dashboard');

        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');

        Route::get('/users/create', [UserController::class, 'create'])
            ->name('users.create');

        Route::post('/users', [UserController::class, 'store'])
            ->name('users.store');

        Route::get('/users/{user}/edit', [UserController::class, 'edit'])
            ->name('users.edit');

        Route::put('/users/{user}', [UserController::class, 'update'])
            ->name('users.update');

        Route::delete('/users/{user}', [UserController::class, 'destroy'])
            ->name('users.destroy');
    });


// Customer Dashboard
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware(['auth', 'role:customer']);

// profile

Route::middleware(['auth'])
    ->prefix('profile')
    ->name('profile.')
    ->group(function() {
    
        Route::get('/', [AuthController::class, 'profile'])
            ->name('index');
        
        Route::get('/edit', [AuthController::class, 'editProfile'])
            ->name('edit');
        
        Route::put('/update', [AuthController::class, 'updateProfile'])
            ->name('update');
        
        // Change Password show 
        Route::get('/change-password', [AuthController::class, 'showChangePassword'])
            ->name('change-password');

        // Change password
        Route::put('/change-password', [AuthController::class, 'changePassword'])
            ->name('change-password');
    });

// logout
Route::post('/logout', [AuthController::class, 'logout']);
