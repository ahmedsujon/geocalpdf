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
        $getDataA = MixInfo::where('mix_id', '4018521')->first();

        if (!$getDataA) {
            $admin = new MixInfo();
            $admin->mix_id = '4018521';
            $admin->supplier = 'Brannan Sand & Gravel';
            $admin->plant = 'Plant #1';
            $admin->mix_type = 'S100';
            $admin->max_theoretical_density = '167.3';
            $admin->max_theoretical_specific_gravity = '2.681';
            $admin->save();
        }

        $getDataB = MixInfo::where('mix_id', '3075908')->first();
        if (!$getDataB) {
            $admin = new MixInfo();
            $admin->mix_id = '3075908';
            $admin->supplier = 'Brannan Sand & Gravel';
            $admin->plant = 'Plant #2';
            $admin->mix_type = 'S200';
            $admin->max_theoretical_density = '155.8';
            $admin->max_theoretical_specific_gravity = '2.414';
            $admin->save();
        }
        $getDataC = MixInfo::where('mix_id', '3075999')->first();
        if (!$getDataC) {
            $admin = new MixInfo();
            $admin->mix_id = '3075999';
            $admin->supplier = 'Brannan Sand & Gravel';
            $admin->plant = 'Plant #3';
            $admin->mix_type = 'S200';
            $admin->max_theoretical_density = '156.8';
            $admin->max_theoretical_specific_gravity = '2.415';
            $admin->save();
        }
        $getDataD = MixInfo::where('mix_id', '3075922')->first();
        if (!$getDataD) {
            $admin = new MixInfo();
            $admin->mix_id = '3075922';
            $admin->supplier = 'Brannan Sand & Gravel';
            $admin->plant = 'Plant #4';
            $admin->mix_type = 'S200';
            $admin->max_theoretical_density = '148.8';
            $admin->max_theoretical_specific_gravity = '2.416';
            $admin->save();
        }
        $getDataE = MixInfo::where('mix_id', '3075923')->first();
        if (!$getDataE) {
            $admin = new MixInfo();
            $admin->mix_id = '3075923';
            $admin->supplier = 'Brannan Sand & Gravel';
            $admin->plant = 'Plant #5';
            $admin->mix_type = 'S200';
            $admin->max_theoretical_density = '156.8';
            $admin->max_theoretical_specific_gravity = '2.417';
            $admin->save();
        }
        $getDataF = MixInfo::where('mix_id', '3075924')->first();
        if (!$getDataF) {
            $admin = new MixInfo();
            $admin->mix_id = '3075924';
            $admin->supplier = 'Brannan Sand & Gravel';
            $admin->plant = 'Plant #6';
            $admin->mix_type = 'S200';
            $admin->max_theoretical_density = '167.8';
            $admin->max_theoretical_specific_gravity = '2.418';
            $admin->save();
        }
    }
}
