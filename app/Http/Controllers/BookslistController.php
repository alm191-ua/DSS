<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookslistController extends Controller
{
    //
    public function index()
    {
        return view('books-list');
    }
}
