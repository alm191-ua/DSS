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
use App\Models\Author;
use App\Models\Category;

class BookshelfTest extends TestCase
{
    use RefreshDatabase;


    public function test_create_bookshelf()
    {
        $bookshelf = new Bookshelf();
        $bookshelf->name = "Test";
        $bookshelf->user_id = 1;

        $this->assertEquals("Test", $bookshelf->name);
        $this->assertEquals(1, $bookshelf->user_id);
    }

    public function test_belongs_to_user()
    {
        $user = User::create([
            'username' => 'John Doe',
            'password' => 'password',
            'email' => 'a@test.com',
            'is_admin' => false,
        ]);

        $bookshelf = Bookshelf::create([
            'name' => 'Test',
            'user_id' => $user->id,
        ]);

        $bookshelf->user()->associate($user);

        $this->assertEquals($user->id, $bookshelf->user->id);
    }

    public function test_belongs_to_many_books()
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

        $bookshelf->books()->attach($book);

        $this->assertEquals(1, $bookshelf->books->count());
    }
}
