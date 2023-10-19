<?php

namespace App\Http\Livewire\Templates\SoilAggregate;

use App\Models\Proctor;
use App\Models\Project;
use App\Models\SoilAggregate;
use App\Models\User;
use Livewire\Component;

class ViewSoilAggregateComponent extends Component
{
    public $project_id, $client_id, $project_number, $date, $user_id, $weather, $troxler, $other, $model, $serial_number, $density_count, $moisture_count, $moisture_equation, $compaction_requirement, $requirement_plus, $requirement_minus, $general_info, $remark, $created_by, $status, $test_mode, $main_test_method, $observation, $office_address, $client_name, $responsible_person = [], $file_id;

    public $proctor_id_a, $description_a, $test_method_a, $max_dry_density_a, $optimum_moisture_a, $proctor_info_a;
    public $proctor_id_b, $description_b, $test_method_b, $max_dry_density_b, $optimum_moisture_b, $proctor_info_b;
    public $proctor_id_c, $description_c, $test_method_c, $max_dry_density_c, $optimum_moisture_c, $proctor_info_c;
    public $proctor_id_d, $description_d, $test_method_d, $max_dry_density_d, $optimum_moisture_d, $proctor_info_d;
    public $proctor_id_e, $description_e, $test_method_e, $max_dry_density_e, $optimum_moisture_e, $proctor_info_e;
    public $proctor_id_f, $description_f, $test_method_f, $max_dry_density_f, $optimum_moisture_f, $proctor_info_f;

    public $test_results_a, $test_num_a, $location_a, $test_dept_a, $elev_test_a, $wet_density_a, $dry_density_a, $moisture_content_a, $percent_comp_a, $comments_a, $result_proctor_id_a, $material_a;
    public $test_results_b, $test_num_b, $location_b, $test_dept_b, $elev_test_b, $wet_density_b, $dry_density_b, $moisture_content_b, $percent_comp_b, $comments_b, $result_proctor_id_b, $material_b;
    public $test_results_c, $test_num_c, $location_c, $test_dept_c, $elev_test_c, $wet_density_c, $dry_density_c, $moisture_content_c, $percent_comp_c, $comments_c, $result_proctor_id_c, $material_c;
    public $test_results_d, $test_num_d, $location_d, $test_dept_d, $elev_test_d, $wet_density_d, $dry_density_d, $moisture_content_d, $percent_comp_d, $comments_d, $result_proctor_id_d, $material_d;
    public $test_results_e, $test_num_e, $location_e, $test_dept_e, $elev_test_e, $wet_density_e, $dry_density_e, $moisture_content_e, $percent_comp_e, $comments_e, $result_proctor_id_e, $material_e;
    public $test_results_f, $test_num_f, $location_f, $test_dept_f, $elev_test_f, $wet_density_f, $dry_density_f, $moisture_content_f, $percent_comp_f, $comments_f, $result_proctor_id_f, $material_f;

