<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition($book_id = -1)
    {
        if ($book_id == -1) {
            $book_id = Book::all()->random()->id;
        }
        return [
            'comment' => fake()->paragraph(),
            'user_id' => User::all()->random()->id,
            'book_id' => $book_id,
        ];
    }
    
}
