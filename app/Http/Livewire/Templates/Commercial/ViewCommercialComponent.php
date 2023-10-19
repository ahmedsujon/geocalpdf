<?php

namespace App\Http\Livewire\Templates\Commercial;

use App\Models\Commercial;
use App\Models\MixInfo;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class ViewCommercialComponent extends Component
{
    public $client_id, $client_name, $project_id, $project_number, $date, $user_id, $weather, $office_address, $troxler, $other, $model, $serial_no, $density_count, $moisture_count, $moisture_equation, $test_mode, $test_method, $compaction_requirement_min, $compaction_requirement_max, $general_location, $remark, $status, $report_status, $file_id, $responsible_person = [];

    public $mix_a_id, $supplier_a, $plant_a, $mix_type_a, $max_theoretical_density_a, $max_theoretical_specific_gravity_a,
        $mix_b_id, $supplier_b, $plant_b, $mix_type_b, $max_theoretical_density_b, $max_theoretical_specific_gravity_b,
        $mix_c_id, $supplier_c, $plant_c, $mix_type_c, $max_theoretical_density_c, $max_theoretical_specific_gravity_c,
        $mix_d_id, $supplier_d, $plant_d, $mix_type_d, $max_theoretical_density_d, $max_theoretical_specific_gravity_d,
        $mix_e_id, $supplier_e, $plant_e, $mix_type_e, $max_theoretical_density_e, $max_theoretical_specific_gravity_e;

    public $test_no_a, $result_mix_id_a, $location_a, $count_period_a, $material_a, $lift_a, $layer_thickness_a,        $max_theory_density_a, $field_wet_density_a, $relative_compaction_a, $pass_fail_a,
        $test_no_b, $result_mix_id_b, $location_b, $count_period_b, $material_b, $lift_b, $layer_thickness_b, $max_theory_density_b, $field_wet_density_b, $relative_compaction_b, $pass_fail_b,
        $test_no_c, $result_mix_id_c, $location_c, $count_period_c, $material_c, $lift_c, $layer_thickness_c, $max_theory_density_c, $field_wet_density_c, $relative_compaction_c, $pass_fail_c,
        $test_no_d, $result_mix_id_d, $location_d, $count_period_d, $material_d, $lift_d, $layer_thickness_d, $max_theory_density_d, $field_wet_density_d, $relative_compaction_d, $pass_fail_d,
        $test_no_e, $result_mix_id_e, $location_e, $count_period_e, $material_e, $lift_e, $layer_thickness_e, $max_theory_density_e, $field_wet_density_e, $relative_compaction_e, $pass_fail_e,

        $test_no_f, $result_mix_id_f, $location_f, $count_period_f, $material_f, $lift_f, $layer_thickness_f, $max_theory_density_f, $field_wet_density_f, $relative_compaction_f, $pass_fail_f;

    public function mount($file_id)
    {
        $file = Commercial::where('id', $file_id)->first();
        $this->project_id = $file->project_id;
        $this->file_id = $file_id;
        $this->client_id = $file->client_id;
        $this->client_name = client($file->client_id)->name;

        $this->project_number = $file->project_number;
        $this->date = $file->date;
        $this->user_id = $file->user_id;
        $this->weather = $file->weather;
        $this->office_address = $file->office_address;
        $this->troxler = $file->troxler;
        $this->other = $file->other;
        $this->model = $file->model;
        $this->serial_no = $file->serial_no;
        $this->density_count = $file->density_count;
        $this->moisture_count = $file->moisture_count;
        $this->moisture_equation = $file->moisture_equation;
        $this->report_status = $file->report_status;
        $this->test_mode = $file->test_mode;
        $this->test_method = $file->test_method;
        $this->compaction_requirement_min = $file->compaction_requirement_min;
        $this->compaction_requirement_max = $file->compaction_requirement_max;
        $this->general_location = $file->general_location;
        $this->remark = $file->remark;

        // mix information
        $this->mix_a_id = $file->mix_a_id;
        $this->supplier_a = $file->supplier_a;
        $this->plant_a = $file->plant_a;
        $this->mix_type_a = $file->mix_type_a;
        $this->max_theoretical_density_a = $file->max_theoretical_density_a;
        $this->max_theoretical_specific_gravity_a = $file->max_theoretical_specific_gravity_a;

        $this->mix_b_id = $file->mix_b_id;
        $this->supplier_b = $file->supplier_b;
        $this->plant_b = $file->plant_b;
        $this->mix_type_b = $file->mix_type_b;
        $this->max_theoretical_density_b = $file->max_theoretical_density_b;
        $this->max_theoretical_specific_gravity_b = $file->max_theoretical_specific_gravity_b;

        $this->mix_c_id = $file->mix_c_id;
        $this->supplier_c = $file->supplier_c;
        $this->plant_c = $file->plant_c;
        $this->mix_type_c = $file->mix_type_c;
        $this->max_theoretical_density_c = $file->max_theoretical_density_c;
        $this->max_theoretical_specific_gravity_c = $file->max_theoretical_specific_gravity_c;

        $this->mix_d_id = $file->mix_d_id;
        $this->supplier_d = $file->supplier_d;
        $this->plant_d = $file->plant_d;
        $this->mix_type_d = $file->mix_type_d;
        $this->max_theoretical_density_d = $file->max_theoretical_density_d;
        $this->max_theoretical_specific_gravity_d = $file->max_theoretical_specific_gravity_d;

        $this->mix_e_id = $file->mix_e_id;
        $this->supplier_e = $file->supplier_e;
        $this->plant_e = $file->plant_e;
        $this->mix_type_e = $file->mix_type_e;
        $this->max_theoretical_density_e = $file->max_theoretical_density_e;
        $this->max_theoretical_specific_gravity_e = $file->max_theoretical_specific_gravity_e;
        // test results
        $this->test_no_a = $file->test_no_a;
        $this->result_mix_id_a = $file->result_mix_id_a;
        $this->location_a = $file->location_a;
        $this->count_period_a = $file->count_period_a;
        $this->material_a = $file->material_a;
        $this->lift_a = $file->lift_a;
        $this->layer_thickness_a = $file->layer_thickness_a;
        $this->max_theory_density_a = $file->max_theory_density_a;
        $this->field_wet_density_a = $file->field_wet_density_a;
        $this->relative_compaction_a = $file->relative_compaction_a;
        $this->pass_fail_a = $file->pass_fail_a;

        $this->test_no_b = $file->test_no_b;
        $this->result_mix_id_b = $file->result_mix_id_b;
        $this->location_b = $file->location_b;
        $this->count_period_b = $file->count_period_b;
        $this->material_b = $file->material_b;
        $this->lift_b = $file->lift_b;
        $this->layer_thickness_b = $file->layer_thickness_b;
        $this->max_theory_density_b = $file->max_theory_density_b;
        $this->field_wet_density_b = $file->field_wet_density_b;
        $this->relative_compaction_b = $file->relative_compaction_b;
        $this->pass_fail_b = $file->pass_fail_b;

        $this->test_no_c = $file->test_no_c;
        $this->result_mix_id_c = $file->result_mix_id_c;
        $this->location_c = $file->location_c;
        $this->count_period_c = $file->count_period_c;
        $this->material_c = $file->material_c;
        $this->lift_c = $file->lift_c;
        $this->layer_thickness_c = $file->layer_thickness_c;
        $this->max_theory_density_c = $file->max_theory_density_c;
        $this->field_wet_density_c = $file->field_wet_density_c;
        $this->relative_compaction_c = $file->relative_compaction_c;
        $this->pass_fail_c = $file->pass_fail_c;

        $this->test_no_d = $file->test_no_d;
        $this->result_mix_id_d = $file->result_mix_id_d;
        $this->location_d = $file->location_d;
        $this->count_period_d = $file->count_period_d;
        $this->material_d = $file->material_d;
        $this->lift_d = $file->lift_d;
        $this->layer_thickness_d = $file->layer_thickness_d;
        $this->max_theory_density_d = $file->max_theory_density_d;
        $this->field_wet_density_d = $file->field_wet_density_d;
        $this->relative_compaction_d = $file->relative_compaction_d;
        $this->pass_fail_d = $file->pass_fail_d;

        $this->test_no_e = $file->test_no_e;
        $this->result_mix_id_e = $file->result_mix_id_e;
        $this->location_e = $file->location_e;
        $this->count_period_e = $file->count_period_e;
        $this->material_e = $file->material_e;
        $this->lift_e = $file->lift_e;
        $this->layer_thickness_e = $file->layer_thickness_e;
        $this->max_theory_density_e = $file->max_theory_density_e;
        $this->field_wet_density_e = $file->field_wet_density_e;
        $this->relative_compaction_e = $file->relative_compaction_e;
        $this->pass_fail_e = $file->pass_fail_e;
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        $mix_infos = MixInfo::orderBy('id', 'DESC')->get();
        return view('livewire.templates.commercial.view-commercial-component', [
            'projects' => $projects, 'supervisors' => $supervisors, 'mix_infos' => $mix_infos
        ])->layout('livewire.layouts.base');
    }
}
