<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $books = Book::with('category')->get();
        return view('dashboard', compact('categories', 'books'));
    }
}
