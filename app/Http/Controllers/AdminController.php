<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        $books = Book::all();
        // dd($books);
        $authors = Author::all();
        $users = User::all();
        $categories = Category::all();

        return view('admin', compact('books', 'authors', 'users', 'categories'));
    }

}
