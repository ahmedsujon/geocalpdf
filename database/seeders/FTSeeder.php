<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'role_id' => '5',
            'name' => 'FT',
            'email' => 'fieldtechnician@gmail.com',
            'password' => Hash::make('fieldtechnician'),
        ]);
    }
}
