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

        return redirect()->back();
    }

    public function delete($id)
    {
        Log::info('deleted bookshelf: '.$id);
        $bookshelf = Bookshelf::findOrFail($id);
        $bookshelf->delete();

        return redirect()->route('profile');
    }

    public function remove_book($bookshelf_id, $book_id)
    {
        Log::info('remove_book: bookshelf_id: '.$bookshelf_id.' book_id: '.$book_id);
        $bookshelf = Bookshelf::findOrFail($bookshelf_id);
        $bookshelf->books()->detach($book_id);

        return redirect()->back();
    }

    public function add_book(Request $request, $book_id)
    {
        $request->validate([
            'bookshelf_id' => 'required'
        ]);

        $bookshelf_id = $request->bookshelf_id;

        if (!$bookshelf_id) {
            // dd('no bookshelf_id');
            return redirect()->route('profile');
        }
        $bookshelf = Bookshelf::findOrFail($bookshelf_id);
        $bookshelf->books()->attach($book_id);

        return redirect()->back();

        // try{
        //     $bookshelf = Bookshelf::find($bookshelf_id);
        //     $bookshelf->books()->attach($book_id);
        // } catch (\Exception $e) {
        //     return redirect()->route('profile');
        // }

        // return redirect()->back();
    }
}
