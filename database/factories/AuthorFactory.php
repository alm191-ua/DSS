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
        
        $estaMuerto = (bool)rand(0,1);
        if (estaMuerto){
            $fechaMuerte = $faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y');
        }else{
            $fechaMuerte = "-1";
        }

        return [
            // Añaade los campos que necesites
            'name' => $faker->name,
            'bithdate' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y'),
            'isDeath' => $estaMuerto ,
            'deathdate' => $fechaMuerte ,
            'info' => $faker()->paragraph(),


        ];
    }
}
