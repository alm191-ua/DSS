<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\Book;

use App\Models\Author;
use App\Models\Category;

class BookTest extends TestCase
{
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

    // test save book
    public function test_save_book()
    {
        $author = Author::where('name', 'default')->first();
        $category = Category::where('tag', 'fantasy')->first();
        
        $book = new Book();
        $book->title = "Example Book";
        $book->description = "This is an example description";
        $book->image = "default";
        $book->isbn = "9780544003415";
        $book->author()->associate($author);
        $book->category()->associate($category);
        $book->save();

        $this->assertDatabaseHas('books', [
            'title' => 'Example Book',
        ]);

        $book->delete();

        $this->assertDatabaseMissing('books', [
            'title' => 'Example Book',
        ]);
        
    }
    
}
