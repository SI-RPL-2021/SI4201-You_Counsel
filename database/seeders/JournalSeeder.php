<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('journals')->insert([
            'id' => 001,
            'clientid' => '123',
            'mood' => "Happy",
            'message' => "im doing well thanks",
            ]);   
    }
}
