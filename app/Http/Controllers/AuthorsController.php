<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Category;

// file
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AuthorsController extends Controller
{
    //index y list en el mismo
    //Por acabar
    public function index()
    {
        $categories = Category::all();

        $authors = Author::paginate(6);

        return view('authors', compact('categories', 'authors'));
    }

    public function show($id)
    {
        $categories = Category::all();

        $author = Author::findOrfail($id);

        $books = $author->books()->paginate(6);

        $random_books = $author->books()->inRandomOrder()->limit(3)->get();
        $random_reviews = $random_books->map(function ($book) {
            return $book->reviews()->inRandomOrder()->first();
        });
        
        return view('author', compact('categories', 'author', 'books', 'random_reviews'));
    }

    public function delete ($id)
    {
        $author = Author::findOrfail($id);
        // delete image
        File::delete(storage_path('app/public/authors/'.$author->image));
        $author->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'info' => 'required|max:1500',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $author = Author::findOrfail($id);
        $author->name = $request->name;
        $author->info = $request->info;
        // save image in storage
        // dd($request->image);
        if ($request->hasFile('image')) {
            // delete old image
            File::delete(storage_path('app/public/authors/'.$author->image));
            // save new image
            $image = $request->image;
            $imageName = time().$image->getClientOriginalName();
            $image->move(storage_path('app/public/authors'), $imageName);
            $author->image = $imageName;
        }
        $author->save();

        return redirect()->back();
    }

    public function create()
    {
        return view('forms.authors-create');
    }

    public function store(Request $request)
    {
        Log::info($request);
        $request->validate([
            'name' => 'required|max:255',
            'info' => 'required|max:1500',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
    
        $author = new Author();
        $author->name = $request->name;
        $author->info = $request->info;

        if ($request->hasFile('image')) 
        {
            // save new image
            $image = $request->image;
            $imageName = time().$image->getClientOriginalName();
            $image->move(storage_path('app/public/authors'), $imageName);
            // $image->storeAs('app/public/authors', $imageName);
            $author->image = $imageName;
        }
        $author->save();

        return redirect()->route('admin', ['page_num' => 3]);
    }
}
