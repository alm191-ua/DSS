<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            'tag' => 'fiction',
        ]);
        DB::table('categories')->insert([
            'tag' => 'non-fiction',
        ]);
        DB::table('categories')->insert([
            'tag' => 'poetry',
        ]);
        DB::table('categories')->insert([
            'tag' => 'drama',
        ]);
        DB::table('categories')->insert([
            'tag' => 'comedy',
        ]);
        DB::table('categories')->insert([
            'tag' => 'horror',
        ]);
        DB::table('categories')->insert([
            'tag' => 'romance',
        ]);
        DB::table('categories')->insert([
            'tag' => 'mystery',
        ]);
        DB::table('categories')->insert([
            'tag' => 'thriller',
        ]);
        DB::table('categories')->insert([
            'tag' => 'science-fiction',
        ]);
        DB::table('categories')->insert([
            'tag' => 'fantasy',
        ]);
        DB::table('categories')->insert([
            'tag' => 'biography',
        ]);
        DB::table('categories')->insert([
            'tag' => 'history',
        ]);
        DB::table('categories')->insert([
            'tag' => 'computer-science',
        ]);
        DB::table('categories')->insert([
            'tag' => 'philosophy',
        ]);
        DB::table('categories')->insert([
            'tag' => 'religion',
        ]);

    }
}
