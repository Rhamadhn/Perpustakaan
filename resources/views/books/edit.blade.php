@extends('layout.master')

@section('title', 'Edit Buku')

@section('content')
    <div class="main-content"> 
        <h3 class="mb-4">Edit Buku</h3>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Judul Buku</label>
                <input type="text" name="title" id="title" class="form-control w-100" 
                       placeholder="Contoh: Laskar Pelangi" value="{{ old('title', $book->title) }}" required>
                @error('title')
                    <div class="text-danger text-start small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Tahun Terbit</label>
                <input type="number" name="year" id="year" class="form-control w-100" 
                       placeholder="Contoh: 2005" value="{{ old('year', $book->year) }}" required>
                @error('year')
                    <div class="text-danger text-start small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Penulis</label>
                <input type="text" name="author" id="author" class="form-control w-100" 
                       placeholder="Contoh: Andrea Hirata" value="{{ old('author', $book->author) }}" required>
                @error('author')
                    <div class="text-danger text-start small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control w-100" rows="5" 
                          placeholder="Tuliskan ringkasan atau deskripsi buku..." required>{{ old('description', $book->description) }}</textarea>
                @error('description')
                    <div class="text-danger text-start small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Perbarui Buku</button>
                <a href="{{ route('books.index') }}" class="btn btn-info">Kembali</a>
            </div>
        </form>
    </div>
@endsection
