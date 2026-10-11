<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = ['Sastra Klasik', 'Fiksi Sejarah', 'Pengembangan Diri', 'Drama Populer', 'Misteri & Petualangan'];
        return view('categories.index', compact('categories'));
    }
}
