<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Client::factory(2)->create();
        Project::factory(2)->create();

        $this->call(RoleTableSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(PESeeder::class);
        $this->call(ClerkSeeder::class);
        $this->call(SupervisorSeeder::class);
        $this->call(FTSeeder::class);
        $this->call(MixInfoSeeder::class);
        $this->call(ProctorSeeder::class);

    }
}
