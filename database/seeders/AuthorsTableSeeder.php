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

        // //Add default
        // $author = new Author();
        // $author->name = "default";
        // $author->info = "default";
        // $author->save();

        // //use factory
        // Author::factory()->count(10)->create();

        // get authors form /storage/authors images
        $files = glob('storage/app/public/authors/*'); // get all file images
        foreach($files as $file){ // iterate files
            if(is_file($file)) {
                $file = str_replace('storage/app/public/authors/', '', $file);
                if (substr($file, -4) != '.jpg') {
                    continue;
                }

                $author = new Author();
                $name = ucwords(str_replace('_', ' ', str_replace('.jpg', '', str_replace('storage/authors/', '', $file))));
                $author->name = $name;
                $author->info = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquet nisl, eget aliquet nunc nisl eget nisl. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquet nisl, eget aliquet nunc nisl eget nisl.";
                $author->image = $file;
                $author->save();
            }
        }


    }
}
