<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate([
            'role' => 'superadministrator',
        ]);

        Role::updateOrCreate([
            'role' => 'projectengineer',
        ]);

        Role::updateOrCreate([
            'role' => 'clerk',
        ]);

        Role::updateOrCreate([
            'role' => 'supervisor',
        ]);

        Role::updateOrCreate([
            'role' => 'user',
        ]);
    }
}
