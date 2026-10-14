<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; 

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'year' => 2005, 'stock' => 15],
            ['title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'year' => 1980],
            ['title' => 'Filosofi Teras', 'author' => 'Henry Manampiring', 'year' => 2018, 'stock' => 12],
            ['title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori', 'year' => 2017, 'stock' => 9],
            ['title' => 'Pulang', 'author' => 'Leila S. Chudori', 'year' => 2012, 'stock' => 6],

        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
