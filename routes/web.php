<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BookController::class, 'showHomePage'])->name('home');
Route::get('/book/{book}', [BookController::class, 'showDetailBook'])->name('book');
Route::get('/publisher', [PublisherController::class, 'showHomePage'])->name('publisher');
Route::get('/category/{category}', [CategoryController::class, 'showCategoryPage'])->name('category');
Route::get('/contact', function(){
    $categories = Category::all();
    return view('contact', compact('categories'));
})->name('contact');
