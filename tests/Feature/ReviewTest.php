<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\User;
use App\Models\Book;
use App\Models\Review;

class ReviewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_review()
    {
        $review = new Review();

        $review->user_id = User::where('username', 'anonymous')->first()->id;
        $review->book_id = Book::where('title', 'The Hobbit')->first()->id;
        $review->comment = "This is an example description";

        $this->assertEquals("This is an example description", $review->comment);
        $this->assertEquals(1, $review->user_id);
        $this->assertEquals(1, $review->book_id);
    }

    public function test_save_review()
    {
        $review = new Review();

        $review->user_id = User::where('username', 'anonymous')->first()->id;
        $review->book_id = Book::where('title', 'The Hobbit')->first()->id;
        $review->comment = "This is an example description";
        $review->save();

        $this->assertDatabaseHas('reviews', [
            'comment' => 'This is an example description',
        ]);

        $review->delete();

        $this->assertDatabaseMissing('reviews', [
            'comment' => 'This is an example description',
        ]);
    }
    
}
