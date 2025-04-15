<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        try {
            $books = Book::all();
            return view('books.index', compact('books'));
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memuat daftar buku.');
        }
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookRequest $request)
    {
        try {
            $book = Book::create([
                'title'       => $request->title,
                'year'        => $request->year,
                'author'      => $request->author,
                'description' => $request->description,
            ]);

            if (!$book) {
                return back()->with('error', 'Terjadi masalah saat menambahkan buku. Silakan coba lagi.');
            }

            return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(BookRequest $request, Book $book)
    {
        try {
            $updated = $book->update([
                'title'       => $request->title,
                'year'        => $request->year,
                'author'      => $request->author,
                'description' => $request->description,
            ]);

            if (!$updated) {
                return back()->with('error', 'Gagal memperbarui buku.');
            }

            return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui buku.');
        }
    }

    public function destroy(Book $book)
    {
        try {
            $deleted = $book->delete();

            if (!$deleted) {
                return back()->with('error', 'Gagal menghapus buku.');
            }

            return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus buku.');
        }
    }
}
