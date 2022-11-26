<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'showHomePage'])->name('home');
Route::get('/book/{book}', [BookController::class, 'showDetailBook'])->name('book');
Route::get('/publisher', [PublisherController::class, 'showHomePage'])->name('publisher.index');
Route::get('/publisher/{publisher}', [PublisherController::class, 'showDetailPage'])->name('publisher.detail');
Route::get('/category/{category}', [CategoryController::class, 'showCategoryPage'])->name('category');
Route::get('/contact', function(){
    $categories = Category::all();
    return view('contact', compact('categories'));
})->name('contact');
