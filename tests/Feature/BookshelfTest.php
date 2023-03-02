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
    
    
    public function test_create_bookshelf()
    {
        $bookshelf = new Bookshelf();
        $bookshelf->name = "Test";
        $bookshelf->user_id = 1;

        $this->assertEquals("Test", $bookshelf->name);
        $this->assertEquals(1, $bookshelf->user_id);
    }

    public function test_save_bookshelf()
    {
        $bookshelf = new Bookshelf();

        $bookshelf->user_id = User::where('username', 'anonymous')->first()->id;
        $bookshelf->name = "Test";
        $bookshelf->save();

        $this->assertDatabaseHas('bookshelf', [
            'name' => 'Test',
        ]);

        $bookshelf->delete();

        $this->assertDatabaseMissing('bookshelf', [
            'name' => 'Test',
        ]);
    }
}
