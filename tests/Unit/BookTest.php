<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Book;

class BookTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_book_constructor()
    {
        $book = new Book("The Hobbit", "J.R.R. Tolkien", 1, 1, "https://m.media-amazon.com/images/I/71jLBXtWJWL.jpg", "9780544003415");
        $this->assertEquals("The Hobbit", $book->title);
        $this->assertEquals("J.R.R. Tolkien", $book->description);
        $this->assertEquals(1, $book->author_id);
        $this->assertEquals(1, $book->category_id);
        $this->assertEquals("https://m.media-amazon.com/images/I/71jLBXtWJWL.jpg", $book->image);
        $this->assertEquals("9780544003415", $book->isbn);
    }
    
}
