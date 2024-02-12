<?php

namespace App\Http\Livewire\Templates\CompressiveStrength;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;

class CreateCompressiveStrengthComponent extends Component
{
    public $project_number, $client_name, $project_id, $client_id, $user_id, $office_address, $contractid, $region, $contract_id_seq, $project_location,
        $concrete_supplier, $cdot_mix, $item, $description, $placed_at, $material_placed_in_line_item, $batch_ticket,
        $field_tester_name, $entrained_air, $slump, $concrete_temperature, $unit_weight, $yield, $wc_ratio,

        $specimen_for, $mold_date, $time, $hours_initial_cure_in_molds, $initial_cure_temperature, $final_cure_method,
        $location_stored_in_field, $manner_of_protection, $maintained_moist_and_temperature_by, $date_time_molds_removed,
        $field_comments, $sample_id, $set_no, $conc_class, $day_break_date, $number_of_specimens,
        $for_cast_specimens,

        $date_submitted_to_lab, $specimens_tested_at, $required_strength, $day_average_compressive_strength,
        $type_of_specimen_submitted, $cubes, $other, $represented_quantity, $previous_qty, $this_sheet, $total_to_date,

        $specimen_a, $break_date_a, $age_a, $diameter_one_a, $diameter_two_a, $area_a, $maximum_load_a, $psi_a,
        $break_type_a, $aggregate_fractured_a,

        $specimen_b, $break_date_b, $age_b, $diameter_one_b, $diameter_two_b, $area_b, $maximum_load_b, $psi_b,
        $break_type_b, $aggregate_fractured_b,

        $specimen_c, $break_date_c, $age_c, $diameter_one_c, $diameter_two_c, $area_c, $maximum_load_c, $psi_c,
        $break_type_c, $aggregate_fractured_c,

        $specimen_d, $break_date_d, $age_d, $diameter_one_d, $diameter_two_d, $area_d, $maximum_load_d, $psi_d,
        $break_type_d, $aggregate_fractured_d,

        $specimen_e, $break_date_e, $age_e, $diameter_one_e, $diameter_two_e, $area_e, $maximum_load_e, $psi_e,
        $break_type_e, $aggregate_fractured_e,

        $specimen_f, $break_date_f, $age_f, $diameter_one_f, $diameter_two_f, $area_f, $maximum_load_f, $psi_f,
        $break_type_f, $aggregate_fractured_f,

        $specimen_g, $break_date_g, $age_g, $diameter_one_g, $diameter_two_g, $area_g, $maximum_load_g, $psi_g,
        $break_type_g, $aggregate_fractured_g,

        $lab_comments, $submitted_by, $approved_by, $email, $slump_cone_id, $thermometer_id, $air_meter_id,
        $unit_weight_measure_id, $scale_id, $status, $send_to_client, $responsible_person;

    // ============== get project information ========
    public $selected_project_ids = [];
    public function selectInfo()
    {
        if ($this->project_id) {
            $project = Project::where('id', $this->project_id)->first();
            $this->selected_project_ids = $this->project_id;
            $this->client_id = $project->client_id;
            $this->project_number = $project->project_number;
            $this->client_id = $project->client_id;
            $this->client_name = client($project->client_id)->name;
        } else {
            $this->client_id = '';
            $this->project_number = '';
            $this->client_name = '';
            unset($this->selected_project_ids);
        }
    }
    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        return view(
            'livewire.templates.compressive-strength.create-compressive-strength-component',
            ['projects' => $projects, 'supervisors' => $supervisors]
        )->layout('livewire.layouts.base');
    }
}
