@extends('layouts.app')
@section('title', 'Tambah Buku Baru')

@section('content')
    <div style="max-width: 500px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-top: 15px;">
        <h2>Form Tambah Buku Baru</h2>
        
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            
            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Judul Buku (Min. 5 Karakter):</label>
                <input type="text" name="title" value="{{ old('title') }}" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                @error('title')
                    <p style="color:red; font-size:13px; margin:5px 0 0 0;">{{ $message }}</p>
                @enderror
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Penulis:</label>
                <input type="text" name="author" value="{{ old('author') }}" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                @error('author')
                    <p style="color:red; font-size:13px; margin:5px 0 0 0;">{{ $message }}</p>
                @enderror
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Tahun Terbit (4 Digit):</label>
                <input type="text" name="year" value="{{ old('year') }}" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                @error('year')
                    <p style="color:red; font-size:13px; margin:5px 0 0 0;">{{ $message }}</p>
                @enderror
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Stok Buku (Maks. 999):</label>
                <input type="text" name="stock" value="{{ old('stock') }}" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                @error('stock')
                    <p style="color:red; font-size:13px; margin:5px 0 0 0;">{{ $message }}</p>
                @enderror
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Kategori Buku:</label>
                <select name="category_id" required style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px; background: white;">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p style="color:red; font-size:13px; margin:5px 0 0 0;">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" style="background:#28a745; color:white; border:none; padding:10px 20px; border-radius:4px; font-weight:bold; cursor:pointer;">Simpan Data</button>
            <a href="{{ route('books.index') }}" style="margin-left:10px; color:#6c757d; text-decoration:none;">Batal</a>
        </form>
    </div>
@endsection
