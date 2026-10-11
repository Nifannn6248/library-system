@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <h2>{{ $appTitle }} Dashboard</h2>
    <p>{{ $appDescription }}</p>
    
    <h3>Statistik Perpustakaan (Dummy):</h3>
    <ul>
        <li>Jumlah Buku: <strong>{{ $totalBooks }}</strong></li>
        <li>Jumlah Kategori: <strong>{{ $totalCategories }}</strong></li>
        <li>Jumlah Member: <strong>{{ $totalMembers }}</strong></li>
    </ul>
@endsection
