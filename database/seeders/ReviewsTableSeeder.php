<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\Book;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Review::factory()->count(10)->create();

        $review = new Review();
        $review->comment = "This is an example description";
        $review->user_id = User::all()->random()->id;
        $review->book_id = Book::all()->random()->id;
        $review->save();

        // create 5 reviews for each book
        foreach (Book::all() as $book) {
            Review::factory()->count(2)->create([
                'book_id' => $book->id,
            ]);
        }

        // create 3 random books reviews
        Review::factory()->count(3)->create();

    }
}
