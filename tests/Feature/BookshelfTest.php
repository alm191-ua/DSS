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
    use RefreshDatabase;
    
    public function test_belong_to_user()
    {
        $user = User::create([
            'is_admin' => false,
            'username' => 'John Doe',
            'email' => 'xd@gmail.com',
            'password' => '1234',
        ]);

        $bookshelf = Book::create([
            'name' => 'Test',
            'user_id' => $user->id,
        ]);

        $bookshelf->user()->associate($user);

        $this->assertEquals($user->id, $bookshelf->user->id);
    }

    public function test_belong_to_many_books()
    {

    }
}
