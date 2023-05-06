<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\Storage;


class BooksController extends Controller
{
    //index function to show the book with the id passed as parameter
    public function index($id)
    {
        //get the book with the id passed as parameter
        $book = Book::findOrFail($id);
        // 3 random books of the same category
        $related_books = Book::where('category_id', $book->category_id)
            ->where('id', '!=', $book->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $categories = Category::all();

        $reviews = $book->reviews()->orderBy('created_at', 'desc')->get();

        //return the view with the book
        return view('book-detail', compact('book', 'related_books', 'categories', 'reviews'));
    }

    public function list()
    {
        $PER_PAGE = 21;

        $filters = [];

        $queryBooks = Book::orderBy('title', 'asc');

        $category = request()->query('category');
        // if category exists, filter query
        if ($category) {
            $filters['category'] = $category;
            // Log::info('category: '.$category);
            $queryBooks->whereHas('category', function ($query) use ($category) {
                return $query->where('tag', $category);
            });
            // Log::info('count: '.$queryBooks->count());
        }

        $search = request()->query('search');
        // if search exists, filter query
        if ($search) {
            $filters['search'] = $search;
            // Log::info('search: '.$search);
            $queryBooks->where(function($query1) use ($search) {
                $query1->where('title', 'like', '%'.$search.'%')
                ->orWhereHas('author', function ($query) use ($search) {
                    return $query->where('name', 'like', '%'.$search.'%');
                });
            });
            // Log::info('count: '.$queryBooks->count());
        }

        $books = $queryBooks->paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at, isbn, description
            $columns = ['id', 'title', 'author_id', 'category_id', 'image'],
            $pageName = 'books',
        )->withQueryString();
        
        $categories = Category::all();
        $new_arrivals = Book::orderBy('created_at', 'desc')->take(3)->get();

        return view('books-list', compact('books', 'new_arrivals', 'categories', 'filters', ));
    }

    //create function to show the form to create a new book
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('forms.store-book', compact('categories', 'authors'));
    }

    public function delete(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $image = $book->image;
        $book->delete();
        // delete image
        File::delete(storage_path('app/public/books/'.$image));
        // delete file
        File::delete(storage_path('app/book_files/'.$book->file));
        return redirect()->back()->withInput($request->page_num);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'author' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'file|mimes:pdf|max:8192',
        ]);
        
        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->description = $request->description;
        
        $author = Author::findOrFail($request->author);
        $book->author()->associate($author);

        $category = Category::find($request->category);
        $book->category()->associate($category);
        // dd($request->image);

        if ($request->hasFile('image')) {
            // delete old image
            File::delete(storage_path('app/public/books/'.$book->image));

            // save new image
            $image = $request->image;
            $imageName = time().$image->getClientOriginalName();
            $image->move(storage_path('app/public/books'), $imageName);
            $book->image = $imageName;
        }

        if ($request->hasFile('file')) {
            // delete old file
            File::delete(storage_path('app/book_files/'.$book->file));

            // save new file
            $file = $request->file;
            $fileName = time().$file->getClientOriginalName();
            $file->move(storage_path('app/book_files'), $fileName);
            $book->file = $fileName;
        }
        $book->save();
        return redirect()->back()->withInput($request->page_num);

    }

    public function download($id)
    {
        $book = Book::findOrFail($id);
        $file = storage_path('app/book_files/'.$book->file);
        return response()->download($file);
    }

    public function showFile($id)
    {
        $book = Book::findOrFail($id);
        
        $file = storage_path('app/book_files/'.$book->file);
        
        try{
            File::get($file);
        }catch (\Exception $e){
            abort(404);
        }

        return response()->file($file);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'author' => 'required',
            'category' => 'required',
            'isbn' => 'required|max:13',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'file|mimes:pdf|max:8192',
        ]);

        //$book = Book::findOrFail($id);
        //No hace falta ya que se crea un nuevo libro
        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->isbn = $request->isbn;
        
        $author = Author::findOrFail($request->author);
        $book->author()->associate($author);

        $category = Category::find($request->category);
        $book->category()->associate($category);
        // dd($request->image);

        if ($request->hasFile('image')) 
        {
            // save new image
            $image = $request->image;
            $imageName = time().$image->getClientOriginalName();
            $image->move(storage_path('app/public/books'), $imageName);
            $book->image = $imageName;
        }

        // dd($request->file);
        if ($request->hasFile('file')) 
        {
            // dd($request->file);
            // save new file
            $file = $request->file;
            $fileName = time().$file->getClientOriginalName();
            $file->move(storage_path('app/book_files'), $fileName);
            $book->file = $fileName;
        }
        $book->save();
        return redirect()->route('admin', ['page_num' => 2]);
    }

}
