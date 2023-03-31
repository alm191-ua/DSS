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
    // Route::post('/book/create', [App\Http\Controllers\BookController::class, 'store'])->name('book.store');UsersController

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/404', function () {
        return view('errors.404');
    })->name('404');
    Route::get('/terms', function () {
        return view('terms');
    })->name('terms');

    Route::group(['middleware' => ['guest']], function() {
        Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLogin'])->name('login.show');
        Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login.perform');
        Route::get('/register', [App\Http\Controllers\RegisterController::class, 'showRegister'])->name('register.show');
        Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register.perform');
    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout.perform');
    });

    Route::get('/profile', [App\Http\Controllers\UsersController::class, 'showProfile'])->name('profile');

    Route::post('/bookshelf/create', [App\Http\Controllers\BookshelfController::class, 'store'])->name('bookshelf.store');
    Route::get('/bookshelf/list', [App\Http\Controllers\BookshelfController::class, 'list'])->name('bookshelf.list');
    Route::delete('/bookshelf/delete/{id}', [App\Http\Controllers\BookshelfController::class, 'delete', 'id'])->name('bookshelf.delete');

    Route::get('/user/edit/{id}', [App\Http\Controllers\UsersController::class, 'showEdit', 'id'])->name('user-edit.show');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    
    Route::get('/books/create', [App\Http\Controllers\BooksController::class, 'create'])->name('book-create');
    Route::get('/books/delete/{id}', [App\Http\Controllers\BooksController::class, 'delete', 'id'])->name('book-delete');
    Route::put('/books/update/{id}', [App\Http\Controllers\BooksController::class, 'update', 'id'])->name('book-edit');
    Route::get('/books', [App\Http\Controllers\BooksController::class, 'list'])->name('books-list');
    Route::get('/book/{id}', [App\Http\Controllers\BooksController::class, 'index', 'id'])->name('book');
    Route::get('/book/download/{id}', [App\Http\Controllers\BooksController::class, 'download', 'id'])->name('book-download');
    Route::get('/book/read/{id}', [App\Http\Controllers\BooksController::class, 'showFile', 'id'])->name('book-read');
    
    Route::get('/author/{id}', [App\Http\Controllers\AuthorsController::class, 'show', 'id'])->name('author');
    Route::put('/author/update/{id}', [App\Http\Controllers\AuthorsController::class, 'update', 'id'])->name('author-edit');
    Route::get('/author/delete/{id}', [App\Http\Controllers\AuthorsController::class, 'delete', 'id'])->name('author-delete');
    Route::get('/authors', [App\Http\Controllers\AuthorsController::class, 'index'])->name('authors');
    
    Route::put('/suggestion/update/{id}', [App\Http\Controllers\SuggestionsController::class, 'update', 'id'])->name('suggestion-edit');
    Route::get('/suggestion/delete/{id}', [App\Http\Controllers\SuggestionsController::class, 'delete', 'id'])->name('suggestion-delete');
    
    Route::put('/user/update/{id}', [App\Http\Controllers\UsersController::class, 'update', 'id'])->name('user-edit');
    Route::get('/user/delete/{id}', [App\Http\Controllers\UsersController::class, 'delete', 'id'])->name('user-delete');

    Route::put('/category/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update', 'id'])->name('category-edit');
    Route::get('/category/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'delete', 'id'])->name('category-delete');

    Route::put('/review/update/{id}', [App\Http\Controllers\ReviewsController::class, 'update', 'id'])->name('review-edit');
    Route::get('/review/delete/{id}', [App\Http\Controllers\ReviewsController::class, 'delete', 'id'])->name('review-delete');
    
    Route::get('/contactus', [App\Http\Controllers\ContactusController::class, 'index'])->name('contactus');
    Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus');
    // Route::post('/contactus', [App\Http\Controllers\ContactusController::class, 'store'])->name('contactus.store');
    
    
    Route::get('/lang/{locale}', function ($locale) {
        if (session('lang', config('app.locale')) != $locale) {
            session()->put('lang', $locale);
        }
        return back();
    })->name('locale');

});