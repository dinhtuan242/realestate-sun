<?php

use Illuminate\Database\Seeder;
use App\Models\PropertyCategory;

class PropertyCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyCategory::create([
            'name' => 'propertyCategory-' . rand(1, 20),
        ]);
    }
}
