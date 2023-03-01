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

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_review()
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

        // use associate() to set the foreign key
        $review->user()->associate($user);
        $review->book()->associate($book);
        
        // use associate() to set the foreign key
        $book->author()->associate($author);
        $book->category()->associate($category);

        $this->assertEquals('This is an example description', $review->comment);
        $this->assertEquals($user->id, $review->user_id);
        $this->assertEquals($book->id, $review->book_id);
    }

    public function test_save_review()
    {
        $review = new Review();

        $review->user_id = User::where('username', 'anonymous')->first()->id;
        $review->book_id = Book::where('title', 'The Hobbit')->first()->id;
        $review->comment = "I love this book!";
        $review->save();

        $this->assertDatabaseHas('reviews', [
            'comment' => 'I love this book!',
        ]);

        $review->delete();

        $this->assertDatabaseMissing('reviews', [
            'comment' => 'I love this book!',
        ]);
    }

    // test belongs to Book
    public function test_belongs_to_book()
    {
        $review = Review::create([
            'user_id' => User::where('username', 'anonymous')->first()->id,
            'book_id' => Book::where('title', 'The Hobbit')->first()->id,
            'comment' => 'I love this book!',
        ]);

        $book = Book::create([
            'title' => 'The Hobbit',
            'author_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
            'category_id' => 1,
            'isbn' => '9780544003415',
        ]);

        $review->book()->associate($book);

        $this->assertEquals($book->id, $review->book_id);
    }
    
}
