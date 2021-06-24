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
        \DB::table('admin')->insert([
            'id' => 456,
            'username' => 'todosantana',
            'name' => 'Todo',
            'email' => 'todosantana@gmail.com',
            'phonenumber' => 12345,
            ]);
        \DB::table('users')->insert([
            'id' => 789,
            'username' => 'skinner123',
            'email' => 'skinner@gmail.com',
            'password' => bcrypt(12345),
            'access' => 2,
            ]);
        \DB::table('counselor')->insert([
            'id' => 789,
            'username' => 'skinner123',
            'name'=> 'B. F. Skinner',
            'email' => 'skinner@gmail.com',
            'specialization' => 'A, B, C',
            'availdays' => 'Mon, Tue, Wed',
            'phonenumber' => 3215,
            ]);   
        \DB::table('messages')->insert([
            'id' => 001,
            'clientid' => '123',
            'counselorid'=> '789',
            'messages' => 'Need some help!',
            ]);     
        \DB::table('replies')->insert([
            'id' => 001,
            'clientid' => '123',
            'messageid' => 001,
            'counselorid'=> '789',
            'messages' => 'You can be better!',
            ]);  
        \DB::table('appointmentreq')->insert([
            'id' => 001,
            // 'scheduleid' => '101',
            'requesteddate' => '001',
            'clientid'=> '123',
            'counselorid'=> '789',
            'clientname'=> 'Alexander Gundara',
            'type'=> 'Personal Development',
            'method' => 'Video Counseling',
            'reason'=> 'Need help to plan my future!',
            ]);      
    }
}
