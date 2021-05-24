<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory(10)->create();
        \DB::table('users')->insert([
            'id' => 123,
            'username' => 'Alexgundara',
            'email' => 'alexgundara@gmail.com',
            'password' => bcrypt(12345),
            'access' => 3,
            ]);
        \DB::table('clients')->insert([
            'id' => 123,
            'username' => 'Alexgundara',
            'name' => 'Alex Gundara',
            'email' => 'alexgundara@gmail.com',
            'address' => 'Jakarta',
            'phonenumber' => 021654,
            'univname' => 'Telkom University',
            ]);

        \DB::table('users')->insert([
            'id' => 456,
            'username' => 'todosantana',
            'email' => 'todosantana@gmail.com',
            'password' => bcrypt(12345),
            'access' => 1,
            ]);
            

        \DB::table('users')->insert([
            'id' => 789,
            'username' => 'skinner123',
            'email' => 'skinner@gmail.com',
            'password' => bcrypt(12345),
            'access' => 2,
            ]);    
    }
}
