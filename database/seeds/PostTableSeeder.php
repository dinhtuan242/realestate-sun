<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 10; $i++){
            $title = 'post-' . rand(1, 20);
            Post::create([
                'title' => $title,
                'describe' => 'describe-' . rand(1, 20),
                'content' => 'content-' . rand(1, 20),
                'slug'=> str_slug($title),
                'image' => 'https://api.adorable.io/avatars/285/' . str_random(10) . '.png',
                'status' => rand(1, 20),
                'category_post_id' => rand(1, 10),
                'user_id' => 1,
            ]);
        }
    }
}
