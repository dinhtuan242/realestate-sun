<?php

use Illuminate\Database\Seeder;
use App\Models\CategoryPost;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 10; $i++){
            CategoryPost::create([
                'name' => 'categoryPost-' . rand(1, 20),
            ]);
        }
    }
}
