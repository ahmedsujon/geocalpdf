<?php

namespace App\Http\Livewire\Templates\Commercial;

use App\Models\User;
use App\Models\MixInfo;
use App\Models\Project;
use Livewire\Component;
use App\Models\SubClient;
use App\Models\Commercial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EditCommercialComponent extends Component
{
    public $client_id, $created_by, $client_name, $project_id, $project_number, $date, $user_id, $weather, $office_address, $troxler, $other, $model, $serial_no,
        $density_count, $item_number, $moisture_count, $moisture_equation, $test_mode, $test_method, $compaction_requirement_min, $compaction_requirement_max, $general_location, $remark, $status, $report_status, $file_id, $responsible_person = [];

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
        $this->item_number = $file->item_number;
        $this->moisture_count = $file->moisture_count;
        $this->moisture_equation = $file->moisture_equation;
        $this->report_status = $file->report_status;
        $this->test_mode = $file->test_mode;
        $this->test_method = $file->test_method;
        $this->compaction_requirement_min = $file->compaction_requirement_min;
        $this->compaction_requirement_max = $file->compaction_requirement_max;
        $this->general_location = $file->general_location;
        $this->remark = $file->remark;
        $this->created_by = $file->created_by;

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

        $this->test_no_f = $file->test_no_f;
        $this->result_mix_id_f = $file->result_mix_id_f;
        $this->location_f = $file->location_f;
        $this->count_period_f = $file->count_period_f;
        $this->material_f = $file->material_f;
        $this->lift_f = $file->lift_f;
        $this->layer_thickness_f = $file->layer_thickness_f;
        $this->max_theory_density_f = $file->max_theory_density_f;
        $this->field_wet_density_f = $file->field_wet_density_f;
        $this->relative_compaction_f = $file->relative_compaction_f;
        $this->pass_fail_f = $file->pass_fail_f;
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

    // ==================== get mix information =================
    public function mixInfoA()
    {
        $mixInfoA = MixInfo::where('mix_id', $this->mix_a_id)->first();
        if ($mixInfoA) {
            $this->supplier_a = $mixInfoA->supplier;
            $this->plant_a = $mixInfoA->plant;
            $this->mix_type_a = $mixInfoA->mix_type;
            $this->max_theoretical_density_a = $mixInfoA->max_theoretical_density;
            $this->max_theoretical_specific_gravity_a = $mixInfoA->max_theoretical_specific_gravity;
        } else {
            $this->supplier_a = '';
            $this->plant_a = '';
            $this->mix_type_a = '';
            $this->max_theoretical_density_a = '';
            $this->max_theoretical_specific_gravity_a = '';
        }
    }
    public function resultMixIDA()
    {
        $resultMixIDA = MixInfo::where('mix_id', $this->result_mix_id_a)->first();
        if ($resultMixIDA) {
            $this->max_theory_density_a = $resultMixIDA->max_theoretical_density;
        } else {
            $this->max_theory_density_a = '';
        }
    }
    public function mixInfoB()
    {
        $mixInfoB = MixInfo::where('mix_id', $this->mix_b_id)->first();
        if ($mixInfoB) {
            $this->supplier_b = $mixInfoB->supplier;
            $this->plant_b = $mixInfoB->plant;
            $this->mix_type_b = $mixInfoB->mix_type;
            $this->max_theoretical_density_b = $mixInfoB->max_theoretical_density;
            $this->max_theoretical_specific_gravity_b = $mixInfoB->max_theoretical_specific_gravity;
        } else {
            $this->supplier_b = '';
            $this->plant_b = '';
            $this->mix_type_b = '';
            $this->max_theoretical_density_b = '';
            $this->max_theoretical_specific_gravity_b = '';
        }
    }
    public function resultMixIDB()
    {
        $resultMixIDB = MixInfo::where('mix_id', $this->result_mix_id_b)->first();
        if ($resultMixIDB) {
            $this->max_theory_density_b = $resultMixIDB->max_theoretical_density;
        } else {
            $this->max_theory_density_b = '';
        }
    }
    public function mixInfoC()
    {
        $mixInfoC = MixInfo::where('mix_id', $this->mix_c_id)->first();
        if ($mixInfoC) {
            $this->supplier_c = $mixInfoC->supplier;
            $this->plant_c = $mixInfoC->plant;
            $this->mix_type_c = $mixInfoC->mix_type;
            $this->max_theoretical_density_c = $mixInfoC->max_theoretical_density;
            $this->max_theoretical_specific_gravity_c = $mixInfoC->max_theoretical_specific_gravity;
        } else {
            $this->supplier_c = '';
            $this->plant_c = '';
            $this->mix_type_c = '';
            $this->max_theoretical_density_c = '';
            $this->max_theoretical_specific_gravity_c = '';
        }
    }
    public function resultMixIDC()
    {
        $resultMixIDC = MixInfo::where('mix_id', $this->result_mix_id_c)->first();
        if ($resultMixIDC) {
            $this->max_theory_density_c = $resultMixIDC->max_theoretical_density;
        } else {
            $this->max_theory_density_c = '';
        }
    }
    public function mixInfoD()
    {
        $mixInfoD = MixInfo::where('mix_id', $this->mix_d_id)->first();
        if ($mixInfoD) {
            $this->supplier_d = $mixInfoD->supplier;
            $this->plant_d = $mixInfoD->plant;
            $this->mix_type_d = $mixInfoD->mix_type;
            $this->max_theoretical_density_d = $mixInfoD->max_theoretical_density;
            $this->max_theoretical_specific_gravity_d = $mixInfoD->max_theoretical_specific_gravity;
        } else {
            $this->supplier_d = '';
            $this->plant_d = '';
            $this->mix_type_d = '';
            $this->max_theoretical_density_d = '';
            $this->max_theoretical_specific_gravity_d = '';
        }
    }
    public function resultMixIDD()
    {
        $resultMixIDD = MixInfo::where('mix_id', $this->result_mix_id_d)->first();
        if ($resultMixIDD) {
            $this->max_theory_density_d = $resultMixIDD->max_theoretical_density;
        } else {
            $this->max_theory_density_d = '';
        }
    }
    public function mixInfoE()
    {
        $mixInfoE = MixInfo::where('mix_id', $this->mix_e_id)->first();
        if ($mixInfoE) {
            $this->supplier_e = $mixInfoE->supplier;
            $this->plant_e = $mixInfoE->plant;
            $this->mix_type_e = $mixInfoE->mix_type;
            $this->max_theoretical_density_e = $mixInfoE->max_theoretical_density;
            $this->max_theoretical_specific_gravity_e = $mixInfoE->max_theoretical_specific_gravity;
        } else {
            $this->supplier_e = '';
            $this->plant_e = '';
            $this->mix_type_e = '';
            $this->max_theoretical_density_e = '';
            $this->max_theoretical_specific_gravity_e = '';
        }
    }
    public function resultMixIDE()
    {
        $resultMixIDE = MixInfo::where('mix_id', $this->result_mix_id_e)->first();
        if ($resultMixIDE) {
            $this->max_theory_density_e = $resultMixIDE->max_theoretical_density;
        } else {
            $this->max_theory_density_e = '';
        }
    }

    public function resultMixIDF()
    {
        $resultMixIDE = MixInfo::where('mix_id', $this->result_mix_id_f)->first();
        if ($resultMixIDE) {
            $this->max_theory_density_f = $resultMixIDE->max_theoretical_density;
        } else {
            $this->max_theory_density_f = '';
        }
    }

    // =========================== test result ========================
    public function mixResultInfoA()
    {
        $mixInfoA = MixInfo::where('mix_id', $this->result_mix_id_a)->first();
        if ($mixInfoA) {
            $this->max_theory_density_a = $mixInfoA->max_theoretical_density;
        } else {
            $this->max_theory_density_a = '';
        }
    }
    public function mixResultInfoB()
    {
        $mixInfoB = MixInfo::where('mix_id', $this->result_mix_id_b)->first();
        if ($mixInfoB) {
            $this->max_theory_density_b = $mixInfoB->max_theoretical_density;
        } else {
            $this->max_theory_density_b = '';
        }
    }
    public function mixResultInfoC()
    {
        $mixInfoC = MixInfo::where('mix_id', $this->result_mix_id_c)->first();
        if ($mixInfoC) {
            $this->max_theory_density_c = $mixInfoC->max_theoretical_density;
        } else {
            $this->max_theory_density_c = '';
        }
    }
    public function mixResultInfoD()
    {
        $mixInfoD = MixInfo::where('mix_id', $this->result_mix_id_d)->first();
        if ($mixInfoD) {
            $this->max_theory_density_d = $mixInfoD->max_theoretical_density;
        } else {
            $this->max_theory_density_d = '';
        }
    }
    public function mixResultInfoE()
    {
        $mixInfoE = MixInfo::where('mix_id', $this->result_mix_id_e)->first();
        if ($mixInfoE) {
            $this->max_theory_density_e = $mixInfoE->max_theoretical_density;
        } else {
            $this->max_theory_density_e = '';
        }
    }
    public function mixResultInfoF()
    {
        $mixInfoF = MixInfo::where('mix_id', $this->result_mix_id_f)->first();
        if ($mixInfoF) {
            $this->max_theory_density_f = $mixInfoF->max_theoretical_density;
        } else {
            $this->max_theory_density_f = '';
        }
    }

    // =================== formula calculation =========================
    public function changeTestResultA()
    {
        $mix_info = MixInfo::where('mix_id', $this->result_mix_id_a)->first();
        if ($mix_info) {
            if (!$this->field_wet_density_a) {
                $this->field_wet_density_a = null;
            }
            $value = round(($this->field_wet_density_a / $mix_info->max_theoretical_density) * 100, 1);
            $this->relative_compaction_a = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->relative_compaction_a = '';
        }
    }
    public function changeTestResultB()
    {
        $mix_info = MixInfo::where('mix_id', $this->result_mix_id_b)->first();
        if ($mix_info) {
            if (!$this->field_wet_density_b) {
                $this->field_wet_density_b = null;
            }
            $value = round(($this->field_wet_density_b / $mix_info->max_theoretical_density) * 100, 1);
            $this->relative_compaction_b = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->relative_compaction_b = '';
        }
    }
    public function changeTestResultC()
    {
        $mix_info = MixInfo::where('mix_id', $this->result_mix_id_c)->first();
        if ($mix_info) {
            if (!$this->field_wet_density_c) {
                $this->field_wet_density_c = null;
            }
            $value = round(($this->field_wet_density_c / $mix_info->max_theoretical_density) * 100, 1);
            $this->relative_compaction_c = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->relative_compaction_c = '';
        }
    }
    public function changeTestResultD()
    {
        $mix_info = MixInfo::where('mix_id', $this->result_mix_id_d)->first();
        if ($mix_info) {
            if (!$this->field_wet_density_d) {
                $this->field_wet_density_d = null;
            }
            $value = round(($this->field_wet_density_d / $mix_info->max_theoretical_density) * 100, 1);
            $this->relative_compaction_d = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->relative_compaction_d = '';
        }
    }
    public function changeTestResultE()
    {
        $mix_info = MixInfo::where('mix_id', $this->result_mix_id_e)->first();
        if ($mix_info) {
            if (!$this->field_wet_density_e) {
                $this->field_wet_density_e = null;
            }
            $value = round(($this->field_wet_density_e / $mix_info->max_theoretical_density) * 100, 1);
            $this->relative_compaction_e = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->relative_compaction_e = '';
        }
    }
    public function changeTestResultF()
    {
        $mix_info = MixInfo::where('mix_id', $this->result_mix_id_f)->first();
        if ($mix_info) {
            if (!$this->field_wet_density_f) {
                $this->field_wet_density_f = null;
            }
            $value = round(($this->field_wet_density_f / $mix_info->max_theoretical_density) * 100, 1);
            $this->relative_compaction_f = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
        } else {
            $this->relative_compaction_f = '';
        }
    }
    // ====================================
    public function resultMixA()
    {
        $this->resultMixIDA();
        $this->changeTestResultA();
    }
    public function resultMixB()
    {
        $this->resultMixIDB();
        $this->changeTestResultB();
    }
    public function resultMixC()
    {
        $this->resultMixIDC();
        $this->changeTestResultC();
    }
    public function resultMixD()
    {
        $this->resultMixIDD();
        $this->changeTestResultD();
    }
    public function resultMixE()
    {
        $this->resultMixIDE();
        $this->changeTestResultE();
    }
    public function resultMixF()
    {
        $this->resultMixIDF();
        $this->changeTestResultF();
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required',
            'date' => 'required',
            'user_id' => 'required',
            'general_location' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
            'report_status' => 'required',
            'compaction_requirement_min' => 'required',
            'compaction_requirement_max' => 'required'
        ]);
    }

    public function updateData()
    {
        $this->validate([
            'project_id' => 'required',
            'date' => 'required',
            'user_id' => 'required',
            'general_location' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
            'report_status' => 'required',
            'compaction_requirement_min' => 'required',
            'compaction_requirement_max' => 'required'
        ], [
            'project_id.required' => 'Project Name is required',
            'user_id.required' => 'Technician name is required',
        ]);

        $data = new Commercial();
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
        $data->serial_no = $this->serial_no;
        $data->density_count = $this->density_count;
        $data->item_number = $this->item_number;
        $data->moisture_count = $this->moisture_count;
        $data->moisture_equation = $this->moisture_equation;
        $data->report_status = $this->report_status;
        $data->test_mode = $this->test_mode;
        $data->test_method = $this->test_method;
        $data->compaction_requirement_min = $this->compaction_requirement_min;
        $data->compaction_requirement_max = $this->compaction_requirement_max;
        $data->general_location = $this->general_location;

        // mix information
        $data->mix_a_id = $this->mix_a_id;
        $data->supplier_a = $this->supplier_a;
        $data->plant_a = $this->plant_a;
        $data->mix_type_a = $this->mix_type_a;
        $data->max_theoretical_density_a = $this->max_theoretical_density_a;
        $data->max_theoretical_specific_gravity_a = $this->max_theoretical_specific_gravity_a;

        $data->mix_b_id = $this->mix_b_id;
        $data->supplier_b = $this->supplier_b;
        $data->plant_b = $this->plant_b;
        $data->mix_type_b = $this->mix_type_b;
        $data->max_theoretical_density_b = $this->max_theoretical_density_b;
        $data->max_theoretical_specific_gravity_b = $this->max_theoretical_specific_gravity_b;

        $data->mix_c_id = $this->mix_c_id;
        $data->supplier_c = $this->supplier_c;
        $data->plant_c = $this->plant_c;
        $data->mix_type_c = $this->mix_type_c;
        $data->max_theoretical_density_c = $this->max_theoretical_density_c;
        $data->max_theoretical_specific_gravity_c = $this->max_theoretical_specific_gravity_c;

        $data->mix_d_id = $this->mix_d_id;
        $data->supplier_d = $this->supplier_d;
        $data->plant_d = $this->plant_d;
        $data->mix_type_d = $this->mix_type_d;
        $data->max_theoretical_density_d = $this->max_theoretical_density_d;
        $data->max_theoretical_specific_gravity_d = $this->max_theoretical_specific_gravity_d;

        $data->mix_e_id = $this->mix_e_id;
        $data->supplier_e = $this->supplier_e;
        $data->plant_e = $this->plant_e;
        $data->mix_type_e = $this->mix_type_e;
        $data->max_theoretical_density_e = $this->max_theoretical_density_e;
        $data->max_theoretical_specific_gravity_e = $this->max_theoretical_specific_gravity_e;
        // test results
        $data->test_no_a = $this->test_no_a;
        $data->result_mix_id_a = $this->result_mix_id_a;
        $data->location_a = $this->location_a;
        $data->count_period_a = $this->count_period_a;
        $data->material_a = $this->material_a;
        $data->lift_a = $this->lift_a;
        $data->layer_thickness_a = $this->layer_thickness_a;
        $data->max_theory_density_a = $this->max_theory_density_a;
        $data->field_wet_density_a = $this->field_wet_density_a;
        $data->relative_compaction_a = $this->relative_compaction_a;
        $data->pass_fail_a = $this->pass_fail_a;

        $data->test_no_b = $this->test_no_b;
        $data->result_mix_id_b = $this->result_mix_id_b;
        $data->location_b = $this->location_b;
        $data->count_period_b = $this->count_period_b;
        $data->material_b = $this->material_b;
        $data->lift_b = $this->lift_b;
        $data->layer_thickness_b = $this->layer_thickness_b;
        $data->max_theory_density_b = $this->max_theory_density_b;
        $data->field_wet_density_b = $this->field_wet_density_b;
        $data->relative_compaction_b = $this->relative_compaction_b;
        $data->pass_fail_b = $this->pass_fail_b;

        $data->test_no_c = $this->test_no_c;
        $data->result_mix_id_c = $this->result_mix_id_c;
        $data->location_c = $this->location_c;
        $data->count_period_c = $this->count_period_c;
        $data->material_c = $this->material_c;
        $data->lift_c = $this->lift_c;
        $data->layer_thickness_c = $this->layer_thickness_c;
        $data->max_theory_density_c = $this->max_theory_density_c;
        $data->field_wet_density_c = $this->field_wet_density_c;
        $data->relative_compaction_c = $this->relative_compaction_c;
        $data->pass_fail_c = $this->pass_fail_c;

        $data->test_no_d = $this->test_no_d;
        $data->result_mix_id_d = $this->result_mix_id_d;
        $data->location_d = $this->location_d;
        $data->count_period_d = $this->count_period_d;
        $data->material_d = $this->material_d;
        $data->lift_d = $this->lift_d;
        $data->layer_thickness_d = $this->layer_thickness_d;
        $data->max_theory_density_d = $this->max_theory_density_d;
        $data->field_wet_density_d = $this->field_wet_density_d;
        $data->relative_compaction_d = $this->relative_compaction_d;
        $data->pass_fail_d = $this->pass_fail_d;

        $data->test_no_e = $this->test_no_e;
        $data->result_mix_id_e = $this->result_mix_id_e;
        $data->location_e = $this->location_e;
        $data->count_period_e = $this->count_period_e;
        $data->material_e = $this->material_e;
        $data->lift_e = $this->lift_e;
        $data->layer_thickness_e = $this->layer_thickness_e;
        $data->max_theory_density_e = $this->max_theory_density_e;
        $data->field_wet_density_e = $this->field_wet_density_e;
        $data->relative_compaction_e = $this->relative_compaction_e;
        $data->pass_fail_e = $this->pass_fail_e;

        $data->test_no_f = $this->test_no_f;
        $data->result_mix_id_f = $this->result_mix_id_f;
        $data->location_f = $this->location_f;
        $data->count_period_f = $this->count_period_f;
        $data->material_f = $this->material_f;
        $data->lift_f = $this->lift_f;
        $data->layer_thickness_f = $this->layer_thickness_f;
        $data->max_theory_density_f = $this->max_theory_density_f;
        $data->field_wet_density_f = $this->field_wet_density_f;
        $data->relative_compaction_f = $this->relative_compaction_f;
        $data->pass_fail_f = $this->pass_fail_f;

        $data->status = $this->status;
        if ($this->status == 'sentToClient') {
            $data->send_to_client = 1;
        }

        $data->remark = $this->remark;
        $data->created_by = Auth::user()->id;
        $data->responsible_person = json_encode($this->responsible_person);
        $data->save();

        //send Mail
        if ($this->responsible_person) {
            $persons = $this->responsible_person;
            $f_id = $data->id;
            $auth_user_id = Auth::user()->id;
            dispatch(function () use ($persons, $f_id, $auth_user_id) {
                foreach ($persons as $key => $re_id) {

                    $select_project = Commercial::find($f_id);
                    if ($select_project->send_to_client == 1) {
                        $sub_client = SubClient::find($re_id);
                        $mailData['email'] = $sub_client->email;
                    } else {
                        $select_user = User::find($re_id);
                        $mailData['email'] = $select_user->email;
                    }
                    $user = User::find($auth_user_id);
                    $mailData['name'] = $user->name;
                    $mailData['role_id'] = $user->role_id;
                    $mailData['id'] = $f_id;
                    $mailData['subject'] = 'New file waiting for your review';
                    Mail::send('emails.mail_commercial', $mailData, function ($message) use ($mailData) {
                        $message->to($mailData['email'])
                            ->subject($mailData['subject']);
                    });
                }
            });
        }

        session()->flash('message', 'Commercial file created successfully');
        return redirect()->route('template.commercial');
    }
    public function render()
    {
        if ($this->compaction_requirement_max < $this->relative_compaction_a || $this->compaction_requirement_min > $this->relative_compaction_a) {
            $this->pass_fail_a = 'Fail';
        } elseif ($this->compaction_requirement_max > $this->relative_compaction_a || $this->compaction_requirement_min < $this->relative_compaction_a) {
            $this->pass_fail_a = 'Pass';
        } else {
            $this->pass_fail_a = '';
        }
        if ($this->compaction_requirement_max < $this->relative_compaction_b || $this->compaction_requirement_min > $this->relative_compaction_b) {
            $this->pass_fail_b = 'Fail';
        } elseif ($this->compaction_requirement_max > $this->relative_compaction_b || $this->compaction_requirement_min < $this->relative_compaction_b) {
            $this->pass_fail_b = 'Pass';
        } else {
            $this->pass_fail_b = '';
        }
        if ($this->compaction_requirement_max < $this->relative_compaction_c || $this->compaction_requirement_min > $this->relative_compaction_c) {
            $this->pass_fail_c = 'Fail';
        } elseif ($this->compaction_requirement_max > $this->relative_compaction_c || $this->compaction_requirement_min < $this->relative_compaction_c) {
            $this->pass_fail_c = 'Pass';
        } else {
            $this->pass_fail_c = '';
        }
        if ($this->compaction_requirement_max < $this->relative_compaction_d || $this->compaction_requirement_min > $this->relative_compaction_d) {
            $this->pass_fail_d = 'Fail';
        } elseif ($this->compaction_requirement_max > $this->relative_compaction_d || $this->compaction_requirement_min < $this->relative_compaction_d) {
            $this->pass_fail_d = 'Pass';
        } else {
            $this->pass_fail_d = '';
        }
        if ($this->compaction_requirement_max < $this->relative_compaction_e || $this->compaction_requirement_min > $this->relative_compaction_e) {
            $this->pass_fail_e = 'Fail';
        } elseif ($this->compaction_requirement_max > $this->relative_compaction_e || $this->compaction_requirement_min < $this->relative_compaction_e) {
            $this->pass_fail_e = 'Pass';
        } else {
            $this->pass_fail_e = '';
        }
        if ($this->compaction_requirement_max < $this->relative_compaction_f || $this->compaction_requirement_min > $this->relative_compaction_f) {
            $this->pass_fail_f = 'Fail';
        } elseif ($this->compaction_requirement_max > $this->relative_compaction_f || $this->compaction_requirement_min < $this->relative_compaction_f) {
            $this->pass_fail_f = 'Pass';
        } else {
            $this->pass_fail_f = '';
        }

        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        $mix_infos = MixInfo::orderBy('id', 'DESC')->get();
        return view('livewire.templates.commercial.edit-commercial-component', [
            'projects' => $projects, 'supervisors' => $supervisors, 'mix_infos' => $mix_infos
        ])->layout('livewire.layouts.base');
    }
}
