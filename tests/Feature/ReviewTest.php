<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\User;
use App\Models\Book;
use App\Models\Review;
use App\Models\Author;
use App\Models\Category;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    public function setUp_review(): array
    {        
        $author = Author::create([
            'name' => 'J.K. Rowling',
            'info' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        ]);

        $category = Category::create([
            'tag' => 'fantasy'
        ]);

        $user = User::create([
            'username' => 'anonymous',
            'email' => '',
            'password' => '',
            'is_admin' => false,
        ]);

        $book = Book::create([
            'title' => 'The Hobbit',
            'author_id' => $author->id,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
            'category_id' => $category->id,
            'isbn' => '9780544003415',
        ]);

        $review = Review::create([
            'comment' => 'This is an example description',
            'user_id' => $user->id,
            'book_id' => $book->id,
        ]);

        return [$review, $user, $book, $author, $category];
    }

    // test create review
    public function test_create_review()
    {
        [$review, $user, $book] = $this->setUp_review();

        // use associate() to set the foreign key
        $review->user()->associate($user);
        $review->book()->associate($book);
        
        $this->assertEquals('This is an example description', $review->comment);
        $this->assertEquals($user->id, $review->user_id);
        $this->assertEquals($book->id, $review->book_id);
    }

    // test belongs to User
    public function test_belongs_to_user()
    {
        //[$review, $user, $book, $author, $category] = $this->setUp_review();
        [$review, $user] = $this->setUp_review();

        $review->user()->associate($user);

        $this->assertEquals($user->id, $review->user_id);
    }

    // test belongs to Book
    public function test_belongs_to_book()
    {
        [$review, $book] = $this->setUp_review();

        $review->book()->associate($book);

        $this->assertEquals($book->id, $review->book_id);
    }
    
}
