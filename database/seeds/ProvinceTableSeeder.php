<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 10; $i++){
            App\Models\Province::create([
                'name' => 'province-' . rand(1, 20),
            ]);
        }
        for($i = 1; $i < 10; $i++){
            App\Models\District::create([    
                'name' => 'District-' . rand(1, 20),
                'provinces_id' => rand(1, 20),
            ]);
        }
    }
}
