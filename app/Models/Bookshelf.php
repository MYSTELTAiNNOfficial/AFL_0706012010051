<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    use HasFactory;

    protected $table = 'bookshelves';
    protected $fillable = [
        'code',
        'type_name',
        'description'
    ];
    public $timestamps = false;
    protected $keyType = 'string';
    protected $primaryKey = 'code';

    public function books()
    {
        return $this->hasMany(Book::class, 'type_name', 'code');
    }
}
