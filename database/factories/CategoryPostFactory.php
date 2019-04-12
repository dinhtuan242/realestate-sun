<?php


$factory->define(App\Models\CategoryPost::class, function () {
    return [
        'name' => 'categoryPost-' . rand(1, 20),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
