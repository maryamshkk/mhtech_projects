<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


// index route
Route::get('/books', [BookController::class, 'index'])->name('books.index');
// create route
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
// store information
Route::post('/books', [BookController::class, 'store'])->name('books.store');
// show one feild data 
Route::get('/books/{book}/show', [BookController::class, 'show'])->name('books.show');
// edit feild
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
// update feild
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
// delete feild
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
