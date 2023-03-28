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
    Route::get('/terms', function () {
        return view('terms');
    })->name('terms');
    Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
    Route::get('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
    Route::get('/books/create', [App\Http\Controllers\BooksController::class, 'create'])->name('book-create');
    Route::get('/books/delete/{id}', [App\Http\Controllers\BooksController::class, 'delete', 'id'])->name('book-delete');
    Route::put('/books/update/{id}', [App\Http\Controllers\BooksController::class, 'update', 'id'])->name('book-edit');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/books', [App\Http\Controllers\BooksController::class, 'list'])->name('books-list');
    Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus');
    Route::get('/author/{id}', [App\Http\Controllers\AuthorsController::class, 'show', 'id'])->name('author');
    Route::get('/authors', [App\Http\Controllers\AuthorsController::class, 'index'])->name('authors');
    Route::get('/contactus', [App\Http\Controllers\ContactusController::class, 'index'])->name('contactus');
    Route::get('/book/{id}', [App\Http\Controllers\BooksController::class, 'index', 'id'])->name('book');
    // Route::post('/contactus', [App\Http\Controllers\ContactusController::class, 'store'])->name('contactus.store');
    
    
    Route::get('/lang/{locale}', function ($locale) {
        if (session('lang', config('app.locale')) != $locale) {
            session()->put('lang', $locale);
        }
        return back();
    })->name('locale');

});