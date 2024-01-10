<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'role_id' => '1',
            'name' => 'Sujon Ahmed',
            'email' => 'sujonahmed424@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
