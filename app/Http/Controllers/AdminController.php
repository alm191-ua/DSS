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

        $authors_attributes = [
            'id' => 'ID',
            'name' => 'Name',
            'info' => 'Info',
            'image' => 'Image',
        ];

        $suggestions_attributes = [
            'id' => 'ID',
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
        ];

        $users_attributes = [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'is_admin' => 'Is Admin',
            'image' => 'Image',
        ];

        $categories_attributes = [
            'id' => 'ID',
            'tag' => 'Tag',
        ];

        $reviews_attributes = [
            'id' => 'ID',
            'user_id' => 'User',
            'book_id' => 'Book',
            'comment' => 'Comment',
        ];

        // ------------------ BOOKS ------------------
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

        // ------------------ AUTHORS ------------------
            // order authors
        $order_authors = request()->query('order_authors');
        if ($order_authors) {
            $authors_aux = Author::orderBy($order_authors, 'asc');
        } else {
            $authors_aux = Author::orderBy('id', 'asc');
        }
        // filter authors
        $filter = request()->query('filter_authors_by');
        if ($filter) {
            $value = request()->query('filter_authors_value');
            if ($filter == 'id') {
                $authors_aux->where('id', $value);
            } elseif ($filter == 'name') {
                $authors_aux->where('name', 'like', '%'.$value.'%');
            } elseif ($filter == 'info') {
                $authors_aux->where('info', 'like', '%'.$value.'%');
            }
        }

        $authors = $authors_aux->paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'name', 'info', 'image', ],
            $pageName = 'authors',
        )->withQueryString();

        // ------------------ USERS ------------------
        // order users
        $order_users = request()->query('order_users');
        if ($order_users) {
            $users_aux = User::orderBy($order_users, 'asc');
        } else {
            $users_aux = User::orderBy('id', 'asc');
        }
        // filter users
        $filter = request()->query('filter_users_by');
        if ($filter) {
            $value = request()->query('filter_users_value');
            if ($filter == 'id') {
                $users_aux->where('id', $value);
            } elseif ($filter == 'username') {
                $users_aux->where('username', 'like', '%'.$value.'%');
            } elseif ($filter == 'email') {
                $users_aux->where('email', 'like', '%'.$value.'%');
            } elseif ($filter == 'is_admin') {
                $users_aux->where('is_admin', $value);
            }
        }

        $users = $users_aux->paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'username', 'email', 'is_admin', 'image', ],
            $pageName = 'users',
        )->withQueryString();
                    

        // ------------------ CATEGORIES ------------------
        // order categories
        $order_categories = request()->query('order_categories');
        if ($order_categories) {
            $categories_aux = Category::orderBy($order_categories, 'asc');
        } else {
            $categories_aux = Category::orderBy('id', 'asc');
        }
        // filter categories
        $filter = request()->query('filter_categories_by');
        if ($filter) {
            $value = request()->query('filter_categories_value');
            if ($filter == 'id') {
                $categories_aux->where('id', $value);
            } elseif ($filter == 'tag') {
                $categories_aux->where('tag', 'like', '%'.$value.'%');
            }
        }

        $categories = $categories_aux->paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'tag', ], 
            $pageName = 'categories',
        )->withQueryString();

        // ------------------ SUGGESTIONS ------------------
        // order suggestions
        $order_suggestions = request()->query('order_suggestions');
        if ($order_suggestions) {
            $suggestions_aux = Suggestion::orderBy($order_suggestions, 'asc');
        } else {
            $suggestions_aux = Suggestion::orderBy('id', 'asc');
        }
        // filter suggestions
        $filter = request()->query('filter_suggestions_by');
        if ($filter) {
            $value = request()->query('filter_suggestions_value');
            if ($filter == 'id') {
                $suggestions_aux->where('id', $value);
            } elseif ($filter == 'email') {
                $suggestions_aux->where('email', 'like', '%'.$value.'%');
            } elseif ($filter == 'phone') {
                $suggestions_aux->where('phone', 'like', '%'.$value.'%');
            } elseif ($filter == 'message') {
                $suggestions_aux->where('message', 'like', '%'.$value.'%');
            }
        }

        $suggestions = $suggestions_aux->paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'email', 'phone', 'message', ],
            $pageName = 'suggestions',
        )->withQueryString();

        // ------------------ REVIEWS ------------------
        // order reviews
        $order_reviews = request()->query('order_reviews');
        if ($order_reviews) {
            $reviews_aux = Review::orderBy($order_reviews, 'asc');
        } else {
            $reviews_aux = Review::orderBy('id', 'asc');
        }
        // filter reviews
        $filter = request()->query('filter_reviews_by');
        if ($filter) {
            $value = request()->query('filter_reviews_value');
            if ($filter == 'id') {
                $reviews_aux->where('id', $value);
            } elseif ($filter == 'user') {
                $reviews_aux->whereHas('user', function ($query) use ($value) {
                    $query->where('username', 'like', '%'.$value.'%');
                });
            } elseif ($filter == 'book') {
                $reviews_aux->whereHas('book', function ($query) use ($value) {
                    $query->where('title', 'like', '%'.$value.'%');
                });
            } elseif ($filter == 'comment') {
                $reviews_aux->where('comment', 'like', '%'.$value.'%');
            }
        }

        $reviews = $reviews_aux->paginate(
            $perPage = $PER_PAGE,
            // all columns except created_at, updated_at, deleted_at
            $columns = ['id', 'comment', 'user_id', 'book_id', ],
            $pageName = 'reviews',
        )->withQueryString();
    


        return view('admin', 
            compact('books', 'authors', 'users', 
                'categories', 'suggestions', 'all_authors', 
                'all_categories', 'reviews',

                'books_attributes', 'authors_attributes', 'suggestions_attributes',
                'users_attributes', 'categories_attributes', 'reviews_attributes',
            ));
        
    }

}
