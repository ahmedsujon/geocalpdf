<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::updateOrCreate([
        //     'role_id' => '4',
        //     'name' => 'Greg',
        //     'email' => 'gregp@geocal.us',
        //     'password' => Hash::make('12345678'),
        // ]);

        User::updateOrCreate([
            'role_id' => '4',
            'name' => 'UIUX',
            'email' => 'uiuxsujon@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
