<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookRequest $request)
    {
        try {
            $book = Book::create([
                'title' => $request->title,
                'year' => $request->year,
                'author' => $request->author,
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


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(BookRequest $request, Book $book)
    {
        try {
            $book->update([
                'title' => $request->title,
                'year' => $request->year,
                'author' => $request->author,
                'description' => $request->description,
            ]);

            return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memperbarui buku. Silakan coba lagi.');
        }
    }

    public function destroy(Book $book)
    {
        try {
            $book->delete();
            return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus buku.');
        }
    }
}
