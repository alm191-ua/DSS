<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    // test get category fantasy
    public function test_get_category_fantasy()
    {
        $category = Category::where('tag', 'fantasy')->first();
        $this->assertEquals("fantasy", $category->tag);
    }
    
}
