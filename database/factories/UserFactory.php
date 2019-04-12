<?php

use App\Models\User;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function () {
    return [
        'name' => 'user-' . rand(1, 10),
        'email' => 'email-' . (rand(10, 100) * rand(200, 300)) . '@gmail.com',
        'address' => 'address-' . rand(1, 10),
        'phone' => 0123456535,
        'password' => bcrypt('realestate'),
        'remember_token' => str_random(10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
