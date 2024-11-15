<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_title',
        'requestor_name',
        'status', // pending, approved, rejected
    ];
}

