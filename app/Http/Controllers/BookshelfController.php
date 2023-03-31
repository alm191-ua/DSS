<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookshelf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookshelfController extends Controller
{
    // list all bookshelves for a user
    public function list()
    {
        // $bookshelves = Bookshelf::where('id', Auth::user()->id)->get();

        $bookshelves = Auth::user()->bookshelves;

        return view('userProfile', ['bookshelves' => $bookshelves]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $bookshelf = new Bookshelf();
        $bookshelf->name = $request->name;
        $bookshelf->user_id = Auth::user()->id;

        $bookshelf->save();

        return redirect()->route('profile');
    }

    public function delete($id)
    {
        $bookshelf = Bookshelf::find($id);
        $bookshelf->delete();

        return redirect()->route('profile');
    }
}
