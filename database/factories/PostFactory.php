<?php


$factory->define(App\Models\Post::class, function () {
    $title = 'post-' . rand(1, 20);

    return [
        'title' => $title,
        'describe' => 'describe-' . rand(1, 20),
        'content' => 'content-' . rand(1, 20),
        'slug'=> str_slug($title),
        'image' => 'https://api.adorable.io/avatars/285/' . str_random(10) . '.png',
        'status' => rand(1, 20),
        'category_post_id' => rand(1, 10),
        'user_id' => rand(1, 10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
