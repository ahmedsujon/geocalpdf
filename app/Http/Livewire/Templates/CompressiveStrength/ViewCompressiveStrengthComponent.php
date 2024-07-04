<?php

namespace App\Http\Livewire\Templates\CompressiveStrength;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\CompressiveStrength;
use Livewire\WithFileUploads;

class ViewCompressiveStrengthComponent extends Component
{
    use WithFileUploads;
    
    public $project_number, $client_name, $project_id, $client_id, $user_id, $office_address, $contractid, $region, $contract_id_seq, $project_location,
    $concrete_supplier, $cdot_mix, $item, $description, $placed_at, $material_placed_in_line_item, $batch_ticket,
    $field_tester_name, $entrained_air, $slump, $concrete_temperature, $unit_weight, $yield, $wc_ratio,

    $signature, $new_signature,

    $specimen_for, $mold_date, $time, $hours_initial_cure_in_molds, $initial_cure_temperature, $final_cure_method,
    $location_stored_in_field, $manner_of_protection, $maintained_moist_and_temperature_by, $date_time_molds_removed,
    $field_comments, $sample_id, $set_no, $conc_class, $day_break_date, $number_of_specimens,
    $for_cast_specimens,

    $date_submitted_to_lab, $specimens_tested_at, $required_strength, $day_average_compressive_strength,
    $type_of_specimen_submitted, $cubes, $other, $represented_quantity, $previous_qty, $this_sheet, $total_to_date,

    $break_date_a, $age_a, $diameter_one_a, $diameter_two_a, $area_a, $maximum_load_a, $psi_a,
    $break_type_a, $aggregate_fractured_a,

    $break_date_b, $age_b, $diameter_one_b, $diameter_two_b, $area_b, $maximum_load_b, $psi_b,
    $break_type_b, $aggregate_fractured_b,

    $break_date_c, $age_c, $diameter_one_c, $diameter_two_c, $area_c, $maximum_load_c, $psi_c,
    $break_type_c, $aggregate_fractured_c,

    $break_date_d, $age_d, $diameter_one_d, $diameter_two_d, $area_d, $maximum_load_d, $psi_d,
    $break_type_d, $aggregate_fractured_d,

    $break_date_e, $age_e, $diameter_one_e, $diameter_two_e, $area_e, $maximum_load_e, $psi_e,
    $break_type_e, $aggregate_fractured_e,

    $break_date_f, $age_f, $diameter_one_f, $diameter_two_f, $area_f, $maximum_load_f, $psi_f,
    $break_type_f, $aggregate_fractured_f,

    $break_date_g, $age_g, $diameter_one_g, $diameter_two_g, $area_g, $maximum_load_g, $psi_g,
    $break_type_g, $aggregate_fractured_g,

    $file_id, $lab_comments, $submitted_by, $approved_by, $email, $slump_cone_id, $thermometer_id, $air_meter_id,
    $unit_weight_measure_id, $scale_id, $status, $send_to_client, $remark, $responsible_person = [];

