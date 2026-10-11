<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $appTitle = 'Library System';
        $appDescription = 'Sistem Informasi Manajemen Perpustakaan berbasis Web Framework.';
        $totalBooks = 8;
        $totalMembers = 5;
        $totalCategories = 5;

        return view('dashboard.index', compact('appTitle', 'appDescription', 'totalBooks', 'totalMembers', 'totalCategories'));
    }
}
