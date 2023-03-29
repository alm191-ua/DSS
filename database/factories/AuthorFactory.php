<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;

use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        

        return [
            // Añaade los campos que necesites
            'name' => $this->faker->name,
            'info' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(200, 200, 'people', true, 'Faker'),
        ];
    }
}
