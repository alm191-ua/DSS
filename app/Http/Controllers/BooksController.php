<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;


class BooksController extends Controller
{
    //index function to show the book with the id passed as parameter
    public function index($id)
    {
        // return view('book-detail'); // esto es para probar, cambiarlo por lo de abajo
        try{
            //get the book with the id passed as parameter
            $book = Book::findOrFail($id);
            // 3 random books of the same category
            $related_books = Book::where('category_id', $book->category_id)
                ->where('id', '!=', $book->id)
                ->inRandomOrder()
                ->take(3)
                ->get();

            //return the view with the book
            return view('book-detail', compact('book', 'related_books'));
        }catch(\Exception $e){
            return redirect()->route('404');
        }
    }

    public function list()
    {
        $PER_PAGE = 21;

        $queryBooks = Book::orderBy('title', 'asc');

        $category = request()->query('category');
        // if category exists, filter query
        if ($category) {
            Log::info('category: '.$category);
            $queryBooks = $queryBooks->whereHas('category', function ($query) use ($category) {
                return $query->where('tag', $category);
            });
            Log::info('count: '.$queryBooks->count());
        }

        $search = request()->query('search');
        // if search exists, filter query
        if ($search) {
            Log::info('search: '.$search);
            $queryBooks = $queryBooks->where('title', 'like', '%'.$search.'%')
            ->orWhereHas('author', function ($query) use ($search) {
                return $query->where('name', 'like', '%'.$search.'%');
            });
            Log::info('count: '.$queryBooks->count());
        }

        $books = $queryBooks->paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at, isbn, description
            $columns = ['id', 'title', 'author_id', 'category_id', 'image'],
            $pageName = 'books',
        )->withQueryString();

        $new_arrivals = Book::orderBy('created_at', 'desc')->take(3)->get();

        return view('books-list', compact('books', 'new_arrivals'));
    }

    //create function to show the form to create a new book
    public function create()
    {
        return view('forms.store-book');
    }

    public function delete(Request $request, $id)
    {
        try{
            $book = Book::findOrFail($id);
            $image = $book->image;
            $book->delete();
            // delete image
            File::delete(storage_path('app/images/books/'.$image));
            // delete file
            File::delete(storage_path('app/books/'.$book->file));
        }catch(\Exception $e){
            //No hace nada
        }
        return redirect()->back()->withInput($request->page_num);        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'author' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'file|mimes:pdf|max:8192',
        ]);
        try{
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
                File::delete(storage_path('app/images/books/'.$book->image));

                // save new image
                $image = $request->image;
                $imageName = time().$image->getClientOriginalName();
                $image->move(storage_path('app/images/books'), $imageName);
                $book->image = $imageName;
            }

            if ($request->hasFile('file')) {
                // delete old file
                File::delete(storage_path('app/books/'.$book->file));

                // save new file
                $file = $request->file;
                $fileName = time().$file->getClientOriginalName();
                $file->move(storage_path('app/books'), $fileName);
                $book->file = $fileName;
            }
            $book->save();
            return redirect()->back()->withInput($request->page_num);

        }catch(\Exception $e){
            return redirect()->back()->withInput($request->page_num);
        }
    }

    public function download($id)
    {
        try{
            $book = Book::findOrFail($id);
            $file = storage_path('app/books/'.$book->file);
            return response()->download($file);
        }catch(\Exception $e){
            return redirect()->route('404');
        }
    }

    public function showFile($id)
    {
        try{
            $book = Book::findOrFail($id);
            $file = storage_path('app/books/'.$book->file);
            return response()->file($file);
        }catch(\Exception $e){
            return redirect()->route('404');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'author' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'file|mimes:pdf|max:8192',
        ]);
        try{
            //$book = Book::findOrFail($id);
            //No hace falta ya que se crea un nuevo libro
            $book = new Book();
            $book->title = $request->title;
            $book->description = $request->description;
            
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
                $image->move(storage_path('app/images/books'), $imageName);
                $book->image = $imageName;
            }

            if ($request->hasFile('file')) 
            {
                // save new file
                $file = $request->file;
                $fileName = time().$file->getClientOriginalName();
                $file->move(storage_path('app/books'), $fileName);
                $book->file = $fileName;
            }
            $book->save();
            return redirect()->back()->withInput($request->page_num);

        }catch(\Exception $e){
            return redirect()->back()->withInput($request->page_num);
        }
    }

}
