<?php


$factory->define(App\Models\District::class, function () {
    return [
        'name' => 'District-' . rand(1, 20),
        'provinces_id' => rand(1, 64),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
