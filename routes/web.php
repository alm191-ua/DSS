<?php

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

Route::group(['middleware' => 'language'], function () {
    
    Route::get('/example-form', function () {
        return view('forms.example');
    })->name('example-form');
    // Route::post('/book/create', [App\Http\Controllers\BookController::class, 'store'])->name('book.store');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/404', function () {
        return view('errors.404');
    })->name('404');
    Route::get('/terms', function () {
        return view('terms');
    })->name('terms');
    Route::post('/books/store', [App\Http\Controllers\BooksController::class, 'store'])->name('books.store');
    Route::get('/books/create', [App\Http\Controllers\BooksController::class, 'create'])->name('book-create');
    Route::get('/books/delete/{id}', [App\Http\Controllers\BooksController::class, 'delete', 'id'])->name('book-delete');
    Route::put('/books/update/{id}', [App\Http\Controllers\BooksController::class, 'update', 'id'])->name('book-edit');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/books', [App\Http\Controllers\BooksController::class, 'list'])->name('books-list');
    Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus');
    Route::get('/author/{id}', [App\Http\Controllers\AuthorsController::class, 'show', 'id'])->name('author');
    Route::get('/authors', [App\Http\Controllers\AuthorsController::class, 'index'])->name('authors');
    Route::get('/authors/create', [App\Http\Controllers\AuthorsController::class, 'create'])->name('author-create');
    Route::put('/authors/update/{id}', [App\Http\Controllers\AuthorsController::class, 'update', 'id'])->name('authors-edit');
    Route::get('/authors/delete/{id}', [App\Http\Controllers\AuthorsController::class, 'delete', 'id'])->name('authors-delete');   
    Route::post('/authors/store', [App\Http\Controllers\AuthorsController::class, 'store'])->name('authors-store');
    Route::get('/contactus', [App\Http\Controllers\ContactusController::class, 'index'])->name('contactus');
    Route::get('/book/{id}', [App\Http\Controllers\BooksController::class, 'index', 'id'])->name('book');
    Route::get('/book/download/{id}', [App\Http\Controllers\BooksController::class, 'download', 'id'])->name('book-download');
    Route::get('/book/read/{id}', [App\Http\Controllers\BooksController::class, 'showFile', 'id'])->name('book-read');
    // Route::post('/contactus', [App\Http\Controllers\ContactusController::class, 'store'])->name('contactus.store');
    
    
    Route::get('/lang/{locale}', function ($locale) {
        if (session('lang', config('app.locale')) != $locale) {
            session()->put('lang', $locale);
        }
        return back();
    })->name('locale');

});