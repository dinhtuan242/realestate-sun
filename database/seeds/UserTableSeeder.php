<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'super admin',
            'email' => 'admin@gmail.com',
            'address' => 'Ha Noi',
            'phone' => '0123456789',
            'password' => bcrypt('admin123'),
            'remember_token' => str_random(10),
        ]);
        $role = Role::create([
            'name' => 'super admin',
        ]);
        $user->first()->role()->sync($role);
    }
}
