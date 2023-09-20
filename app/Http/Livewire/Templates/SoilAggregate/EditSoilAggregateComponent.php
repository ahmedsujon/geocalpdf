<?php

namespace App\Http\Livewire\Templates\SoilAggregate;

use App\Models\Proctor;
use App\Models\Project;
use App\Models\SoilAggregate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EditSoilAggregateComponent extends Component
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

    // get project information
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

    // ======================= get proctor information ============================
    public function proctorInfoA()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_a)->first();
        if ($data) {
            $this->description_a = $data->material_description;
            $this->test_method_a = $data->test_method;
            $this->max_dry_density_a = $data->max_dry_density;
            $this->optimum_moisture_a = $data->optimum_moisture;
        } else {
            $this->description_a = '';
            $this->test_method_a = '';
            $this->max_dry_density_a = '';
            $this->optimum_moisture_a = '';
        }
    }
    public function proctorInfoB()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_b)->first();

        if ($data) {
            $this->description_b = $data->material_description;
            $this->test_method_b = $data->test_method;
            $this->max_dry_density_b = $data->max_dry_density;
            $this->optimum_moisture_b = $data->optimum_moisture;
        } else {
            $this->description_b = '';
            $this->test_method_b = '';
            $this->max_dry_density_b = '';
            $this->optimum_moisture_b = '';
        }
    }
    public function proctorInfoC()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_c)->first();

        if ($data) {
            $this->description_c = $data->material_description;
            $this->test_method_c = $data->test_method;
            $this->max_dry_density_c = $data->max_dry_density;
            $this->optimum_moisture_c = $data->optimum_moisture;
        } else {
            $this->description_c = '';
            $this->test_method_c = '';
            $this->max_dry_density_c = '';
            $this->optimum_moisture_c = '';
        }
    }
    public function proctorInfoD()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_d)->first();

        if ($data) {
            $this->description_d = $data->material_description;
            $this->test_method_d = $data->test_method;
            $this->max_dry_density_d = $data->max_dry_density;
            $this->optimum_moisture_d = $data->optimum_moisture;
        } else {
            $this->description_d = '';
            $this->test_method_d = '';
            $this->max_dry_density_d = '';
            $this->optimum_moisture_d = '';
        }
    }
    public function proctorInfoE()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_e)->first();

        if ($data) {
            $this->description_e = $data->material_description;
            $this->test_method_e = $data->test_method;
            $this->max_dry_density_e = $data->max_dry_density;
            $this->optimum_moisture_e = $data->optimum_moisture;
        } else {
            $this->description_e = '';
            $this->test_method_e = '';
            $this->max_dry_density_e = '';
            $this->optimum_moisture_e = '';
        }
    }
    public function proctorInfoF()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_e)->first();

        if ($data) {
            $this->description_f = $data->material_description;
            $this->test_method_f = $data->test_method;
            $this->max_dry_density_f = $data->max_dry_density;
            $this->optimum_moisture_f = $data->optimum_moisture;
        } else {
            $this->description_f = '';
            $this->test_method_f = '';
            $this->max_dry_density_f = '';
            $this->optimum_moisture_f = '';
        }
    }
    // ======================= Test Results ============================
    public function changeTestResultA()
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id_a)->first();
        if ($proctor) {
            if (!$this->dry_density_a) {
                $this->dry_density_a = null;
            }
            $value = round(($this->dry_density_a / $proctor->max_dry_density) * 100, 1);
            $this->percent_comp_a = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->percent_comp_a = 0;
        }
    }

    public function changeTestResultB()
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id_b)->first();
        if ($proctor) {
            if (!$this->dry_density_b) {
                $this->dry_density_b = null;
            }
            $value = round(($this->dry_density_b / $proctor->max_dry_density) * 100, 1);
            $this->percent_comp_b = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->percent_comp_b = 0;
        }
    }
    public function changeTestResultC()
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id_c)->first();
        if ($proctor) {
            if (!$this->dry_density_c) {
                $this->dry_density_c = null;
            }
            $value = round(($this->dry_density_c / $proctor->max_dry_density) * 100, 1);
            $this->percent_comp_c = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->percent_comp_c = 0;
        }
    }
    public function changeTestResultD()
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id_d)->first();
        if ($proctor) {
            if (!$this->dry_density_d) {
                $this->dry_density_d = null;
            }
            $value = round(($this->dry_density_d / $proctor->max_dry_density) * 100, 1);
            $this->percent_comp_d = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->percent_comp_d = 0;
        }
    }
    public function changeTestResultE()
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id_e)->first();
        if ($proctor) {
            if (!$this->dry_density_e) {
                $this->dry_density_e = null;
            }
            $value = round(($this->dry_density_e / $proctor->max_dry_density) * 100, 1);
            $this->percent_comp_e = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->percent_comp_e = 0;
        }
    }
    public function changeTestResultF()
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id_f)->first();
        if ($proctor) {
            if (!$this->dry_density_f) {
                $this->dry_density_f = null;
            }
            $value = round(($this->dry_density_f / $proctor->max_dry_density) * 100, 1);
            $this->percent_comp_f = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->percent_comp_f = 0;
        }
    }
    public function resultMixA()
    {
        $this->changeTestResultA();
    }
    public function resultMixB()
    {
        $this->changeTestResultB();
    }
    public function resultMixC()
    {
        $this->changeTestResultC();
    }
    public function resultMixD()
    {
        $this->changeTestResultD();
    }
    public function resultMixE()
    {
        $this->changeTestResultE();
    }
    public function resultMixF()
    {
        $this->changeTestResultF();
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'compaction_requirement' => 'required',
            'general_info' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
            'observation' => 'required',
        ]);
    }

    public function updateData()
    {
        $this->validate([
            'project_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'compaction_requirement' => 'required',
            'general_info' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
            'observation' => 'required',
        ]);

        $data = new SoilAggregate();
        $data->project_id = $this->project_id;
        $data->client_id = $this->client_id;
        $data->project_number = $this->project_number;
        $data->date = $this->date;
        $data->user_id = $this->user_id;
        $data->weather = $this->weather;
        $data->office_address = $this->office_address;
        $data->troxler = $this->troxler;
        $data->other = $this->other;
        $data->model = $this->model;
        $data->serial_number = $this->serial_number;
        $data->density_count = $this->density_count;
        $data->moisture_count = $this->moisture_count;
        $data->moisture_equation = $this->moisture_equation;
        $data->test_mode = $this->test_mode;
        $data->main_test_method = $this->main_test_method;
        $data->compaction_requirement = $this->compaction_requirement;
        $data->requirement_plus = $this->requirement_plus;
        $data->requirement_minus = $this->requirement_minus;
        $data->general_info = $this->general_info;
        $data->observation = $this->observation;

        // Proctor Information
        $data->proctor_id_a = $this->proctor_id_a;
        $data->description_a = $this->description_a;
        $data->test_method_a = $this->test_method_a;
        $data->max_dry_density_a = $this->max_dry_density_a;
        $data->optimum_moisture_a = $this->optimum_moisture_a;

        $data->proctor_id_b = $this->proctor_id_b;
        $data->description_b = $this->description_b;
        $data->test_method_b = $this->test_method_b;
        $data->max_dry_density_b = $this->max_dry_density_b;
        $data->optimum_moisture_b = $this->optimum_moisture_b;

        $data->proctor_id_c = $this->proctor_id_c;
        $data->description_c = $this->description_c;
        $data->test_method_c = $this->test_method_c;
        $data->max_dry_density_c = $this->max_dry_density_c;
        $data->optimum_moisture_c = $this->optimum_moisture_c;

        $data->proctor_id_d = $this->proctor_id_d;
        $data->description_d = $this->description_d;
        $data->test_method_d = $this->test_method_d;
        $data->max_dry_density_d = $this->max_dry_density_d;
        $data->optimum_moisture_d = $this->optimum_moisture_d;

        $data->proctor_id_e = $this->proctor_id_e;
        $data->description_e = $this->description_e;
        $data->test_method_e = $this->test_method_e;
        $data->max_dry_density_e = $this->max_dry_density_e;
        $data->optimum_moisture_e = $this->optimum_moisture_e;

        // Test Results
        $data->result_proctor_id_a = $this->result_proctor_id_a;
        $data->test_num_a = $this->test_num_a;
        $data->location_a = $this->location_a;
        $data->test_dept_a = $this->test_dept_a;
        $data->elev_test_a = $this->elev_test_a;
        $data->wet_density_a = $this->wet_density_a;
        $data->dry_density_a = $this->dry_density_a;
        $data->moisture_content_a = $this->moisture_content_a;
        $data->percent_comp_a = $this->percent_comp_a;
        $data->comments_a = $this->comments_a;
        $data->material_a = $this->material_a;

        $data->result_proctor_id_b = $this->result_proctor_id_b;
        $data->test_num_b = $this->test_num_b;
        $data->location_b = $this->location_b;
        $data->test_dept_b = $this->test_dept_b;
        $data->elev_test_b = $this->elev_test_b;
        $data->wet_density_b = $this->wet_density_b;
        $data->dry_density_b = $this->dry_density_b;
        $data->moisture_content_b = $this->moisture_content_b;
        $data->percent_comp_b = $this->percent_comp_b;
        $data->comments_b = $this->comments_b;
        $data->material_b = $this->material_b;

        $data->result_proctor_id_c = $this->result_proctor_id_c;
        $data->test_num_c = $this->test_num_c;
        $data->location_c = $this->location_c;
        $data->test_dept_c = $this->test_dept_c;
        $data->elev_test_c = $this->elev_test_c;
        $data->wet_density_c = $this->wet_density_c;
        $data->dry_density_c = $this->dry_density_c;
        $data->moisture_content_c = $this->moisture_content_c;
        $data->percent_comp_c = $this->percent_comp_c;
        $data->comments_c = $this->comments_c;
        $data->material_c = $this->material_a;

        $data->result_proctor_id_d = $this->result_proctor_id_d;
        $data->test_num_d = $this->test_num_d;
        $data->location_d = $this->location_d;
        $data->test_dept_d = $this->test_dept_d;
        $data->elev_test_d = $this->elev_test_d;
        $data->wet_density_d = $this->wet_density_d;
        $data->dry_density_d = $this->dry_density_d;
        $data->moisture_content_d = $this->moisture_content_d;
        $data->percent_comp_d = $this->percent_comp_d;
        $data->comments_d = $this->comments_d;
        $data->material_d = $this->material_d;

        $data->result_proctor_id_e = $this->result_proctor_id_e;
        $data->test_num_e = $this->test_num_e;
        $data->location_e = $this->location_e;
        $data->test_dept_e = $this->test_dept_e;
        $data->elev_test_e = $this->elev_test_e;
        $data->wet_density_e = $this->wet_density_e;
        $data->dry_density_e = $this->dry_density_e;
        $data->moisture_content_e = $this->moisture_content_e;
        $data->percent_comp_e = $this->percent_comp_e;
        $data->comments_e = $this->comments_e;
        $data->material_e = $this->material_e;

        $data->result_proctor_id_f = $this->result_proctor_id_f;
        $data->test_num_f = $this->test_num_f;
        $data->location_f = $this->location_f;
        $data->test_dept_f = $this->test_dept_f;
        $data->elev_test_f = $this->elev_test_f;
        $data->wet_density_f = $this->wet_density_f;
        $data->dry_density_f = $this->dry_density_f;
        $data->moisture_content_f = $this->moisture_content_f;
        $data->percent_comp_f = $this->percent_comp_f;
        $data->comments_f = $this->comments_f;
        $data->material_f = $this->material_f;

        if (Auth::user()->role_id == '1') {
            $data['status'] = "SuperAdminCreated";
        } elseif (Auth::user()->role_id == '2') {
            $data['status'] = 'ProjectEngineerCreated';
        } elseif (Auth::user()->role_id == '3') {
            $data['status'] = 'ClerkCreated';
        } elseif (Auth::user()->role_id == '4') {
            $data['status'] = 'SupervisorCreated';
        } else {
            $data['status'] = 'FTCreated';
        }

        $data->remark = $this->remark;
        $data->created_by = Auth::user()->id;
        $data->responsible_person = json_encode($this->responsible_person);
        $data->save();

        //send Mail
        if ($this->responsible_person) {
            $persons = $this->responsible_person;
            $f_id = $data->id;
            dispatch(function () use ($persons, $f_id) {
                foreach ($persons as $key => $re_id) {
                    $user = User::find($re_id);
                    $mailData['email'] = $user->email;
                    $mailData['name'] = $user->name;
                    $mailData['role_id'] = $user->role_id;
                    $mailData['id'] = $f_id;
                    $mailData['subject'] = 'New file waiting for your review';
                    Mail::send('emails.soil_aggregate', $mailData, function ($message) use ($mailData) {
                        $message->to($mailData['email'])
                            ->subject($mailData['subject']);
                    });
                }
            });
        }

        session()->flash('message', 'File created successfully');
        return redirect()->route('template.soil.aggregate');
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();
        $proctors = Proctor::orderBy('id', 'DESC')->get();
        return view('livewire.templates.soil-aggregate.edit-soil-aggregate-component', ['projects' => $projects, 'supervisors' => $supervisors, 'proctors' => $proctors])->layout('livewire.layouts.base');
    }
}
