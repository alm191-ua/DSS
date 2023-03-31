<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Category;

// file
use Illuminate\Support\Facades\File;

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
        
        return view('author', compact('categories', 'author'));
    }

    public function delete ($id)
    {
        $author = Author::findOrfail($id);
        // delete image
        File::delete(storage_path('app/images/authors/'.$author->image));
        $author->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'info' => 'required|max:1500',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $author = Author::findOrfail($id);
        $author->name = $request->name;
        $author->info = $request->info;
        // save image in storage
        if ($request->hasFile('image')) {
            // delete old image
            File::delete(storage_path('app/images/authors/'.$author->image));
            // save new image
            $image = $request->image;
            $imageName = time().$image->getClientOriginalName();
            $image->move(storage_path('app/images/authors'), $imageName);
            $author->image = $imageName;
        }
        $author->save();

        return redirect()->back();
    }

    public function create()
    {
        return view('forms.authors-create');
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'info' => 'required|max:1000',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->info = $request->info;

        if ($request->hasFile('image')) 
        {
            // save new image
            $image = $request->image;
            $imageName = time().$image->getClientOriginalName();
            $image->move(storage_path('app/images/authors'), $imageName);
            $author->image = $imageName;
        }
        $author->save();

        return redirect()->route('admin', $request->page_num);
    }
}
