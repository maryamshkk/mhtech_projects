<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

// Show All data 
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
// create all data
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
// store data
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
// show stored info
Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');
// Edit certain feild
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
// Update data
Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update');
// Delete data 
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');