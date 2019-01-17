<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $faker = \Faker\Factory::create();

        for($i=1;$i <= 10;$i++){
            Post::create([
                'title' => $faker->sentence,
                'content'=>$faker->sentence,
                'user_id'=>$i
            ]);
        }
    }
}
