<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the posts table
        DB::table('posts')->truncate();
        
        //genrate 10 dummy posts data
        $posts = [];
        $faker = Factory::create();
        
        for ($i = 1; $i <= 10; $i++){
            $image = "Post_Image_" . rand(1,5) . ".jpg";
            $posts[] = [
              'excerpt' => $faker->text(rand(250, 300)),
              'body' => $faker->paragraphs(rand(10, 15), true),
              'image' => rand(0, 1) == 1? $image : NULL
            ];
        }
    }
}
