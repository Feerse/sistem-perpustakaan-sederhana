<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Borrowing extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'borrow_date',
        'return_date',
        'status'
    ];

    /**
     * Get the user that owns the Borrowing
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the book that owns the Borrowing
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    protected static function booted()
    {
        static::created(function ($borrowing) {
            $borrowing->book->update([
                'status' => 'tidak tersedia'
            ]);
        });

        static::updated(function ($borrowing) {
            if ($borrowing->status === 'dikembalikan') {
                $borrowing->book->update([
                    'status' => 'tersedia'
                ]);
            }
        });
    }
}
