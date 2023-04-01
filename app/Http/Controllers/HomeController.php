<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    //
    public function index(){
        $top_books = Book::inRandomOrder()->take(4)->get();
        $num_authors = Book::distinct('author_id')->count('author_id');
        $num_books = Book::count();

        return view('welcome', compact('top_books', 'num_authors', 'num_books'));
    }
}
