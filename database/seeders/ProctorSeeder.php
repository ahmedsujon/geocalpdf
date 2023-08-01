<?php

namespace Database\Seeders;

use App\Models\Proctor;
use Illuminate\Database\Seeder;

class ProctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $getProctor = Proctor::where('proctorid', '6798')->first();

        if (!$getProctor) {
            $data = new Proctor();
            $data->proctorid = '6798';
            $data->test_method = 'AASHTO T99';
            $data->material_description = 'Red Lean Clay w/Sand';
            $data->max_dry_density = '107.0';
            $data->optimum_moisture = '19.3';
            $data->status = '0';
            $data->save();
        }

        $getProctors = Proctor::where('proctorid', '6799')->first();

        if (!$getProctors) {
            $data = new Proctor();
            $data->proctorid = '6799';
            $data->test_method = 'AASHTO T99';
            $data->material_description = 'Brown Fat Clay';
            $data->max_dry_density = '102.0';
            $data->optimum_moisture = '22.1';
            $data->status = '0';
            $data->save();
        }

        $getProctorsData = Proctor::where('proctorid', '6899')->first();

        if (!$getProctorsData) {
            $data = new Proctor();
            $data->proctorid = '6899';
            $data->test_method = 'AASHTO T99';
            $data->material_description = 'Brown Lean Clay';
            $data->max_dry_density = '108.0';
            $data->optimum_moisture = '18.8';
            $data->status = '0';
            $data->save();
        }
    }
}
