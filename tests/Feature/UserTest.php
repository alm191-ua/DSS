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
use App\Models\Bookshelf;
use App\Models\Suggestion;

class UserTest extends TestCase
{
    use RefreshDatabase; // Utiliza esta trait para asegurarte de que se vacíe la base de datos antes de cada prueba

    
    public function test_create_user(){
        $user = new User();
        $user->is_admin = false;
        $user->username = "testuser";
        $user->password = "testpassword";
        $user->email = "algo@gmail.com";

        $this->assertEquals("testuser", $user->username);
        $this->assertEquals("testpassword", $user->password);
        $this->assertEquals("algo@gmail.com", $user->email);
        $this->assertTrue($user->is_admin === false);

        $user->delete();

    }

    public function test_can_create_user()
    {
        // Crea un usuario utilizando los datos de prueba
        $user = User::create([
            'id' => 1,
            'is_admin' => false,
            'username' => 'testuser',
            // bycrypt() es una función de Laravel que encripta la contraseña
            'password' => bcrypt('testpassword'),
            'email' => 'testuser@example.com',
        ]);

        // Verifica que el usuario se haya creado correctamente
        $this->assertEquals(1, $user->id);
        $this->assertEquals('testuser', $user->username);
        $this->assertTrue($user->is_admin === false);
    }

    /**
     * Prueba que un usuario se haya creado correctamente
     *
     * @return void
     */
    public function test_user_exists()
    {
        // Crea un usuario utilizando los datos de prueba
        $user = User::create([
            'id' => 1,
            'is_admin' => false,
            'username' => 'testuser',
            'password' => bcrypt('testpassword'),
            'email' => 'testuser@example.com',
        ]);

        // Verifica que el usuario se haya creado correctamente
        $this->assertDatabaseHas('users', [
            'id' => 1,
            'username' => 'testuser',
            'email' => 'testuser@example.com',
        ]);
    }

    public function test_has_many_reviews(){
        $user = new User();
        $user->is_admin = false;
        $user->username = "testuser";
        $user->password = "testpassword";
        $user->email = "a@a.com";
        $user->save();

        $author = new Author();
        $author->name = "J.K. Rowling";
        $author->info = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.";
        $author->save();

        $category = new Category();
        $category->tag = "Fantasy";
        $category->save();

        $book = new Book();
        $book->title = "Harry Potter";
        $book->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.";
        $book->author_id = $author->id;
        $book->category_id = $category->id;
        $book->isbn = "9788498389111";
        $book->save();

        $review = new Review();
        $review->user_id = $user->id;
        $review->book_id = $book->id;
        $review->comment = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.";
        $review->save();

        $review2 = new Review();
        $review2->user_id = $user->id;
        $review2->book_id = $book->id;
        $review2->comment = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.";
        $review2->save();

        $this->assertEquals($user->id, $review->user_id);
    }

    public function test_has_many_bookshelves(){
        $user = new User();
        $user->is_admin = false;
        $user->username = "testuser";
        $user->password = "testpassword";
        $user->email = "a@a.com";
        $user->save();

        $author = new Author();
        $author->name = "J.K. Rowling";
        $author->info = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.";
        $author->save();

        $category = new Category();
        $category->tag = "Fantasy";
        $category->save();

        $book = new Book();
        $book->title = "Harry Potter";
        $book->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.";
        $book->author_id = $author->id;
        $book->category_id = $category->id;
        $book->isbn = "9788498389111";
        $book->save();

        $bookshelf = new Bookshelf();
        $bookshelf->name = "Favoritos";
        $bookshelf->user_id = $user->id;
        $bookshelf->save();

        $bookshelf2 = new Bookshelf();
        $bookshelf2->name = "Leídos";
        $bookshelf2->user_id = $user->id;
        $bookshelf2->save();

        $this->assertEquals($user->id, $bookshelf->user_id);
    }

}
