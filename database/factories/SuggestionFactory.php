<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Suggestion;
use App\Models\User;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SuggestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'phone' => $$faker->phoneNumber(),
            'message' => $$faker->text(200),
        ];
    }
}