    public function mount($file_id)
    {
        $file = SoilAggregate::where('id', $file_id)->first();
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
        $this->serial_number = $file->serial_number;
        $this->density_count = $file->density_count;
        $this->moisture_count = $file->moisture_count;
        $this->moisture_equation = $file->moisture_equation;
        $this->observation = $file->observation;
        $this->status = $file->status;
        $this->test_mode = $file->test_mode;
        $this->main_test_method = $file->main_test_method;
        $this->compaction_requirement = $file->compaction_requirement;
        $this->requirement_plus = $file->requirement_plus;
        $this->requirement_minus = $file->requirement_minus;
        $this->general_info = $file->general_info;
        $this->remark = $file->remark;

        // Proctor Information
        $this->proctor_id_a = $file->proctor_id_a;
        $this->description_a = $file->description_a;
        $this->test_method_a = $file->test_method_a;
        $this->max_dry_density_a = $file->max_dry_density_a;
        $this->optimum_moisture_a = $file->optimum_moisture_a;

        $this->proctor_id_b = $file->proctor_id_b;
        $this->description_b = $file->description_b;
        $this->test_method_b = $file->test_method_b;
        $this->max_dry_density_b = $file->max_dry_density_b;
        $this->optimum_moisture_b = $file->optimum_moisture_b;

        $this->proctor_id_c = $file->proctor_id_c;
        $this->description_c = $file->description_c;
        $this->test_method_c = $file->test_method_c;
        $this->max_dry_density_c = $file->max_dry_density_c;
        $this->optimum_moisture_c = $file->optimum_moisture_c;

        $this->proctor_id_d = $file->proctor_id_d;
        $this->description_d = $file->description_d;
        $this->test_method_d = $file->test_method_d;
        $this->max_dry_density_d = $file->max_dry_density_d;
        $this->optimum_moisture_d = $file->optimum_moisture_d;

        $this->proctor_id_e = $file->proctor_id_e;
        $this->description_e = $file->description_e;
        $this->test_method_e = $file->test_method_e;
        $this->max_dry_density_e = $file->max_dry_density_e;
        $this->optimum_moisture_e = $file->optimum_moisture_e;

        // Test Results
        $this->result_proctor_id_a = $file->result_proctor_id_a;
        $this->test_num_a = $file->test_num_a;
        $this->location_a = $file->location_a;
        $this->test_dept_a = $file->test_dept_a;
        $this->elev_test_a = $file->elev_test_a;
        $this->wet_density_a = $file->wet_density_a;
        $this->dry_density_a = $file->dry_density_a;
        $this->moisture_content_a = $file->moisture_content_a;
        $this->percent_comp_a = $file->percent_comp_a;
        $this->comments_a = $file->comments_a;
        $this->material_a = $file->material_a;

        $this->result_proctor_id_b = $file->result_proctor_id_b;
        $this->test_num_b = $file->test_num_b;
        $this->location_b = $file->location_b;
        $this->test_dept_b = $file->test_dept_b;
        $this->elev_test_b = $file->elev_test_b;
        $this->wet_density_b = $file->wet_density_b;
        $this->dry_density_b = $file->dry_density_b;
        $this->moisture_content_b = $file->moisture_content_b;
        $this->percent_comp_b = $file->percent_comp_b;
        $this->comments_b = $file->comments_b;
        $this->material_b = $file->material_b;

        $this->result_proctor_id_c = $file->result_proctor_id_c;
        $this->test_num_c = $file->test_num_c;
        $this->location_c = $file->location_c;
        $this->test_dept_c = $file->test_dept_c;
        $this->elev_test_c = $file->elev_test_c;
        $this->wet_density_c = $file->wet_density_c;
        $this->dry_density_c = $file->dry_density_c;
        $this->moisture_content_c = $file->moisture_content_c;
        $this->percent_comp_c = $file->percent_comp_c;
        $this->comments_c = $file->comments_c;
        $this->material_c = $file->material_a;

        $this->result_proctor_id_d = $file->result_proctor_id_d;
        $this->test_num_d = $file->test_num_d;
        $this->location_d = $file->location_d;
        $this->test_dept_d = $file->test_dept_d;
        $this->elev_test_d = $file->elev_test_d;
        $this->wet_density_d = $file->wet_density_d;
        $this->dry_density_d = $file->dry_density_d;
        $this->moisture_content_d = $file->moisture_content_d;
        $this->percent_comp_d = $file->percent_comp_d;
        $this->comments_d = $file->comments_d;
        $this->material_d = $file->material_d;

        $this->result_proctor_id_e = $file->result_proctor_id_e;
        $this->test_num_e = $file->test_num_e;
        $this->location_e = $file->location_e;
        $this->test_dept_e = $file->test_dept_e;
        $this->elev_test_e = $file->elev_test_e;
        $this->wet_density_e = $file->wet_density_e;
        $this->dry_density_e = $file->dry_density_e;
        $this->moisture_content_e = $file->moisture_content_e;
        $this->percent_comp_e = $file->percent_comp_e;
        $this->comments_e = $file->comments_e;
        $this->material_e = $file->material_e;

        $this->result_proctor_id_f = $file->result_proctor_id_f;
        $this->test_num_f = $file->test_num_f;
        $this->location_f = $file->location_f;
        $this->test_dept_f = $file->test_dept_f;
        $this->elev_test_f = $file->elev_test_f;
        $this->wet_density_f = $file->wet_density_f;
        $this->dry_density_f = $file->dry_density_f;
        $this->moisture_content_f = $file->moisture_content_f;
        $this->percent_comp_f = $file->percent_comp_f;
        $this->comments_f = $file->comments_f;
        $this->material_f = $file->material_f;
    }
    
    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        $proctors = Proctor::orderBy('id', 'DESC')->get();
        return view('livewire.templates.soil-aggregate.view-soil-aggregate-component', ['projects' => $projects, 'supervisors' => $supervisors, 'proctors' => $proctors])->layout('livewire.layouts.base');
    }
}
