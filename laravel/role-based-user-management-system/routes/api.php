<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// all users
Route::get('/users', [UserController::class, 'index']);

// single user api
Route::get('users/{id}', [UserController::class, 'show']);

// create user api 
Route::post('/users', [UserController::class, 'store']);

// update user
Route::put('/users/{id}', [UserController::])