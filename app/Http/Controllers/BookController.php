<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private function getInitialBooks() {
        return [
            ['id' => 1, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'year' => 2005, 'stock' => 10],
            ['id' => 2, 'title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'year' => 1980, 'stock' => 5],
            ['id' => 3, 'title' => 'Filosofi Teras', 'author' => 'Henry Manampiring', 'year' => 2018, 'stock' => 15],
            ['id' => 4, 'title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori', 'year' => 2017, 'stock' => 8],
            ['id' => 5, 'title' => 'Pulang', 'author' => 'Leila S. Chudori', 'year' => 2012, 'stock' => 12],
        ];
    }

    public function index()
    {
        $books = $this->getInitialBooks();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        return dd("Aksi STORE Berhasil! Data form ditangkap oleh Controller:", $request->all());
    }

    public function edit($id)
    {
        $books = $this->getInitialBooks();
        $book = collect($books)->firstWhere('id', $id);
        $book = (object) $book; 

        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        return dd("Aksi UPDATE Berhasil! Data buku ID ".$id." diperbarui dengan nilai:", $request->all());
    }

    public function destroy($id)
    {
        return dd("Aksi DESTROY Berhasil! Permintaan hapus data buku dengan ID: " . $id . " sukses dijalankan.");
    }
}
