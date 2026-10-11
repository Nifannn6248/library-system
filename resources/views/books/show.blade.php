@extends('layouts.app')
@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>
    <p>Menampilkan informasi detail berdasarkan parameter URL.</p>
    
    <ul>
        <li><strong>ID Buku:</strong> {{ $id }}</li>
        <li>
            <strong>Status Ketersediaan:</strong> 
            @if($stock > 0)
                <span style="color: green;">Buku tersedia (Stok: {{ $stock }})</span>
            @else
                <span style="color: red;">Buku sedang habis</span>
            @endif
        </li>
    </ul>

    <p><a href="/books">&laquo; Kembali ke Daftar Buku</a></p>
@endsection
