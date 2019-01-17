<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();

        $faker = \Faker\Factory::create();

        for($i=1;$i <= 10;$i++){
            Comment::create([
                'replay' => $faker->sentence,
                'post_id'=>$i
            ]);
        }
    }
}
