<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

use Tests\TestCase;
use App\Models\Bookshelf;

use App\Models\User;
use App\Models\Book;

class BookshelfTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example_bookshelf()
    {
        $bookshelf = new Bookshelf();
        $bookshelf->id = 1;
        $bookshelf->user_id = 1;
        $bookshelf->name = "Example Bookshelf";

        $this->assertEquals(1, $bookshelf->id);
        $this->assertEquals(1, $bookshelf->user_id);
        $this->assertEquals("Example Bookshelf", $bookshelf->name);
    }

    // test save bookshelf
    public function test_save_bookshelf()
    {
        $bookshelf = new Bookshelf();
        $bookshelf->id = 1;
        $bookshelf->user_id = 1;
        $bookshelf->name = "Example Bookshelf";
        $bookshelf->save();

        $this->assertDatabaseHas('bookshelves', [
            'name' => 'Example Bookshelf',
        ]);

        $bookshelf->delete();

        $this->assertDatabaseMissing('bookshelves', [
            'name' => 'Example Bookshelf',
        ]);
    }

    // test bookshelf relationship
    public function test_bookshelf_relationship()
    {
        $user = User::where('username', 'anonymous')->first();
        
        $bookshelf = new Bookshelf();
        $bookshelf->id = 1;
        $bookshelf->user_id = 1;
        $bookshelf->name = "Example Bookshelf";
        // relationship
        $bookshelf->user()->associate($user);
        $bookshelf->save();

        $book = new Book();
        $book->title = "Example Book";
        $book->description = "This is an example description";
        $book->image = "default";
        $book->isbn = "9780544003415";
        $book->author_id = 1;
        $book->category_id = 1;
        $book->save();
        
        // Relationship
        $bookshelf->books()->attach($book->id);

        $this->assertDatabaseHas('book_bookshelf', [
            'book_id' => $book->id,
            'bookshelf_id' => $bookshelf->id,
        ]);

        $bookshelf->delete();
        $book->delete();

        $this->assertDatabaseMissing('book_bookshelf', [
            'book_id' => $book->id,
            'bookshelf_id' => $bookshelf->id,
        ]);
    }
}
