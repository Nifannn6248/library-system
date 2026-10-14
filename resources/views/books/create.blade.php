@extends('layouts.app')
@section('title', 'Tambah Buku Baru')

@section('content')
    <h2>Form Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST" style="max-width: 450px; margin-top: 15px;">
        @csrf

        <div style="margin-bottom: 12px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">Judul Buku:</label>
            <input type="text" name="title" required style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <div style="margin-bottom: 12px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">Penulis:</label>
            <input type="text" name="author" required style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <div style="margin-bottom: 12px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">Tahun Terbit:</label>
            <input type="number" name="year" required style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <div style="margin-bottom: 18px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">Stok Buku:</label>
            <input type="number" name="stock" required style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <button type="submit" style="background:#28a745; color:white; border:none; padding:10px 20px; border-radius:4px; font-weight:bold; cursor:pointer;">Simpan Data</button>
        <a href="{{ route('books.index') }}" style="margin-left:10px; color:#6c757d; text-decoration:none;">Batal</a>
    </form>
@endsection
