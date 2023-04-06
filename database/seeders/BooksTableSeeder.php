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

        $book = new Book();
        $book->title = "The Hobbit";
        $book->description = "The Hobbit, or There and Back Again is a children's fantasy novel by English author J. R. R. Tolkien. It was published on 21 September 1937 to wide critical acclaim, being nominated for the Carnegie Medal and awarded a prize from the New York Herald Tribune for best juvenile fiction. The book remains popular and is recognized as a classic in children's literature.";
        $book->author_id = Author::all()->random()->id;
        $book->category_id = Category::where('tag', 'fantasy')->first()->id;
        $book->image = "https://images-na.ssl-images-amazon.com/images/I/51Z9%2BZQZQlL._SX331_BO1,204,203,200_.jpg";
        $book->isbn = "9780547928227";
        $book->file = "https://www.gutenberg.org/files/61/61-h/61-h.htm";
        $book->save();

        // for ($i = 0; $i < 521; $i++) {
        //     $book = new Book();
        //     $book->title = fake()->sentence();
        //     $book->description = fake()->paragraph();
        //     $book->author_id = Author::all()->random()->id;
        //     $book->category_id = Category::all()->random()->id;
        //     $book->isbn = "9780547928227";
        //     $book->image = fake()->imageUrl(200, 300);
        //     $book->file = fake()->imageUrl(200, 300);
        //     $book->save();
        // }

        // for every file in app/book_files
        $files = glob('storage/app/book_files/*'); // get all file names
        $authors = glob('storage/app/public/authors/*'); // get all file names
        foreach($files as $file){ // iterate files
            if(is_file($file)) {
                // image with the same name as file in jpg
                $image = str_replace('storage/app/book_files/', '', $file);
                $image = str_replace('.pdf', '.png', $image);

                // random author
                $author_img = $authors[array_rand($authors)];
                // echo '1: ' . $author_img;
                while (substr($author_img, -4) != '.jpg') {
                    $author_img = $authors[array_rand($authors)];
                }
                $author_name = str_replace('storage/app/public/authors/', '', $author_img);
                $author_name = str_replace('.jpg', '', $author_name);
                $author_name = str_replace('_', ' ', $author_name);
                // to mayus
                $author_name = ucwords($author_name);
                // get author
                $author = Author::where('name', $author_name)->first();
                
                // echo '2:' . $author_name;

                // title = name of file wothout extension
                $title = str_replace('storage/app/book_files/', '', $file);
                $title = str_replace('.pdf', '', $title);

                $file = str_replace('storage/app/book_files/', '', $file);

                $book = new Book();
                $book->title = $title;
                $book->description = fake()->paragraph();
                $book->author_id = $author->id;
                $book->category_id = Category::all()->random()->id;
                $book->isbn = "9780547928227";
                $book->image = $image;
                $book->file = $file;
                $book->save();
            }
        }

    }
}
