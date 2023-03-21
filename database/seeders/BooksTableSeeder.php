<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // Obten 10 autor aleatorio
        // $authors = Author::all()->random(10);

        // // Crea 10 libros
        // foreach ($authors as $author) {
        //     Book::factory()->create([
        //         'author_id' => $author->id,
        //     ]);
        // }

        // Use factory
        // Book::factory()->count(10)->create();

        // $book = new Book();
        // $book->title = "The Hobbit";
        // $book->description = "The Hobbit, or There and Back Again is a children's fantasy novel by English author J. R. R. Tolkien. It was published on 21 September 1937 to wide critical acclaim, being nominated for the Carnegie Medal and awarded a prize from the New York Herald Tribune for best juvenile fiction. The book remains popular and is recognized as a classic in children's literature.";
        // $book->author_id = Author::all()->random()->id;
        // $book->category_id = Category::where('tag', 'fantasy')->first()->id;
        // $book->image = "https://images-na.ssl-images-amazon.com/images/I/51Z9%2BZQZQlL._SX331_BO1,204,203,200_.jpg";
        // $book->isbn = "9780547928227";
        // $book->save();

        for ($i = 0; $i < 50; $i++) {
            $book = new Book();
            $book->title = fake()->sentence();
            $book->description = fake()->paragraph();
            $book->author_id = Author::all()->random()->id;
            $book->category_id = Category::all()->random()->id;
            $book->image = fake()->imageUrl(200, 300);
            $book->isbn = "9780547928227";
            $book->save();
        }

    }
}
