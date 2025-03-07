<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'year',
        'cover',
        'status'
    ];

    /**
     * Get all of the borrowing for the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function borrowing(): HasMany
    {
        return $this->hasMany(Borrowing::class, 'book_id', 'id');
    }
}
