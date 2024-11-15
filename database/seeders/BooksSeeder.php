<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Sample Book 1',
            'author' => 'John Doe',
            'quantity' => 5,
            'category' => 'physical',
        ]);
        
        Book::create([
            'title' => 'Sample E-Book 1',
            'author' => 'Jane Smith',
            'quantity' => 3,
            'category' => 'ebook',
        ]);
    }
}
