<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\Book;

use App\Models\Author;
use App\Models\Category;
use App\Models\Bookshelf;
use App\Models\User;
use App\Models\Review;

class BookTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_book()
    {
        $book = new Book();
        $book->title = "The Hobbit";
        $book->description = "J.R.R. Tolkien";
        $book->author_id = 1;
        $book->category_id = 1;
        $book->image = "https://m.media-amazon.com/images/I/71jLBXtWJWL.jpg";
        $book->isbn = "9780544003415";

        $this->assertEquals("The Hobbit", $book->title);
        $this->assertEquals("J.R.R. Tolkien", $book->description);
        $this->assertEquals(1, $book->author_id);
        $this->assertEquals(1, $book->category_id);
        $this->assertEquals("https://m.media-amazon.com/images/I/71jLBXtWJWL.jpg", $book->image);
        $this->assertEquals("9780544003415", $book->isbn);
    }

    public function test_belongs_to_author()
    {
        $author = Author::create([
            'name' => 'J.K. Rowling',
            'info' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        ]);

        $category = Category::create([
            'tag' => 'fantasy'
        ]);

        $book = Book::create([
            'title' => 'Harry Potter',
            'author_id' => $author->id,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
            'category_id' => $category->id,
            'isbn' => '978-3-16-148410-0',
        ]);

        $book->author()->associate($author);

        $this->assertEquals($author->id, $book->author->id);
    }

    public function test_belongs_to_many_bookshelves()
    {
        $author = Author::create([
            'name' => 'J.K. Rowling',
            'info' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        ]);

        $category = Category::create([
            'tag' => 'fantasy'
        ]);

        $book = Book::create([
            'title' => 'Harry Potter',
            'author_id' => $author->id,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
            'category_id' => $category->id,
            'isbn' => '978-3-16-148410-0',
        ]);

        $user = User::create([
            'username' => 'John Doe',
            'password' => 'password',
            'email' => 'a@test.com',
            'is_admin' => false,
        ]);


        $bookshelf = Bookshelf::create([
            'name' => 'My Bookshelf',
            'user_id' => $user->id,
        ]);

        $book->bookshelves()->attach($bookshelf);

        $this->assertEquals(1, $book->bookshelves->count());
    }

    // public function test_has_many_reviews(){
    //     $user = User::create([
    //         'username' => 'John Doe',
    //         'password' => 'password',
    //         'email' => 'a@test.com',
    //         'is_admin' => false,
    //     ]);
        
    //     $author = Author::create([
    //         'name' => 'J.K. Rowling',
    //         'info' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
    //     ]);

    //     $category = Category::create([
    //         'tag' => 'fantasy'
    //     ]);
        
    //     $book = Book::create([
    //         'title' => 'Harry Potter',
    //         'author_id' => $author->id,
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
    //         'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
    //         'category_id' => $category->id,
    //         'isbn' => '978-3-16-148410-0',
    //     ]);

    //     $reviews = [
    //         new Review([
    //             'user_id' => $user->id,
    //             'book_id' => $book->id,
    //             'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
    //         ]),
    //         new Review([
    //             'user_id' => $user->id,
    //             'book_id' => $book->id,
    //             'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
    //         ]),
    //     ];

    //     $book->reviews->saveMany($reviews);

    //     $this->assertEquals(2, $book->reviews->count());
    // }
    
    public function test_belongs_to_category()
    {
        $author = Author::create([
            'name' => 'J.K. Rowling',
            'info' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        ]);

        $category = Category::create([
            'tag' => 'fantasy'
        ]);

        $book = Book::create([
            'title' => 'Harry Potter',
            'author_id' => $author->id,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
            'category_id' => $category->id,
            'isbn' => '978-3-16-148410-0',
        ]);

        $book->category()->associate($category);

        $this->assertEquals($category->tag, $book->category->tag);
    }

}
