<?php


$factory->define(App\Models\PropertyType::class, function () {
    return [
        'property_category_id' => rand(1, 10),
        'name' => 'property-' . rand(1, 20),
        'status' => str_random(100),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
