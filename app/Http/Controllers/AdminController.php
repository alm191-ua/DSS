<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\User;
use App\Models\Category;
use App\Models\Suggestion;

class AdminController extends Controller
{
    public function index()
    {
        $PER_PAGE = 10;

        $all_authors = Author::all();
        $all_categories = Category::all();

        $books = Book::paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at, isbn
            $columns = ['id', 'title', 'description', 'author_id', 'category_id', 'image', 'file', ],
            $pageName = 'books',
        )->withQueryString();

        $authors = Author::paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'name', 'info', 'image', ],
            $pageName = 'authors',
        )->withQueryString();

        $users = User::paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'username', 'email', 'is_admin', 'image', ],
            $pageName = 'users',
        )->withQueryString();

        $categories = Category::orderBy('id', 'asc')->
        paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'tag', ], 
            $pageName = 'categories',
        )->withQueryString();

        $suggestions = Suggestion::paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'email', 'phone', 'message', ],
            $pageName = 'suggestions',
        )->withQueryString();

        return view('admin', compact('books', 'authors', 'users', 'categories', 'suggestions', 'all_authors', 'all_categories'));
    }

}
