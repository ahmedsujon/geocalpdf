<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'role_id' => '3',
            'name' => 'Cindy Card',
            'email' => 'cindycard@geocal.us',
            'password' => Hash::make('12345678'),
        ]);
    }
}
