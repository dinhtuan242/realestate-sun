<?php


$factory->define(App\Models\PropertyCategory::class, function () {
    return [
        'name' => 'propertyCategory-' . rand(1, 20),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
