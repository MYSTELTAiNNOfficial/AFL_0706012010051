<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'book_name',
        'year_release',
        'description',
        'author',
        'publisher',
        'type_name',
        'created_at',
        'update_at'
    ];

    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class, 'type_name', 'code');
    }
}
