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
        User::updateOrCreate([
            'role_id' => '4',
            'name' => 'Supervisour',
            'email' => 'supervisour@gmail.com',
            'password' => Hash::make('supervisour'),
        ]);
    }
}
