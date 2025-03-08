<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EnsureUserIsNotAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth', EnsureUserIsNotAdmin::class])->group(function () {
    Route::get('/dashboard', function () {
        $books = \App\Models\Book::limit(4)->get();
        return view('dashboard', compact('books'));
    })->name('dashboard');
    Route::get('/books', function () {
        $books = \App\Models\Book::paginate(10);
        return view('books.index', compact('books'));
    })->name('books.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
