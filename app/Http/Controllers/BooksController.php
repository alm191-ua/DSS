<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    //index function to show the book with the id passed as parameter
    public function index($id)
    {
        return view('book-detail'); // esto es para probar, cambiarlo por lo de abajo
        // try{
        //     //get the book with the id passed as parameter
        //     $book = Book::findOrFail($id);
        //     //return the view with the book
        //     return view('book', ['book' => $book]);
        // }catch(\Exception $e){
        //     return redirect()->route('home');
        // }
    }

    public function list()
    {
        return view('books-list');
    }

    //create function to show the form to create a new book
    public function create()
    {
        return view('forms.book-create');
    }

    /******* ESTO ES UN EJEMPLO DE COPILOT, NO FUNCIONA :) */
    // //store function to save the new book in the database
    // public function store(Request $request)
    // {
    //     //validate the request
    //     $request->validate([
    //         'title' => 'required',
    //         'author' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     //get the image from the request
    //     $image = $request->file('image');
    //     //get the image name
    //     $imageName = time().'.'.$image->extension();
    //     //move the image to the public folder
    //     $image->move(public_path('images'), $imageName);

    //     //create a new book with the data from the request
    //     $book = new Book([
    //         'title' => $request->get('title'),
    //         'author' => $request->get('author'),
    //         'description' => $request->get('description'),
    //         'price' => $request->get('price'),
    //         'image' => $imageName,
    //     ]);
    //     //save the book in the database
    //     $book->save();
    //     //redirect to the home page
    //     return redirect()->route('home');
    // }
}
