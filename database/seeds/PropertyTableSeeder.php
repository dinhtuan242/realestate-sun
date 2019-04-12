<?php

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 10; $i++){
            Property::create([
                'user_id' => 1,
                'property_type_id' => rand(1, 10),
                'district_id' => rand(1, 10),
                'unit_id' => rand(1, 9),
                'name' => 'Property-' . rand(1, 20),
                'address' => 'address-' . rand(1, 20),
                'describe' => str_random(100),
                'acreage' => rand(1, 10),
                'price' => rand(1, 10) * 1000,
                'status' => str_random(100),
                'form' => rand(0, 1),
                'image' => 'https://api.adorable.io/avatars/285/' . str_random(10) . '.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
