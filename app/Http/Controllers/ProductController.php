<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'published_year' => 1951],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'published_year' => 1960],
            ['title' => '1984', 'author' => 'George Orwell', 'published_year' => 1949],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'published_year' => 1925],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'published_year' => 1813],
        ];

        return view('books.index', ['books' => $books]);
    }
}
