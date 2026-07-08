<?php

// model mein ja ker controller add kerna hota 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Show all products
Route::get('/employees', [EmployeeController::class,'index'])->name('employee.index');
// Create all products
Route::get('/employees/create', [EmployeeController::class,'create'])->name('employee.create');
// Store new products
Route::post('/employees', [EmployeeController::class,'store'])->name('employee.store');
// // Show show products
Route::get('/employees/{employee}', [EmployeeController::class,'show'])->name('employee.show');
// // Edit all products
Route::get('/employees/{employee}/edit', [EmployeeController::class,'edit'])->name('employee.edit');
// // Update all products
Route::put('/employees/{employee}', [EmployeeController::class,'update'])->name('employee.update');
// // Destroy all products
Route::delete('/employees/{employee}', [EmployeeController::class,'destroy'])->name('employee.destroy');



// Student Table route
Route::get('/student', [StudentController::class,'index'])->name('student.index');

// Create all products
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
