<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //Add tolkien
        // $author = new Author();
        // $author->name = "J.R.R. Tolkien";
        // $author->info = "J.R.R. Tolkien was an English writer, poet, philologist, and university professor who is best known as the author of the classic high fantasy works The Hobbit, The Lord of the Rings, and The Silmarillion.";
        // $author->save();

        //Add default
        $author = new Author();
        $author->name = "default";
        $author->info = "default";
        $author->save();

        //use factory
        Author::factory()->count(10)->create();


    }
}
