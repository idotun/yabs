<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table
        DB::table('users')->truncate();
        
        // generate 3 users/author 
        DB::table('users')->insert([
            [
               'name' => "John Doe",
               'email' => "johndoe@test.com",
               'password' => bcrypt('secret')
            
            ],
            [
               'name' => "Jane Doe",
               'email' => "janedoe@test.com",
               'password' => bcrypt('secret')
            
            ],
            [
               'name' => "Joe Doe",
               'email' => "joedoe@test.com",
               'password' => bcrypt('secret')
            
            ],
        ]);
    }
}
