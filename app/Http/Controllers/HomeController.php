<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class HomeController extends Controller
{
    //
    public function index(){
        $titulos= array("NUEVOS PRODUCTOS" , "BEST SELLER" , "PRE-ORDER");
        $top_books = Book::inRandomOrder()->take(4)->get();
        $new_books = Book::inRandomOrder()->take(12)->get();
        $new_authors = Author::inRandomOrder()->take(3)->get();
        $num_authors = Book::distinct('author_id')->count('author_id');
        $num_books = Book::count();

        return view('welcome', compact('top_books', 'num_authors', 'num_books','new_books','titulos','new_authors'));
    }

    public function newsletterStore(Request $request){
        $request->validate([
            'email' => 'required|email|unique:newsletters',
        ]);

        $newsletter = new \App\Models\Newsletter();
        $newsletter->email = $request->email;
        
        // check if email already exists
        $exists = \App\Models\Newsletter::where('email', $request->email)->first();
        if($exists){
            return redirect()->back()->with('error', 'You are already subscribed to our newsletter!');
        }

        $newsletter->save();

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
