<?php

namespace Database\Seeders;

use App\Models\MixInfo;
use Illuminate\Database\Seeder;

class MixInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $getMixInfo = MixInfo::where('mix_id', '4018521')->first();

        if (!$getMixInfo) {
            $admin = new MixInfo();
            $admin->mix_id = '4018521';
            $admin->supplier = 'Brannan Sand & Gravel';
            $admin->plant = 'Plant #2';
            $admin->mix_type = 'S100';
            $admin->max_theoretical_density = '167.3';
            $admin->max_theoretical_specific_gravity = '2.681';
            $admin->save();
        }

        $getMixInfos = MixInfo::where('mix_id', '3075907')->first();

        if (!$getMixInfos) {
            $admin = new MixInfo();
            $admin->mix_id = '3075907';
            $admin->supplier = 'Brannan Sand & Gravel';
            $admin->plant = 'Plant #1';
            $admin->mix_type = 'S200';
            $admin->max_theoretical_density = '150.8';
            $admin->max_theoretical_specific_gravity = '2.417';
            $admin->save();
        }
    }
}
