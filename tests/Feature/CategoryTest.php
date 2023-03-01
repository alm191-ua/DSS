<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    // test get category fantasy
    public function test_get_category_fantasy()
    {
        $category = Category::where('tag', 'fantasy')->first();
        $this->assertEquals("fantasy", $category->tag);
    }

    // test relation with books
    public function test_relation_with_books()
    {
        $category = Category::where('tag', 'fantasy')->first();
        $this->assertEquals(1, $category->books->count());
    }   
    
}
