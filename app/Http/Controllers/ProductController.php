<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $books = [
            't1' => 'The Catcher in the Rye', 'a1' => 'J.D. Salinger', 'p1' => 1951,
            't2' => 'To Kill a Mockingbird', 'a2' => 'Harper Lee', 'p2' => 1960,
            't3' => '1984', 'a3' => 'George Orwell', 'p3' => 1949,
            't4' => 'The Great Gatsby', 'a4' => 'F. Scott Fitzgerald', 'p4' => 1925,
            't5' => 'Pride and Prejudice', 'a5' => 'Jane Austen', 'p5' => 1813,
        ];

        return view('/index', $books );
    }
}
