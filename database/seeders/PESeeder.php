<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'role_id' => '2',
            'name' => 'Project Engineer',
            'email' => 'sujon15-1369@diu.edu.bd',
            'password' => Hash::make('12345678'),
        ]);
    }
}
