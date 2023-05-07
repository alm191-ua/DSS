<?php

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

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
    
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/404', function () {
        return view('errors.404');
    })->name('404');
    Route::get('/terms', function () {
        return view('terms');
    })->name('terms');
    
    Route::post('/newsletter', [App\Http\Controllers\HomeController::class, 'newsletterStore'])->name('newsletter.store');

    Route::group(['middleware' => ['guest']], function() {
        Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLogin'])->name('login');
        Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
        // Route::get('/register', [App\Http\Controllers\RegisterController::class, 'showRegister'])->name('register.show');
        // Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register.perform');
    });
    
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
        
        Route::prefix('book')->group(function () {
            Route::get('/{id}', [App\Http\Controllers\BooksController::class, 'index', 'id'])->name('book');
            Route::get('/download/{id}', [App\Http\Controllers\BooksController::class, 'download', 'id'])->name('book-download');
            Route::get('/read/{id}', [App\Http\Controllers\BooksController::class, 'showFile', 'id'])->name('book-read');
                
        });

        Route::prefix('bookshelf')->group(function () {
            Route::post('/create', [App\Http\Controllers\BookshelfController::class, 'store'])->name('bookshelf.store');
            Route::put('/add/{book_id}', [App\Http\Controllers\BookshelfController::class, 'add_book', 'book_id'])->name('bookshelf.add_book');
            Route::get('/list', [App\Http\Controllers\BookshelfController::class, 'list'])->name('bookshelf.list');
            Route::delete('/delete/{id}', [App\Http\Controllers\BookshelfController::class, 'delete', 'id'])->name('bookshelf.delete');
            Route::get('/remove/{bookshelf_id}/{book_id}', [App\Http\Controllers\BookshelfController::class, 'remove_book', 'bookshelf_id', 'book_id'])->name('bookshelf.remove_book');

        });

        Route::put('/review/{id}/create', [App\Http\Controllers\ReviewsController::class, 'store', 'id'])->name('review.store');
    
        // Route::delete('/user/softdelete/{id}', [App\Http\Controllers\UsersController::class, 'softDelete', 'id'])->name('user.softdelete');
    });
    
    Route::group(['middleware' => ['admin']], function() {
        Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
        
        Route::get('/books/create', [App\Http\Controllers\BooksController::class, 'create'])->name('book.create');
        Route::post('/books/create', [App\Http\Controllers\BooksController::class, 'store'])->name('book.store');
        Route::get('/books/delete/{id}', [App\Http\Controllers\BooksController::class, 'delete', 'id'])->name('book.delete');
        Route::put('/books/update/{id}', [App\Http\Controllers\BooksController::class, 'update', 'id'])->name('book.edit');
        
        Route::get('/author/create', [App\Http\Controllers\AuthorsController::class, 'create'])->name('author.create');
        Route::post('/author/create', [App\Http\Controllers\AuthorsController::class, 'store'])->name('author.store');
        Route::put('/author/update/{id}', [App\Http\Controllers\AuthorsController::class, 'update', 'id'])->name('author.edit');
        Route::get('/author/delete/{id}', [App\Http\Controllers\AuthorsController::class, 'delete', 'id'])->name('author.delete');
        
        Route::post('/category/create', [App\Http\Controllers\CategoriesController::class, 'store'])->name('category.store');
        Route::put('/category/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update', 'id'])->name('category.edit');
        Route::get('/category/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'delete', 'id'])->name('category.delete');
        
        Route::get('/user/delete/{id}', [App\Http\Controllers\UsersController::class, 'delete', 'id'])->name('user.delete');
    });
    
    Route::get('/profile', [App\Http\Controllers\UsersController::class, 'showProfile'])->name('profile');
    

    Route::get('/user/edit/{id}', [App\Http\Controllers\UsersController::class, 'showEdit', 'id'])->name('user-edit.show');
    
    Route::get('/books', [App\Http\Controllers\BooksController::class, 'list'])->name('books-list');
    
    Route::get('/author/{id}', [App\Http\Controllers\AuthorsController::class, 'show', 'id'])->name('author');
    Route::get('/authors', [App\Http\Controllers\AuthorsController::class, 'index'])->name('authors');
    
    Route::put('/suggestion/create', [App\Http\Controllers\SuggestionsController::class, 'store'])->name('suggestion.store');
    Route::put('/suggestion/update/{id}', [App\Http\Controllers\SuggestionsController::class, 'update', 'id'])->name('suggestion.edit');
    Route::get('/suggestion/delete/{id}', [App\Http\Controllers\SuggestionsController::class, 'delete', 'id'])->name('suggestion.delete');
    
    Route::put('/user/update/{id}', [App\Http\Controllers\UsersController::class, 'update', 'id'])->name('user.edit');


    Route::put('/review/update/{id}', [App\Http\Controllers\ReviewsController::class, 'update', 'id'])->name('review.edit');
    Route::get('/review/delete/{id}', [App\Http\Controllers\ReviewsController::class, 'delete', 'id'])->name('review.delete');
    
    Route::get('/contactus', [App\Http\Controllers\ContactusController::class, 'index'])->name('contactus');
    Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus');
    // Route::post('/contactus', [App\Http\Controllers\ContactusController::class, 'store'])->name('contactus.store');
    
    
    Route::get('/lang/{locale}', function ($locale) {
        if (session('lang', config('app.locale')) != $locale) {
            session()->put('lang', $locale);
        }
        return back();
    })->name('locale');

    // meter en admin
    Route::get('/test_mail', [App\Http\Controllers\MailController::class, 'send'])->name('mail');
    Route::post('/send_newsletter', [App\Http\Controllers\MailController::class, 'send_newsletter'])->name('newsletter.send');

});
Auth::routes(['login' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


