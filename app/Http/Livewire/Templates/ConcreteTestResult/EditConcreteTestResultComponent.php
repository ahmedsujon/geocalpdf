<?php

namespace App\Http\Livewire\Templates\ConcreteTestResult;

use Livewire\Component;

class EditConcreteTestResultComponent extends Component
{
    public $office_address, $project_id, $client_id, $user_id, $project_number, $project_location, $date_submited, $region, $item,
    $class, $design_mix_no, $batch_plant, $structure, $slupm, $inches_max, $inches_min, $compressive_strength,
    $location_test_a, $date_placed_a, $ticket_no_a, $batched_a, $placed_a, $temp_a, $slump_a, $total_air_a,
    $unit_mass_a, $yeild_a, $calculated_wc_ratio_a, $cylinders_cast_fs_no_a, $set_no_a, $location_test_b,
    $date_placed_b, $ticket_no_b, $batched_b, $placed_b, $temp_b, $slump_b, $total_air_b, $unit_mass_b, $yeild_b,
    $calculated_wc_ratio_b, $cylinders_cast_fs_no_b, $set_no_b, $location_test_c, $date_placed_c, $ticket_no_c,
    $batched_c, $placed_c, $temp_c, $slump_c, $total_air_c, $unit_mass_c, $yeild_c, $calculated_wc_ratio_c,
    $cylinders_cast_fs_no_c, $set_no_c, $location_test_d, $date_placed_d, $ticket_no_d, $batched_d, $placed_d,
    $temp_d, $slump_d, $total_air_d, $unit_mass_d, $yeild_d, $calculated_wc_ratio_d, $cylinders_cast_fs_no_d,
    $set_no_d, $location_test_e, $date_placed_e, $ticket_no_e, $batched_e, $placed_e, $temp_e, $slump_e, $total_air_e,
    $unit_mass_e, $yeild_e, $calculated_wc_ratio_e, $cylinders_cast_fs_no_e, $set_no_e, $location_test_f, $date_placed_f,
    $ticket_no_f, $batched_f, $placed_f, $temp_f, $slump_f, $total_air_f, $unit_mass_f, $yeild_f, $calculated_wc_ratio_f,
    $cylinders_cast_fs_no_f, $set_no_f, $location_test_g, $date_placed_g, $ticket_no_g, $batched_g, $placed_g, $temp_g,
    $slump_g, $total_air_g, $unit_mass_g, $yeild_g, $calculated_wc_ratio_g, $cylinders_cast_fs_no_g, $set_no_g,
    $location_test_h, $date_placed_h, $ticket_no_h, $batched_h, $placed_h, $temp_h, $slump_h, $total_air_h, $unit_mass_h,
    $yeild_h, $calculated_wc_ratio_h, $cylinders_cast_fs_no_h, $set_no_h, $location_test_i, $date_placed_i, $ticket_no_i,
    $batched_i, $placed_i, $temp_i, $slump_i, $total_air_i, $unit_mass_i, $yeild_i, $calculated_wc_ratio_i,
    $cylinders_cast_fs_no_i, $set_no_i, $location_test_j, $date_placed_j, $ticket_no_j, $batched_j, $placed_j,
    $temp_j, $slump_j, $total_air_j, $unit_mass_j, $yeild_j, $calculated_wc_ratio_j, $cylinders_cast_fs_no_j, $set_no_j,
    $location_test_k, $date_placed_k, $ticket_no_k, $batched_k, $placed_k, $temp_k, $slump_k, $total_air_k, $unit_mass_k,
    $yeild_k, $calculated_wc_ratio_k, $cylinders_cast_fs_no_k, $set_no_k, $location_test_l, $date_placed_l,
    $ticket_no_l, $batched_l, $placed_l, $temp_l, $slump_l, $total_air_l, $unit_mass_l, $yeild_l, $calculated_wc_ratio_l,
    $cylinders_cast_fs_no_l, $set_no_l, $location_test_m, $date_placed_m, $ticket_no_m, $batched_m, $placed_m, $temp_m,
    $slump_m, $total_air_m, $unit_mass_m, $yeild_m, $calculated_wc_ratio_m, $cylinders_cast_fs_no_m, $set_no_m,
    $location_test_n, $date_placed_n, $ticket_no_n, $batched_n, $placed_n, $temp_n, $slump_n, $total_air_n,
    $unit_mass_n, $yeild_n, $calculated_wc_ratio_n, $cylinders_cast_fs_no_n, $set_no_n, $location_test_o,
    $date_placed_o, $ticket_no_o, $batched_o, $placed_o, $temp_o, $slump_o, $total_air_o, $unit_mass_o, $yeild_o,
    $calculated_wc_ratio_o, $cylinders_cast_fs_no_o, $set_no_o, $tester, $tester_title, $project_engineer, $signature,
    $title, $status, $send_to_client, $responsible_person = [];
    public function render()
    {
        return view('livewire.templates.concrete-test-result.edit-concrete-test-result-component')->layout('livewire.layouts.base');
    }
}
