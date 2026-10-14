@extends('layouts.app')
@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-top: 15px;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book['id'] }}</td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['year'] }}</td>
                    <td>{{ $book['stock'] }}</td> 
                    <td>
                        <a href="/books/{{ $book['id'] }}">Lihat Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
