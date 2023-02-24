<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
        /*
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
        */

        $user = new User();
        $user->username = 'anonymous';
        $user->is_admin = false;
        $user->email = '';
        $user->password = Hash::make('password');
        $user->save();

        $user2 = new User();
        $user2->username = 'admin';
        $user2->is_admin = true;
        $user2->email = 'admin@localhost';
        $user2->password = Hash::make('password');
        $user2->save();

        User::factory()->count(10)->create();  
    }
}
