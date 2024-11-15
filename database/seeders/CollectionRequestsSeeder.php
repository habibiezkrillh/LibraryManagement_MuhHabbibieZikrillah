<?php

namespace Database\Seeders;

use App\Models\CollectionRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionRequestsSeeder extends Seeder
{
    public function run(): void
    {
        CollectionRequest::create([
            'book_title' => 'Sample Book 1',
            'requestor_name' => 'Student A',
            'status' => 'pending',
        ]);
        
        CollectionRequest::create([
            'book_title' => 'Sample E-Book 1',
            'requestor_name' => 'Student B',
            'status' => 'approved',
        ]);
    }
}
