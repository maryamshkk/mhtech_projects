<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'category', 'isbn', 'publisher', 'publication_year', 'price', 'quantity', 'description'];
}
