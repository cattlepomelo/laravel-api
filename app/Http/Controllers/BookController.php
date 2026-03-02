<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // GET /api/books
    public function index()
    {
        return Book::all();
    }

    // POST /api/books
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $book = Book::create($validated);

        return response()->json($book, 201);
    }

    // GET /api/books/{id}
    public function show(Book $book)
    {
        return $book;
    }

    // PUT/PATCH /api/books/{id}
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $book->update($validated);

        return $book;
    }

    // DELETE /api/books/{id}
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json(['message' => 'Book deleted']);
    }
}