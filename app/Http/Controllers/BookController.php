<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Larkar Pelangi', 'author' => 'Andrea Hirata', 'year' => 2005],
            ['id' => 2, 'title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'year' => 1980],
            ['id' => 3, 'title' => 'Filosofi Teras', 'author' => 'Henry Manampiring', 'year' => 2018],
            ['id' => 4, 'title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori', 'year' => 2017],
            ['id' => 5, 'title' => 'Pulang', 'author' => 'Leila S. Chudori', 'year' => 2012],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $stock = ($id % 2 == 0) ? 0 : 7; 
        return view('books.show', compact('id', 'stock'));
    }
}
