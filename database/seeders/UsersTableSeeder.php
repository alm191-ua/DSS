<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        DB::table('users')->insert([
            'username' => 'anonymous',
            'is_admin' => false,
            'email' => '',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'username' => 'admin',
            'is_admin' => true,
            'email' => 'admin@localhost',
            'password' => Hash::make('password'),
        ]);
    }
}
