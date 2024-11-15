<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    public function index()
    {
        return view('librarian.dashboard');
    }

    public function inventory()
    {
        $books = Book::all();
        return view('librarian.inventory', compact('books'));
    }

    public function updateInventory(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        Book::create($validated);
        return back()->with('success', 'Book added successfully.');
    }
}
