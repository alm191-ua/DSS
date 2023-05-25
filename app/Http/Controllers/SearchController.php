<?php

namespace App\Http\Controllers;

use DragonCode\Contracts\Cashier\Http\Response;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    //
    public function search(Request $request) {
        if ($request->ajax()) {
            $output = "";

            Log::info('search: '.$request->search);
            $search = $request->search;
            $books = \App\Models\Book::where(function($query1) use ($search) {
                $query1->where('title', 'like', '%'.$search.'%')
                ->orWhereHas('author', function ($query) use ($search) {
                    return $query->where('name', 'like', '%'.$search.'%');
                });
            })->orderBy('title', 'asc')->get();

            if ($books) {
                if ($books->count() == 0) {
                    $output = '<li class="list-group-item text-center">No results found</li>';
                }
                foreach ($books as $key => $book) {
                    // use cool bootstrap style for the list
                    $output .= '<li class="list-group-item"
                    style="z-index:20;"><a href="'.route('book', $book->id).'">'.$book->title.'</a></li>';
                }
            }

            return Response($output);
        }
    }

    public function searchCategory(Request $request) {
        if ($request->ajax()) {
            $output = "";

            Log::info('search: '.$request->search);
            Log::info('category: '.$request->category);
            $search = $request->search;
            $category = $request->category;
            if ($category == null) {
                $category = 'all';
            }
            $books = \App\Models\Book::where(function($query1) use ($search) {
                $query1->where('title', 'like', '%'.$search.'%')
                ->orWhereHas('author', function ($query) use ($search) {
                    return $query->where('name', 'like', '%'.$search.'%');
                });
            });
            if ($category != 'all') {
                $books->whereHas('category', function ($query) use ($category) {
                    return $query->where('tag', $category);
                });
            }
            $books = $books->orderBy('title', 'asc')->get();

            if ($books) {
                if ($books->count() == 0) {
                    $output = '<li class="list-group-item text-center">No results found</li>';
                }
                foreach ($books as $key => $book) {
                    // use cool bootstrap style for the list
                    $output .= '<li class="list-group-item"
                    style="z-index:20;"><a href="'.route('book', $book->id).'">'.$book->title.'</a></li>';
                }
            }

            return Response($output);
        }
    }
}
