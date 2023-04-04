<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\User;
use App\Models\Category;
use App\Models\Suggestion;
use App\Models\Review;

use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        $PER_PAGE = 10;

        $all_authors = Author::all();
        $all_categories = Category::all();

        $books_attributes = [
            'id' => 'ID',
            'title' => 'Title',
            'author_id' => 'Author',
            'category_id' => 'Category',
            'description' => 'Description',
            'image' => 'Image',
            'file' => 'File',
        ];

        // ------------------ BOOKS ------------------
        // try{
            // order books
            $order_books = request()->query('order_books');
            if ($order_books) {
                $books_aux = Book::orderBy($order_books, 'asc');
            } else {
                $books_aux = Book::orderBy('id', 'asc');
            }
            // filter books
            $filter = request()->query('filter_books_by');
            if ($filter) {
                $value = request()->query('filter_books_value');
                if ($filter == 'id') {
                    $books_aux->where('id', $value);
                }
                if ($filter == 'author') {
                    $books_aux->where('author_id', $value);
                } elseif ($filter == 'category') {
                    $books_aux->where('category_id', $value);
                } elseif ($filter == 'title') {
                    $books_aux->where('title', 'like', '%'.$value.'%');
                } elseif ($filter == 'description') {
                    $books_aux->where('description', 'like', '%'.$value.'%');
                }
            }

            $books = $books_aux->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at, isbn
                $columns = ['id', 'title', 'description', 'author_id', 'category_id', 'image', 'file', ],
                $pageName = 'books',
            )->withQueryString();
        // }catch(\Exception $e){
        //     Log::error($e->getMessage());
        //     $books = Book::orderBy('id', 'asc')->paginate(
        //         $perPage = $PER_PAGE,
        //         // all columns except created_at, updated_at, deleted_at, isbn
        //         $columns = ['id', 'title', 'description', 'author_id', 'category_id', 'image', 'file', ],
        //         $pageName = 'books',
        //     )->withQueryString();
        // }

        // ------------------ AUTHORS ------------------
        try{
            // order authors
            $order_authors = request()->query('order_authors');
            if ($order_authors) {
                $authors_aux = Author::orderBy($order_authors, 'asc');
            } else {
                $authors_aux = Author::orderBy('id', 'asc');
            }
            $authors = $authors_aux->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'name', 'info', 'image', ],
                $pageName = 'authors',
            )->withQueryString();
        }catch(\Exception $e){
            Log::error($e->getMessage());
            $authors = Author::orderBy('id', 'asc')->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'name', 'info', 'image', ],
                $pageName = 'authors',
            )->withQueryString();
        }

        // ------------------ USERS ------------------
        try{
            // order users
            $order_users = request()->query('order_users');
            if ($order_users) {
                $users_aux = User::orderBy($order_users, 'asc');
            } else {
                $users_aux = User::orderBy('id', 'asc');
            }
            $users = $users_aux->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'username', 'email', 'is_admin', 'image', ],
                $pageName = 'users',
            )->withQueryString();
        }catch(\Exception $e){
            Log::error($e->getMessage());
            $users = User::orderBy('id', 'asc')->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'username', 'email', 'is_admin', 'image', ],
                $pageName = 'users',
            )->withQueryString();
        }            

        // ------------------ CATEGORIES ------------------
        try{
            // order categories
            $order_categories = request()->query('order_categories');
            if ($order_categories) {
                $categories_aux = Category::orderBy($order_categories, 'asc');
            } else {
                $categories_aux = Category::orderBy('id', 'asc');
            }
            $categories = $categories_aux->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'tag', ], 
                $pageName = 'categories',
            )->withQueryString();
        }catch(\Exception $e){
            Log::error($e->getMessage());
            $categories = Category::orderBy('id', 'asc')->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'tag', ], 
                $pageName = 'categories',
            )->withQueryString();
        }

        // ------------------ SUGGESTIONS ------------------
        try{
            // order suggestions
            $order_suggestions = request()->query('order_suggestions');
            if ($order_suggestions) {
                $suggestions_aux = Suggestion::orderBy($order_suggestions, 'asc');
            } else {
                $suggestions_aux = Suggestion::orderBy('id', 'asc');
            }
            $suggestions = $suggestions_aux->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'email', 'phone', 'message', ],
                $pageName = 'suggestions',
            )->withQueryString();
        }catch(\Exception $e){
            Log::error($e->getMessage());
            $suggestions = Suggestion::orderBy('id', 'asc')->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'email', 'phone', 'message', ],
                $pageName = 'suggestions',
            )->withQueryString();
        }

        // ------------------ REVIEWS ------------------
        try{
            // order reviews
            $order_reviews = request()->query('order_reviews');
            if ($order_reviews) {
                $reviews_aux = Review::orderBy($order_reviews, 'asc');
            } else {
                $reviews_aux = Review::orderBy('id', 'asc');
            }
            $reviews = $reviews_aux->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'comment', 'user_id', 'book_id', ],
                $pageName = 'reviews',
            )->withQueryString();
        }catch(\Exception $e){
            Log::error($e->getMessage());
            $reviews = Review::orderBy('id', 'asc')->paginate(
                $perPage = $PER_PAGE,
                // all columns except created_at, updated_at, deleted_at
                $columns = ['id', 'comment', 'user_id', 'book_id', ],
                $pageName = 'reviews',
            )->withQueryString();
        }


        return view('admin', 
            compact('books', 'authors', 'users', 
                'categories', 'suggestions', 'all_authors', 
                'all_categories', 'reviews',
                'books_attributes'));
        
    }

}
