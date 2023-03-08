<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\Category;
use App\Models\Author;
use App\Models\Book;

class CategoryTest extends TestCase
{
    
    use RefreshDatabase;

    // test relation with books
    public function test_relation_with_books()
    {    
        $category = Category::factory()->count(1)->create();

        $this->assertDatabaseHas('categories', [
            'tag' => $category->first()->tag
        ]);
        // $this->assertEquals(1, $category->books->count());
    
    }   

    public function test_has_many_books()
    {
        $category = Category::create([
            'tag' => 'fantasy'
        ]);

        $author = Author::create([
            'name' => 'J.K. Rowling',
            'info' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        ]);

        $category->books()->create([
            'title' => 'Harry Potter',
            'author_id' => $author->id,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
            'category_id' => $category->id,
            'isbn' => '978-3-16-148410-0',
        ]);

        $this->assertEquals(1, $category->books->count());
        
    }

    public function test_has_many_books2()
    {
        $category = Category::create([
            'tag' => 'fantasy'
        ]);

        $author = Author::create([
            'name' => 'J.K. Rowling',
            'info' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        ]);

        for ($i=0; $i < 10; $i++) { 
            $category->books()->create([
                'title' => 'Harry Potter',
                'author_id' => $author->id,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
                'category_id' => $category->id,
                'isbn' => '978-3-16-148410-0',
            ]);
        }

        // $book = Book::create([
        //     'title' => 'Harry Potter',
        //     'author_id' => $author->id,
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        //     'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
        //     'category_id' => $category->id,
        //     'isbn' => '978-3-16-148410-0',
        // ]);

        $this->assertEquals(10, $category->books->count());
        
    }
    
}
