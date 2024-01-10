<?php

namespace App\Http\Livewire\Templates\Cdot;

use App\Models\FieldDensityCdot;
use App\Models\Project;
use App\Models\SubClient;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EditCdotComponent extends Component
{
    public $user_id, $project_id, $client_id, $project_number, $client_name, $geocal_project_num, $geocal_project_name, $cdot_project_name, $weather, $date, $office_address, $test_method, $troxler, $other, $model, $serial_no, 
    $density_std_count, $item_number, $moisture_std_count, $moisture_equations, $density_count, $moisture_count, $created_by, $remark, $responsible_person = [], $file_id, $status;

    public $project_no, $region, $contract_id, $project_location, $form_no, $grading, $taster_id, $sampled_by;

    public $company_name, $gauge_id, $test_id, $ia_id, $test_data_a, $test_data_b, $test_data_c, $test_data_d, $test_data_e, $test_data_f, $test_data_g, $test_data_h, $test_data_i, $test_data_j;

    public $sample_id_a, $sample_id_b, $sample_id_c, $sample_id_d, $sample_id_e, $test_date_a, $test_date_b, $test_date_c, $test_date_d, $test_date_e, $standard_count_a, $standard_count_b, $standard_count_c, $standard_count_d, $standard_count_e, $daily_rice_a, $daily_rice_b, $daily_rice_c, $daily_rice_d, $daily_rice_e, $station_a, $station_b, $station_c, $station_d, $station_e, $offset_a, $offset_b, $offset_c, $offset_d, $offset_e, $course_a, $course_b, $course_c, $course_d, $course_e;

    public $wet_density_a_a, $wet_density_a_b, $wet_density_a_c, $wet_density_a_d,  $wet_density_a_e, $wet_density_b_a, $wet_density_b_b, $wet_density_b_c,  $wet_density_b_d, $wet_density_b_e, $wet_density_c_a, $wet_density_c_b, $wet_density_c_c, $wet_density_c_d, $wet_density_c_e, $wet_density_d_a, $wet_density_d_b, $wet_density_d_c, $wet_density_d_d,  $wet_density_d_e;

    public $wet_densities_a, $wet_densities_b, $wet_densities_c, $wet_densities_d, $wet_densities_e, $average_wet_density_a, $average_wet_density_b, $average_wet_density_c, $average_wet_density_d, $average_wet_density_e, $correction_factor_a, $correction_factor_b, $correction_factor_c, $correction_factor_d, $correction_factor_e, $adjusted_wet_a, $adjusted_wet_b, $adjusted_wet_c, $adjusted_wet_d, $adjusted_wet_e, $ave_daily_rice_a, $ave_daily_rice_b, $ave_daily_rice_c, $ave_daily_rice_d, $ave_daily_rice_e, $compaction_a, $compaction_b, $compaction_c, $compaction_d, $compaction_e;

    // Formula Calculation
    public $wet_densitiesAA = [];
    public function calculateAA()
    {
        $this->wet_densities_a = round(array_sum($this->wet_densitiesAA), 1);
        $this->average_wet_density_a = round($this->wet_densities_a / count($this->wet_densitiesAA), 1);
        $this->adjusted_wet_a = round($this->average_wet_density_a + (float)$this->correction_factor_a, 1);
        $this->compactionAAA();
    }
    public function calculateAAA()
    {
        $value = round((float)$this->daily_rice_a * 62.4, 1);
        $this->ave_daily_rice_a = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
    }
    public function compactionAAA()
    {
        $this->compaction_a = round(($this->adjusted_wet_a / $this->ave_daily_rice_a) * 100, 1);
    }
    // Formula Calculation
    public $wet_densitiesBB = [];
    public function calculateBB()
    {
        $this->wet_densities_b = round(array_sum($this->wet_densitiesBB), 1);
        $this->average_wet_density_b = round($this->wet_densities_b / count($this->wet_densitiesBB), 1);
        $this->adjusted_wet_b = round($this->average_wet_density_b + (float)$this->correction_factor_b, 1);
    }
    public function calculateBBB()
    {
        $value = round((float)$this->daily_rice_a * 62.4, 1);
        $this->ave_daily_rice_b = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
    }
    public function compactionBBB()
    {
        $this->compaction_b = round(($this->adjusted_wet_b / $this->ave_daily_rice_b) * 100, 1);
    }
    // Formula Calculation
    public $wet_densitiesCC = [];
    public function calculateCC()
    {
        $this->wet_densities_c = round(array_sum($this->wet_densitiesCC), 1);
        $this->average_wet_density_c = round($this->wet_densities_c / count($this->wet_densitiesCC), 1);
        $this->adjusted_wet_c = round($this->average_wet_density_c + (float)$this->correction_factor_c, 1);
    }
    public function calculateCCC()
    {
        $value = round((float)$this->daily_rice_a * 62.4, 1);
        $this->ave_daily_rice_c = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
    }
    public function compactionCCC()
    {
        $this->compaction_c = round(($this->adjusted_wet_c / $this->ave_daily_rice_c) * 100, 1);
    }
    // Formula Calculation
    public $wet_densitiesDD = [];
    public function calculateDD()
    {
        $this->wet_densities_d = round(array_sum($this->wet_densitiesDD), 1);
        $this->average_wet_density_d = round($this->wet_densities_d / count($this->wet_densitiesDD), 1);
        $this->adjusted_wet_d = round($this->average_wet_density_d + (float)$this->correction_factor_d, 1);
    }
    public function calculateDDD()
    {
        $value = round((float)$this->daily_rice_a * 62.4, 1);
        $this->ave_daily_rice_d = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
    }
    public function compactionDDD()
    {
        $this->compaction_d = round(($this->adjusted_wet_d / $this->ave_daily_rice_d) * 100, 1);
    }
    // Formula Calculation
    public $wet_densitiesEE = [];
    public function calculateEE()
    {
        $this->wet_densities_e = round(array_sum($this->wet_densitiesEE), 1);
        $this->average_wet_density_e = round($this->wet_densities_e / count($this->wet_densitiesEE), 1);
        $this->adjusted_wet_e = round($this->average_wet_density_e + (float)$this->correction_factor_e, 1);
    }
    public function calculateEEE()
    {
        $value = round((float)$this->daily_rice_a * 62.4, 1);
        $this->ave_daily_rice_e = is_numeric($value) && floor($value) == $value ? $value . '.0' : $value;
    }
    public function compactionEEE()
    {
        $this->compaction_e = round(($this->adjusted_wet_e / $this->ave_daily_rice_e) * 100, 1);
    }

    public function mount($file_id)
    {
        $cdot_file = FieldDensityCdot::where('id', $file_id)->first();

        $this->project_id = $cdot_file->project_id;
        $this->file_id = $file_id;
        $this->client_id = $cdot_file->client_id;
        $this->client_name = client($cdot_file->client_id)->name;
        $this->project_number = $cdot_file->project_number;
        $this->date = $cdot_file->date;
        $this->user_id = $cdot_file->user_id;
        $this->weather = $cdot_file->weather;
        $this->office_address = $cdot_file->office_address;

        $this->geocal_project_num = $cdot_file->geocal_project_num;
        $this->geocal_project_name = $cdot_file->geocal_project_name;
        $this->cdot_project_name = $cdot_file->cdot_project_name;
        $this->test_method = $cdot_file->test_method;
        $this->troxler = $cdot_file->troxler;
        $this->other = $cdot_file->other;
        $this->model = $cdot_file->model;
        $this->serial_no = $cdot_file->serial_no;
        $this->density_std_count = $cdot_file->density_std_count;
        $this->item_number = $cdot_file->item_number;
        $this->moisture_std_count = $cdot_file->moisture_std_count;
        $this->moisture_equations = $cdot_file->moisture_equations;
        $this->project_no = $cdot_file->project_no;
        $this->region = $cdot_file->region;
        $this->contract_id = $cdot_file->contract_id;
        $this->project_location = $cdot_file->project_location;
        $this->form_no = $cdot_file->form_no;
        $this->grading = $cdot_file->grading;
        $this->taster_id = $cdot_file->taster_id;
        $this->sampled_by = $cdot_file->sampled_by;
        $this->company_name = $cdot_file->company_name;
        $this->gauge_id = $cdot_file->gauge_id;
        $this->test_id = $cdot_file->test_id;
        $this->ia_id = $cdot_file->ia_id;
        $this->test_data_a = $cdot_file->test_data_a;
        $this->test_data_b = $cdot_file->test_data_b;
        $this->test_data_c = $cdot_file->test_data_c;
        $this->test_data_d = $cdot_file->test_data_d;
        $this->test_data_e = $cdot_file->test_data_e;
        $this->test_data_f = $cdot_file->test_data_f;
        $this->test_data_g = $cdot_file->test_data_g;
        $this->test_data_h = $cdot_file->test_data_h;
        $this->test_data_i = $cdot_file->test_data_i;
        $this->test_data_j = $cdot_file->test_data_j;
        $this->sample_id_a = $cdot_file->sample_id_a;
        $this->sample_id_b = $cdot_file->sample_id_b;
        $this->sample_id_c = $cdot_file->sample_id_c;
        $this->sample_id_d = $cdot_file->sample_id_d;
        $this->sample_id_e = $cdot_file->sample_id_e;
        $this->test_date_a = $cdot_file->test_date_a;
        $this->test_date_b = $cdot_file->test_date_b;
        $this->test_date_c = $cdot_file->test_date_c;
        $this->test_date_d = $cdot_file->test_date_d;
        $this->test_date_e = $cdot_file->test_date_e;
        $this->standard_count_a = $cdot_file->standard_count_a;
        $this->standard_count_b = $cdot_file->standard_count_b;
        $this->standard_count_c = $cdot_file->standard_count_c;
        $this->standard_count_d = $cdot_file->standard_count_d;
        $this->standard_count_e = $cdot_file->standard_count_e;
        $this->daily_rice_a = $cdot_file->daily_rice_a;
        $this->daily_rice_b = $cdot_file->daily_rice_b;
        $this->daily_rice_c = $cdot_file->daily_rice_c;
        $this->daily_rice_d = $cdot_file->daily_rice_d;
        $this->daily_rice_e = $cdot_file->daily_rice_e;
        $this->station_a = $cdot_file->station_a;
        $this->station_b = $cdot_file->station_b;
        $this->station_c = $cdot_file->station_c;
        $this->station_d = $cdot_file->station_d;
        $this->station_e = $cdot_file->station_e;
        $this->offset_a = $cdot_file->offset_a;
        $this->offset_b = $cdot_file->offset_b;
        $this->offset_c = $cdot_file->offset_c;
        $this->offset_d = $cdot_file->offset_d;
        $this->offset_e = $cdot_file->offset_e;
        $this->course_a = $cdot_file->course_a;
        $this->course_b = $cdot_file->course_b;
        $this->course_c = $cdot_file->course_c;
        $this->course_d = $cdot_file->course_d;
        $this->course_e = $cdot_file->course_e;

        $this->wet_densitiesAA[0] = $cdot_file->wet_density_a_a;
        $this->wet_densitiesBB[0] = $cdot_file->wet_density_a_b;
        $this->wet_densitiesCC[0] = $cdot_file->wet_density_a_c;
        $this->wet_densitiesDD[0] = $cdot_file->wet_density_a_d;
        $this->wet_densitiesEE[0] = $cdot_file->wet_density_a_e;

        $this->wet_densitiesAA[1] = $cdot_file->wet_density_b_a;
        $this->wet_densitiesBB[1] = $cdot_file->wet_density_b_b;
        $this->wet_densitiesCC[1] = $cdot_file->wet_density_b_c;
        $this->wet_densitiesDD[1] = $cdot_file->wet_density_b_d;
        $this->wet_densitiesEE[1] = $cdot_file->wet_density_b_e;

        $this->wet_densitiesAA[2] = $cdot_file->wet_density_c_a;
        $this->wet_densitiesBB[2] = $cdot_file->wet_density_c_b;
        $this->wet_densitiesCC[2] = $cdot_file->wet_density_c_c;
        $this->wet_densitiesDD[2] = $cdot_file->wet_density_c_d;
        $this->wet_densitiesEE[2] = $cdot_file->wet_density_c_e;

        $this->wet_densitiesAA[3] = $cdot_file->wet_density_d_a;
        $this->wet_densitiesBB[3] = $cdot_file->wet_density_d_b;
        $this->wet_densitiesCC[3] = $cdot_file->wet_density_d_c;
        $this->wet_densitiesDD[3] = $cdot_file->wet_density_d_d;
        $this->wet_densitiesEE[3] = $cdot_file->wet_density_d_e;
        
        // sum of wet_densities
        $this->wet_densities_a = $cdot_file->wet_densities_a;
        $this->wet_densities_b = $cdot_file->wet_densities_b;
        $this->wet_densities_c = $cdot_file->wet_densities_c;
        $this->wet_densities_d = $cdot_file->wet_densities_d;
        $this->wet_densities_e = $cdot_file->wet_densities_e;

        $this->average_wet_density_a = $cdot_file->average_wet_density_a;
        $this->average_wet_density_b = $cdot_file->average_wet_density_b;
        $this->average_wet_density_c = $cdot_file->average_wet_density_c;
        $this->average_wet_density_d = $cdot_file->average_wet_density_d;
        $this->average_wet_density_e = $cdot_file->average_wet_density_e;
        $this->correction_factor_a = $cdot_file->correction_factor_a;
        $this->correction_factor_b = $cdot_file->correction_factor_b;
        $this->correction_factor_c = $cdot_file->correction_factor_c;
        $this->correction_factor_e = $cdot_file->correction_factor_e;
        $this->correction_factor_d = $cdot_file->correction_factor_d;
        $this->adjusted_wet_a = $cdot_file->adjusted_wet_a;
        $this->adjusted_wet_b = $cdot_file->adjusted_wet_b;
        $this->adjusted_wet_c = $cdot_file->adjusted_wet_c;
        $this->adjusted_wet_e = $cdot_file->adjusted_wet_e;
        $this->adjusted_wet_d = $cdot_file->adjusted_wet_d;
        $this->ave_daily_rice_a = $cdot_file->ave_daily_rice_a;
        $this->ave_daily_rice_b = $cdot_file->ave_daily_rice_b;
        $this->ave_daily_rice_c = $cdot_file->ave_daily_rice_c;
        $this->ave_daily_rice_d = $cdot_file->ave_daily_rice_d;
        $this->ave_daily_rice_e = $cdot_file->ave_daily_rice_e;
        $this->compaction_a = $cdot_file->compaction_a;
        $this->compaction_b = $cdot_file->compaction_b;
        $this->compaction_c = $cdot_file->compaction_c;
        $this->compaction_d = $cdot_file->compaction_d;
        $this->compaction_e = $cdot_file->compaction_e;
        $this->status = $cdot_file->status;
        $this->remark = $cdot_file->remark;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required',
            'geocal_project_num' => 'required',
            'geocal_project_name' => 'required',
            'cdot_project_name' => 'required',
            'date' => 'required',
            'weather' => 'required',
            'office_address' => 'required',
            'test_method' => 'required',
            'responsible_person' => 'required',
            'daily_rice_a' => 'required',
            'daily_rice_b' => 'required',
            'daily_rice_c' => 'required',
            'daily_rice_d' => 'required',
            'daily_rice_e' => 'required',
        ]);
    }

    public function updateData()
    {
        $this->validate([
            'project_id' => 'required',
            'geocal_project_num' => 'required',
            'geocal_project_name' => 'required',
            'cdot_project_name' => 'required',
            'date' => 'required',
            'weather' => 'required',
            'office_address' => 'required',
            'test_method' => 'required',
            'responsible_person' => 'required',
            'daily_rice_a' => 'required',
            'daily_rice_b' => 'required',
            'daily_rice_c' => 'required',
            'daily_rice_d' => 'required',
            'daily_rice_e' => 'required',
        ]);

        $data = new FieldDensityCdot();
        $data->project_id = $this->project_id;
        $data->client_id = $this->client_id;
        $data->project_number = $this->project_number;
        $data->geocal_project_num = $this->geocal_project_num;
        $data->geocal_project_name = $this->geocal_project_name;
        $data->cdot_project_name = $this->cdot_project_name;
        $data->date = $this->date;
        $data->created_by = Auth::user()->id;
        $data->weather = $this->weather;
        $data->office_address = $this->office_address;
        $data->test_method = $this->test_method;
        $data->troxler = $this->troxler;
        $data->other = $this->other;
        $data->model = $this->model;
        $data->serial_no = $this->serial_no;
        $data->density_std_count = $this->density_std_count;
        $data->item_number = $this->item_number;
        $data->moisture_std_count = $this->moisture_std_count;
        $data->moisture_equations = $this->moisture_equations;
        // COLORADO DEPARTMENT OF TRANSPORTATION	
        $data->project_no = $this->project_no;
        $data->region = $this->region;
        $data->contract_id = $this->contract_id;
        $data->project_location = $this->project_location;
        $data->form_no = $this->form_no;
        $data->grading = $this->grading;

        // Table Data
        $data->taster_id = $this->taster_id;
        $data->sampled_by = $this->sampled_by;
        $data->company_name = $this->company_name;
        $data->gauge_id = $this->gauge_id;
        $data->test_id = $this->test_id;
        $data->ia_id = $this->ia_id;
        $data->test_data_a = $this->test_data_a;
        $data->test_data_b = $this->test_data_b;
        $data->test_data_c = $this->test_data_c;
        $data->test_data_d = $this->test_data_d;
        $data->test_data_e = $this->test_data_e;
        $data->test_data_f = $this->test_data_f;
        $data->test_data_g = $this->test_data_g;
        $data->test_data_h = $this->test_data_h;
        $data->test_data_i = $this->test_data_i;
        $data->test_data_j = $this->test_data_j;

        $data->sample_id_a = $this->sample_id_a;
        $data->sample_id_b = $this->sample_id_b;
        $data->sample_id_c = $this->sample_id_c;
        $data->sample_id_d = $this->sample_id_d;
        $data->sample_id_e = $this->sample_id_e;
        $data->test_date_a = $this->test_date_a;
        $data->test_date_b = $this->test_date_b;
        $data->test_date_c = $this->test_date_c;
        $data->test_date_d = $this->test_date_d;
        $data->test_date_e = $this->test_date_e;
        $data->standard_count_a = $this->standard_count_a;
        $data->standard_count_b = $this->standard_count_b;
        $data->standard_count_c = $this->standard_count_c;
        $data->standard_count_d = $this->standard_count_d;
        $data->standard_count_e = $this->standard_count_e;
        $data->daily_rice_a = $this->daily_rice_a;
        $data->daily_rice_b = $this->daily_rice_b;
        $data->daily_rice_c = $this->daily_rice_c;
        $data->daily_rice_d = $this->daily_rice_d;
        $data->daily_rice_e = $this->daily_rice_e;
        $data->station_a = $this->station_a;
        $data->station_b = $this->station_b;
        $data->station_c = $this->station_c;
        $data->station_d = $this->station_d;
        $data->station_e = $this->station_e;
        $data->offset_a = $this->offset_a;
        $data->offset_b = $this->offset_b;
        $data->offset_c = $this->offset_c;
        $data->offset_d = $this->offset_d;
        $data->offset_e = $this->offset_e;
        $data->course_a = $this->course_a;
        $data->course_b = $this->course_b;
        $data->course_c = $this->course_c;
        $data->course_d = $this->course_d;
        $data->course_e = $this->course_e;

        $data->wet_density_a_a = $this->wet_densitiesAA[0];
        $data->wet_density_a_b = $this->wet_densitiesBB[0];
        $data->wet_density_a_c = $this->wet_densitiesCC[0];
        $data->wet_density_a_d = $this->wet_densitiesDD[0];
        $data->wet_density_a_e = $this->wet_densitiesEE[0];

        $data->wet_density_b_a = $this->wet_densitiesAA[1];
        $data->wet_density_b_b = $this->wet_densitiesBB[1];
        $data->wet_density_b_c = $this->wet_densitiesCC[1];
        $data->wet_density_b_d = $this->wet_densitiesDD[1];
        $data->wet_density_b_e = $this->wet_densitiesEE[1];

        $data->wet_density_c_a = $this->wet_densitiesAA[2];
        $data->wet_density_c_b = $this->wet_densitiesBB[2];
        $data->wet_density_c_c = $this->wet_densitiesCC[2];
        $data->wet_density_c_d = $this->wet_densitiesDD[2];
        $data->wet_density_c_e = $this->wet_densitiesEE[2];

        $data->wet_density_d_a = $this->wet_densitiesAA[3];
        $data->wet_density_d_b = $this->wet_densitiesBB[3];
        $data->wet_density_d_c = $this->wet_densitiesCC[3];
        $data->wet_density_d_d = $this->wet_densitiesDD[3];
        $data->wet_density_d_e = $this->wet_densitiesEE[3];

        $data->wet_densities_a = $this->wet_densities_a;
        $data->wet_densities_b = $this->wet_densities_b;
        $data->wet_densities_c = $this->wet_densities_c;
        $data->wet_densities_d = $this->wet_densities_d;
        $data->wet_densities_e = $this->wet_densities_e;

        $data->average_wet_density_a = $this->average_wet_density_a;
        $data->average_wet_density_b = $this->average_wet_density_b;
        $data->average_wet_density_c = $this->average_wet_density_c;
        $data->average_wet_density_d = $this->average_wet_density_d;
        $data->average_wet_density_e = $this->average_wet_density_e;
        $data->correction_factor_a = $this->correction_factor_a;
        $data->correction_factor_b = $this->correction_factor_b;
        $data->correction_factor_c = $this->correction_factor_c;
        $data->correction_factor_d = $this->correction_factor_d;
        $data->correction_factor_e = $this->correction_factor_e;
        $data->adjusted_wet_a = $this->adjusted_wet_a;
        $data->adjusted_wet_b = $this->adjusted_wet_b;
        $data->adjusted_wet_c = $this->adjusted_wet_c;
        $data->adjusted_wet_d = $this->adjusted_wet_d;
        $data->adjusted_wet_e = $this->adjusted_wet_e;
        $data->ave_daily_rice_a = $this->ave_daily_rice_a;
        $data->ave_daily_rice_b = $this->ave_daily_rice_b;
        $data->ave_daily_rice_c = $this->ave_daily_rice_c;
        $data->ave_daily_rice_d = $this->ave_daily_rice_d;
        $data->ave_daily_rice_e = $this->ave_daily_rice_e;
        $data->compaction_a = $this->compaction_a;
        $data->compaction_b = $this->compaction_b;
        $data->compaction_c = $this->compaction_c;
        $data->compaction_d = $this->compaction_d;
        $data->compaction_e = $this->compaction_e;

        $data->status = $this->status;
        if($this->status == 'sentToClient'){
            $data->send_to_client = 1;
        }
        $data->remark = $this->remark;
        $data->responsible_person = json_encode($this->responsible_person);
        $data->save();

        //send Mail
        if ($this->responsible_person) {
            $persons = $this->responsible_person;
            $f_id = $data->id;
            $auth_user_id = Auth::user()->id;
            dispatch(function () use ($persons, $f_id, $auth_user_id) {
                foreach ($persons as $key => $re_id) {
                    $select_project = FieldDensityCdot::find($f_id);
                    if ($select_project->send_to_client == 1){
                        $sub_client = SubClient::find($re_id);
                        $mailData['email'] = $sub_client->email;
                    }else{
                        $select_user = User::find($re_id);
                        $mailData['email'] = $select_user->email;
                    }
                    $user = User::find($auth_user_id);
                    $mailData['name'] = $user->name;
                    $mailData['role_id'] = $user->role_id;
                    $mailData['id'] = $f_id;
                    $mailData['subject'] = 'New file waiting for your review';
                    Mail::send('emails.mail_cdot', $mailData, function ($message) use ($mailData) {
                        $message->to($mailData['email'])
                            ->subject($mailData['subject']);
                    });
                }
            });
        }

        session()->flash('message', 'File created successfully');
        return redirect()->route('template.cdot');
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $cdot_files = FieldDensityCdot::orderBy('id', 'DESC');
        $supervisors = User::orderBy('id', 'DESC')->get();
        return view('livewire.templates.cdot.edit-cdot-component', 
        ['projects'=>$projects, 'cdot_files'=>$cdot_files, 'supervisors'=>$supervisors])
        ->layout('livewire.layouts.base');
    }
}
