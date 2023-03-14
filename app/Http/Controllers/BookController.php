<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //index function to show the book with the id passed as parameter
    public function index($id)
    {
        return view('book-detail');
        // //get the book with the id passed as parameter
        // $book = Book::find($id);
        // //return the view with the book
        // return view('book', ['book' => $book]);
    }
}
