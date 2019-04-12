<?php

use Illuminate\Database\Seeder;
use App\Models\PropertyType;

class PropertyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        for($i = 1; $i < 10; $i++){
        App\Models\PropertyType::create([
            'property_category_id' => rand(1, 10),
            'name' => 'property-' . rand(1, 20),
            'status' => str_random(100),
        ]);
        }
    }
}
