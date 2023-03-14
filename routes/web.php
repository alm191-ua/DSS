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

    //------- temporales para probar las vistas, hay que crear los controladores
    Route::get('/', function () { 
        return view('welcome');
    })->name('home');

    //----------------
    
    Route::get('/book-detail/{id}', [App\Http\Controllers\BookController::class, 'index', 'id'])->name('book');
    Route::get('/books-list', [App\Http\Controllers\BookslistController::class, 'index'])->name('books-list');
    Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus');
    Route::get('/author', [App\Http\Controllers\AuthorController::class, 'index'])->name('author');
    Route::get('/authors', [App\Http\Controllers\AuthorsController::class, 'index'])->name('authors');
    Route::get('/contactus', [App\Http\Controllers\ContactusController::class, 'index'])->name('contactus');
    // Route::post('/contactus', [App\Http\Controllers\ContactusController::class, 'store'])->name('contactus.store');

    Route::get('/lang/{locale}', function ($locale) {
        if (session('lang', config('app.locale')) != $locale) {
            session()->put('lang', $locale);
        }
        return back();
    })->name('locale');

});