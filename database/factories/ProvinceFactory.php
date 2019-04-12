<?php


$factory->define(App\Models\Province::class, function () {
    return [
        'name' => 'province-' . rand(1, 20),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
