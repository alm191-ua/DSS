<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;

use Illuminate\Support\Facades\File;


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
        $PER_PAGE = 21;

        $category = request()->query('category');
        // if category exists, filter query
        if ($category) {
            $books = Book::whereHas('category', function ($query) use ($category) {
                $query->where('tag', $category);
            })->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at, isbn
                $columns = ['id', 'title', 'author_id', 'category_id', 'image'],
                $pageName = 'books',
            )->withQueryString();
        } else {
            $books = Book::paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at, isbn
                $columns = ['id', 'title', 'author_id', 'category_id', 'image'],
                $pageName = 'books',
            )->withQueryString();
        }

        // $books = Book::paginate(
        //     $perPage = 21,
        //     // all columns except created_at, updated_at, deleted_at, isbn
        //     $columns = ['id', 'title', 'author_id', 'category_id', 'image'],
        //     $pageName = 'books',
        // )->withQueryString();

        return view('books-list', compact('books'));
    }

    //create function to show the form to create a new book
    public function create()
    {
        return view('forms.book-create');
    }

    public function delete(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $image = $book->image;
        $book->delete();
        // delete image
        File::delete(storage_path('app/images/books/'.$image));
        return redirect()->back()->withInput($request->page_num);
    }

    public function update(Request $request, $id)
    {
        try{
            $book = Book::findOrFail($id);
            $request->validate([
                'title' => 'required|max:255',
                'description' => 'required|max:1000',
                'author' => 'required',
                'category' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $book->title = $request->title;
            $book->description = $request->description;
            
            $author = Author::findOrFail($request->author);
            $book->author()->associate($author);

            $category = Category::find($request->category);
            $book->category()->associate($category);
            // dd($request->image);
    
            if ($request->hasFile('image')) {
                // delete old image
                File::delete(storage_path('app/images/books/'.$book->image));

                // save new image
                $image = $request->image;
                $imageName = time().$image->getClientOriginalName();
                $image->move(storage_path('app/images/books'), $imageName);
                $book->image = $imageName;
            }
            $book->save();
            return redirect()->back()->withInput($request->page_num);

        }catch(\Exception $e){
            return redirect()->back()->withInput($request->page_num);
        }
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
