<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Controllers\File;

class AuthorsController extends Controller
{
    //index y list en el mismo
    //Por acabar
    public function index($id)
    {
        $PER_PAGE = 21;

        $queryAuthors = Author::orderBy('name', 'asc');

        $search = request()->query('search');
        // if search exists, filter query
        if ($search) {
            $queryAuthors = $queryAuthors->where('name', 'like', '%'.$search.'%');
        }

        $authors = $queryAuthors->paginate($PER_PAGE);
        return view('authors', compact('authors'));
    }

    public function show($id){
        try{
            $author = Author::findOrFail($id);
            return view('author', compact('author'));
        }catch(\Exception $e){
            return redirect()->route('404');
        }
    }

    public function delete($id)
    {
        try{
            $author = Author::findOrFail($id);
            $image = $author->image;
            $author->delete();
            // delete image
            File::delete(storage_path('app/images/authors/'.$image));
        }catch(\Exception $e){
            //No hace nada
        }
        return redirect()->back();  
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'info' => 'required|max:1000',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try{
            $author = Author::findOrFail($id);
            $author->name = $request->name;
            $author->info = $request->info;
    
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
            return redirect()->back()->withInput($request->page_num);

        }catch(\Exception $e){
            return redirect()->back()->withInput($request->all());
        }
    }

    public function create()
    {
        return view('forms.authors-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'info' => 'required|max:1000',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try{
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
            return redirect()->back()->withInput($request->page_num);

        }catch(\Exception $e){
            return redirect()->back()->withInput($request->all());
        }
    }
}