    public function mount($file_id)
    {
        $file = CompressiveStrength::where('id', $file_id)->first();
        $this->project_id = $file->project_id;
        $this->file_id = $file_id;
        $this->client_id = $file->client_id;
        $this->client_name = client($file->client_id)->name;
        $this->project_number = $file->project_number;

       $this->project_location = $file->project_location;
       $this->office_address = $file->office_address;
       $this->contractid = $file->contractid;
       $this->region = $file->region;
       $this->contract_id_seq = $file->contract_id_seq;

       $this->concrete_supplier = $file->concrete_supplier;
       $this->cdot_mix = $file->cdot_mix;
       $this->item = $file->item;
       $this->description = $file->description;

       $this->placed_at = $file->placed_at;
       $this->material_placed_in_line_item = $file->material_placed_in_line_item;
       $this->batch_ticket = $file->batch_ticket;
       $this->field_tester_name = $file->field_tester_name;
       $this->entrained_air = $file->entrained_air;
       $this->slump = $file->slump;
       $this->concrete_temperature = $file->concrete_temperature;
       $this->unit_weight = $file->unit_weight;
       $this->yield = $file->yield;
       $this->wc_ratio = $file->wc_ratio;

       $this->specimen_for = $file->specimen_for;
       $this->mold_date = $file->mold_date;
       $this->time = $file->time;
       $this->hours_initial_cure_in_molds = $file->hours_initial_cure_in_molds;
       $this->initial_cure_temperature = $file->initial_cure_temperature;
       $this->final_cure_method = $file->final_cure_method;

       $this->location_stored_in_field = $file->location_stored_in_field;
       $this->manner_of_protection = $file->manner_of_protection;
       $this->maintained_moist_and_temperature_by = $file->maintained_moist_and_temperature_by;
       $this->date_time_molds_removed = $file->date_time_molds_removed;
       $this->field_comments = $file->field_comments;

       $this->sample_id = $file->sample_id;
       $this->set_no = $file->set_no;
       $this->conc_class = $file->conc_class;
       $this->day_break_date = $file->day_break_date;
       $this->number_of_specimens = $file->number_of_specimens;
       $this->for_cast_specimens = $file->for_cast_specimens;

       $this->date_submitted_to_lab = $file->date_submitted_to_lab;
       $this->specimens_tested_at = $file->specimens_tested_at;
       $this->required_strength = $file->required_strength;
       $this->day_average_compressive_strength = $file->day_average_compressive_strength;
       $this->type_of_specimen_submitted = $file->type_of_specimen_submitted;
       $this->cubes = $file->cubes;
       $this->other = $file->other;
       $this->represented_quantity = $file->represented_quantity;
       $this->previous_qty = $file->previous_qty;
       $this->this_sheet = $file->this_sheet;
       $this->total_to_date = $file->total_to_date;

       $this->break_date_a = $file->break_date_a;
       $this->age_a = $file->age_a;
       $this->diameter_one_a = $file->diameter_one_a;
       $this->diameter_two_a = $file->diameter_two_a;
       $this->area_a = $file->area_a;
       $this->maximum_load_a = $file->maximum_load_a;
       $this->psi_a = $file->psi_a;
       $this->break_type_a = $file->break_type_a;
       $this->aggregate_fractured_a = $file->aggregate_fractured_a;

       $this->break_date_b = $file->break_date_b;
       $this->age_b = $file->age_b;
       $this->diameter_one_b = $file->diameter_one_b;
       $this->diameter_two_b = $file->diameter_two_b;
       $this->area_b = $file->area_b;
       $this->maximum_load_b = $file->maximum_load_b;
       $this->psi_b = $file->psi_b;
       $this->break_type_b = $file->break_type_b;
       $this->aggregate_fractured_b = $file->aggregate_fractured_b;

       $this->break_date_b = $file->break_date_b;
       $this->age_b = $file->age_b;
       $this->diameter_one_b = $file->diameter_one_b;
       $this->diameter_two_b = $file->diameter_two_b;
       $this->area_b = $file->area_b;
       $this->maximum_load_b = $file->maximum_load_b;
       $this->psi_b = $file->psi_b;
       $this->break_type_b = $file->break_type_b;
       $this->aggregate_fractured_b = $file->aggregate_fractured_b;

       $this->break_date_b = $file->break_date_b;
       $this->age_b = $file->age_b;
       $this->diameter_one_b = $file->diameter_one_b;
       $this->diameter_two_b = $file->diameter_two_b;
       $this->area_b = $file->area_b;
       $this->maximum_load_b = $file->maximum_load_b;
       $this->psi_b = $file->psi_b;
       $this->break_type_b = $file->break_type_b;
       $this->aggregate_fractured_b = $file->aggregate_fractured_b;

       $this->break_date_c = $file->break_date_c;
       $this->age_c = $file->age_c;
       $this->diameter_one_c = $file->diameter_one_c;
       $this->diameter_two_c = $file->diameter_two_c;
       $this->area_c = $file->area_c;
       $this->maximum_load_c = $file->maximum_load_c;
       $this->psi_c = $file->psi_c;
       $this->break_type_c = $file->break_type_c;
       $this->aggregate_fractured_c = $file->aggregate_fractured_c;

       $this->break_date_d = $file->break_date_d;
       $this->age_d = $file->age_d;
       $this->diameter_one_d = $file->diameter_one_d;
       $this->diameter_two_d = $file->diameter_two_d;
       $this->area_d = $file->area_d;
       $this->maximum_load_d = $file->maximum_load_d;
       $this->psi_d = $file->psi_d;
       $this->break_type_d = $file->break_type_d;
       $this->aggregate_fractured_d = $file->aggregate_fractured_d;

       $this->break_date_e = $file->break_date_e;
       $this->age_e = $file->age_e;
       $this->diameter_one_e = $file->diameter_one_e;
       $this->diameter_two_e = $file->diameter_two_e;
       $this->area_e = $file->area_e;
       $this->maximum_load_e = $file->maximum_load_e;
       $this->psi_e = $file->psi_e;
       $this->break_type_e = $file->break_type_e;
       $this->aggregate_fractured_e = $file->aggregate_fractured_e;

       $this->break_date_f = $file->break_date_f;
       $this->age_f = $file->age_f;
       $this->diameter_one_f = $file->diameter_one_f;
       $this->diameter_two_f = $file->diameter_two_f;
       $this->area_f = $file->area_f;
       $this->maximum_load_f = $file->maximum_load_f;
       $this->psi_f = $file->psi_f;
       $this->break_type_f = $file->break_type_f;
       $this->aggregate_fractured_f = $file->aggregate_fractured_f;

       $this->break_date_g = $file->break_date_g;
       $this->age_g = $file->age_g;
       $this->diameter_one_g = $file->diameter_one_g;
       $this->diameter_two_g = $file->diameter_two_g;
       $this->area_g = $file->area_g;
       $this->maximum_load_g = $file->maximum_load_g;
       $this->psi_g = $file->psi_g;
       $this->break_type_g = $file->break_type_g;
       $this->aggregate_fractured_g = $file->aggregate_fractured_g;

       $this->new_signature = $file->signature;

       $this->lab_comments = $file->lab_comments;
       $this->submitted_by = $file->submitted_by;
       $this->approved_by = $file->approved_by;
       $this->email = $file->email;
       $this->slump_cone_id = $file->slump_cone_id;
       $this->thermometer_id = $file->thermometer_id;
       $this->air_meter_id = $file->air_meter_id;
       $this->unit_weight_measure_id = $file->unit_weight_measure_id;
       $this->scale_id = $file->scale_id;
       $this->remark = $file->remark;
       $this->status = $file->status;
    }
    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        return view('livewire.templates.compressive-strength.view-compressive-strength-component', ['projects'=>$projects, 'supervisors'=>$supervisors])->layout('livewire.layouts.base');
    }
}
