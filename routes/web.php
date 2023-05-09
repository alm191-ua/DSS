<?php

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// use Controller\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers as Controller;

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
    
    Route::get('/', [Controller\HomeController::class, 'index'])->name('home');
    Route::get('/404', function () {
        return view('errors.404');
    })->name('404');
    Route::get('/terms', function () {
        return view('terms');
    })->name('terms');
    
    Route::post('/newsletter', [Controller\HomeController::class, 'newsletterStore'])->name('newsletter.store');

    Route::group(['middleware' => ['guest']], function() {
        Route::get('/login', [Controller\LoginController::class, 'showLogin'])->name('login');
        Route::post('/login', [Controller\LoginController::class, 'login'])->name('login');
        // Route::get('/register', [Controller\RegisterController::class, 'showRegister'])->name('register.show');
        // Route::post('/register', [Controller\RegisterController::class, 'register'])->name('register.perform');
    });
    
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', [Controller\LogoutController::class, 'logout'])->name('logout');
        
        Route::prefix('book')->group(function () {
            Route::get('/{id}', [Controller\BooksController::class, 'index', 'id'])->name('book');
            Route::get('/download/{id}', [Controller\BooksController::class, 'download', 'id'])->name('book-download');
            Route::get('/read/{id}', [Controller\BooksController::class, 'showFile', 'id'])->name('book-read');
                
        });

        Route::prefix('bookshelf')->group(function () {
            Route::post('/create', [Controller\BookshelfController::class, 'store'])->name('bookshelf.store');
            Route::put('/add/{book_id}', [Controller\BookshelfController::class, 'add_book', 'book_id'])->name('bookshelf.add_book');
            Route::get('/list', [Controller\BookshelfController::class, 'list'])->name('bookshelf.list');
            Route::delete('/delete/{id}', [Controller\BookshelfController::class, 'delete', 'id'])->name('bookshelf.delete');
            Route::get('/remove/{bookshelf_id}/{book_id}', [Controller\BookshelfController::class, 'remove_book', 'bookshelf_id', 'book_id'])->name('bookshelf.remove_book');

        });

        Route::put('/review/{id}/create', [Controller\ReviewsController::class, 'store', 'id'])->name('review.store');
    
        // Route::delete('/user/softdelete/{id}', [Controller\UsersController::class, 'softDelete', 'id'])->name('user.softdelete');
    });
    
    Route::group(['middleware' => ['admin']], function() {
        Route::get('/admin', [Controller\AdminController::class, 'index'])->name('admin');
        
        Route::get('/books/create', [Controller\BooksController::class, 'create'])->name('book.create');
        Route::post('/books/create', [Controller\BooksController::class, 'store'])->name('book.store');
        Route::get('/books/delete/{id}', [Controller\BooksController::class, 'delete', 'id'])->name('book.delete');
        Route::put('/books/update/{id}', [Controller\BooksController::class, 'update', 'id'])->name('book.edit');
        
        Route::get('/author/create', [Controller\AuthorsController::class, 'create'])->name('author.create');
        Route::post('/author/create', [Controller\AuthorsController::class, 'store'])->name('author.store');
        Route::put('/author/update/{id}', [Controller\AuthorsController::class, 'update', 'id'])->name('author.edit');
        Route::get('/author/delete/{id}', [Controller\AuthorsController::class, 'delete', 'id'])->name('author.delete');
        
        Route::post('/category/create', [Controller\CategoriesController::class, 'store'])->name('category.store');
        Route::put('/category/update/{id}', [Controller\CategoriesController::class, 'update', 'id'])->name('category.edit');
        Route::get('/category/delete/{id}', [Controller\CategoriesController::class, 'delete', 'id'])->name('category.delete');
        
        Route::get('/user/delete/{id}', [App\Services\UsersServices::class, 'delete', 'id'])->name('user.delete');
    
        Route::post('/send_newsletter', [Controller\MailController::class, 'send_newsletter'])->name('newsletter.send');
    });

    Route::get('/search', [Controller\SearchController::class, 'search'])->name('search');
    Route::get('/search/category', [Controller\SearchController::class, 'searchCategory'])->name('search-category');
    
    Route::get('/profile', [Controller\UsersController::class, 'showProfile'])->name('profile');
    

    Route::get('/user/edit/{id}', [Controller\UsersController::class, 'showEdit', 'id'])->name('user-edit.show');
    
    Route::get('/books', [Controller\BooksController::class, 'list'])->name('books-list');
    
    Route::get('/author/{id}', [Controller\AuthorsController::class, 'show', 'id'])->name('author');
    Route::get('/authors', [Controller\AuthorsController::class, 'index'])->name('authors');
    
    Route::put('/suggestion/create', [Controller\SuggestionsController::class, 'store'])->name('suggestion.store');
    Route::put('/suggestion/update/{id}', [Controller\SuggestionsController::class, 'update', 'id'])->name('suggestion.edit');
    Route::get('/suggestion/delete/{id}', [Controller\SuggestionsController::class, 'delete', 'id'])->name('suggestion.delete');
    
    Route::put('/user/update/{id}', [Controller\UsersController::class, 'update', 'id'])->name('user.edit');


    Route::put('/review/update/{id}', [Controller\ReviewsController::class, 'update', 'id'])->name('review.edit');
    Route::get('/review/delete/{id}', [Controller\ReviewsController::class, 'delete', 'id'])->name('review.delete');
    
    Route::get('/contactus', [Controller\ContactusController::class, 'index'])->name('contactus');
    Route::get('/aboutus', [Controller\AboutusController::class, 'index'])->name('aboutus');
    // Route::post('/contactus', [Controller\ContactusController::class, 'store'])->name('contactus.store');
    
    
    Route::get('/lang/{locale}', function ($locale) {
        if (session('lang', config('app.locale')) != $locale) {
            session()->put('lang', $locale);
        }
        return back();
    })->name('locale');

});
Auth::routes(['login' => false]);

// Route::get('/home', [Controller\HomeController::class, 'index'])->name('home');


