@extends('layouts.app')
@section('title', 'Daftar Buku')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
        <h2>Daftar Buku</h2>
        <a href="{{ route('books.create') }}" style="background: #28a745; color: white; padding: 8px 12px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 14px;">+ Tambah Buku</a>
    </div>

    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Kategori</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>{{ $book->category->name ?? 'Tanpa Kategori' }}</td>
                    <td>
                        <div style="display: flex; gap: 8px; align-items: center;">
                            <a href="/books/{{ $book->id }}" style="color: blue; text-decoration: none;">Lihat Detail</a> | 
                            
                            <a href="{{ route('books.edit', $book->id) }}" style="background: #ffc107; color: black; padding: 3px 8px; text-decoration: none; border-radius: 4px; font-size: 12px; font-weight: bold;">Edit</a> | 
                            
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: #dc3545; color: white; border: none; padding: 4px 8px; border-radius: 4px; font-size: 12px; cursor: pointer; font-weight: bold;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
