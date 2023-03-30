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
        $bookshelves = Bookshelf::where('user_id', Auth::user()->id)->get();

        return view('profile', ['bookshelves' => $bookshelves]);
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
}
