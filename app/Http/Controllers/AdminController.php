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

        $books = Book::paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at, isbn
            $columns = ['id', 'title', 'description', 'author_id', 'category_id', 'image'],
            $pageName = 'books',
        );
        $authors = Author::paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'name', 'info', ], //'image'
            $pageName = 'authors',
        );
        $users = User::paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'username', 'email', 'is_admin', ], //'image'
            $pageName = 'users',
        );
        $categories = Category::orderBy('id', 'asc')->
        paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'tag', ], 
            $pageName = 'categories',
        );
        $suggestions = Suggestion::paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'email', 'phone', 'message', ],
            $pageName = 'suggestions',
        );

        return view('admin', compact('books', 'authors', 'users', 'categories', 'suggestions'));
    }

}
