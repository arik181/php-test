<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'name' => 'arik181', 
            'email' => 'arik181+1@gmail.com', 
            'password' => bcrypt('LaravelTestPW')
            ],
            [
            'name' => 'mcclain', 
            'email' => 'git@mcclainconcepts.com',
            'password' => bcrypt('LaravelTestPW')
            ],
        ]); 
    }
}
