<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('Book.index', compact('books'));
    }

    public function create()
    {
        return view('Book.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:books,title',
            'author'=>'required', 
            'category'=>'required', 
            'isbn'=>'required|unique:books,isbn', 
            'publisher'=>'required', 
            'publication_year'=>'required', 
            'price'=>'required', 
            'quantity'=>'required', 
            'description'=>'required',
        ]);
        
        Book::create($request->all());
        return redirect()->route('books.index');
    }
    public function show(Book $book)
    {
        return view('Book.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('Book.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:books,title,' . $book->id,
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books,isbn,' . $book->id,
            'publisher' => 'required|string|max:255',
            'publication_year' => 'required|integer',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'required|string',
        ]);
        $book->update($request->all());
        return redirect()->route('books.index');

    }
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
