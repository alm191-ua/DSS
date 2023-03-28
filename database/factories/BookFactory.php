<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(int $author_id = 0)
    {
        return [
            // TODO: ESTO ESTA MUY FEO
            // Añaade los campos que necesites
            'title' => fake()->sentence(),             
            // 'author_id' => Author::all()->random()->id,    
            'author_id' => $author_id,
            'category_id' => Category::all()->random()->id,  
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(640, 480, 'books', true, 'Faker', true),
            'isbn' => fake()->isbn13(), 
            'file' => fake()->imageUrl(640, 480, 'books', true, 'Faker', true),
        ];
    }
}
