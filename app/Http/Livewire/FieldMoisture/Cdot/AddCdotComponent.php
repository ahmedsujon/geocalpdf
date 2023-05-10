<?php

namespace App\Http\Livewire\FieldMoisture\Cdot;

use App\Models\FieldDensityCdot;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddCdotComponent extends Component
{
    public $user_id, $project_id, $client_id, $project_number, $client_name, $geocal_project_num, $geocal_project_name, $cdot_project_name, $weather, $date, $office_address, $test_method, $troxler, $other, $model, $serial_no, $density_std_count, $moisture_std_count, $moisture_equations, $density_count, $moisture_count, $created_by;

    public $project_no, $region, $contract_id, $project_location, $form_no, $grading, $taster_id, $sampled_by;

    public $company_name, $gauge_id, $sample_id, $test_id, $ia_id, $test_data_a, $test_data_b, $test_data_c, $test_data_d, $test_data_e, $test_data_f, $test_data_g, $test_data_h, $test_data_i, $test_data_j;

    public $sample_id_a, $sample_id_b, $sample_id_c, $sample_id_d, $sample_id_e, $test_date_a, $test_date_b, $test_date_c, $test_date_d, $test_date_e, $standard_count_a, $standard_count_b, $standard_count_c, $standard_count_d, $standard_count_e, $daily_rice_a, $daily_rice_b, $daily_rice_c, $daily_rice_d, $daily_rice_e, $station_a, $station_b, $station_c, $station_d, $station_e, $offset_a, $offset_b, $offset_c, $offset_d, $offset_e, $course_a, $course_b, $course_c, $course_d, $course_e;

    public $wet_density_a_a, $wet_density_a_b, $wet_density_a_c, $wet_density_a_d,  $wet_density_a_e,$wet_density_b_a, $wet_density_b_b, $wet_density_b_c,  $wet_density_b_d, $wet_density_b_e,$wet_density_c_a, $wet_density_c_b, $wet_density_c_c, $wet_density_c_d, $wet_density_c_e, $wet_density_d_a, $wet_density_d_b, $wet_density_d_c, $wet_density_d_d,  $wet_density_d_e;

    public $wet_densities_a, $wet_densities_b, $wet_densities_c, $wet_densities_d, $wet_densities_e, $average_wet_density_a, $average_wet_density_b, $average_wet_density_c, $average_wet_density_d, $average_wet_density_e, $correction_factor_a, $correction_factor_b, $correction_factor_c, $correction_factor_d, $correction_factor_e, $adjusted_wet_a, $adjusted_wet_b, $adjusted_wet_c, $adjusted_wet_d, $adjusted_wet_e, $ave_daily_rice_a, $ave_daily_rice_b, $ave_daily_rice_c, $ave_daily_rice_d, $ave_daily_rice_e, $compaction_a, $compaction_b, $compaction_c, $compaction_d, $compaction_e;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required',
            'client_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'geocal_project_num' => 'required',
            'geocal_project_name' => 'required',
            'cdot_project_name' => 'required',
            'weather' => 'required',
            'date' => 'required',
        ]);
    }

    public $selected_project_ids = [];
    public function selectInfo()
    {
        if ($this->project_id) {
            $project = Project::where('id', $this->project_id)->first();
            $this->selected_project_ids = $this->project_id;
            $this->client_id = $project->client_id;
            $this->project_number = $project->project_number;
            $this->client_name = client($project->client_id)->name;
        } else {
            $this->client_id = '';
            $this->project_number = '';
            $this->client_name = '';
            unset($this->selected_project_ids);
        }
    }

    public function storeData()
    {
        $this->validate([
            'project_id' => 'required',
            'client_id' => 'required',
            'project_number' => 'required',
            'geocal_project_num' => 'required',
            'geocal_project_name' => 'required',
            'cdot_project_name' => 'required',
            'date' => 'required',
            'weather' => 'required',
            'office_address' => 'required',
            'test_method' => 'required',
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
        $data->sample_id = $this->sample_id;
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

        $data->wet_density_a_a = $this->wet_density_a_a;
        $data->wet_density_a_b = $this->wet_density_a_b;
        $data->wet_density_a_c = $this->wet_density_a_c;
        $data->wet_density_a_d = $this->wet_density_a_d;
        $data->wet_density_a_e = $this->wet_density_a_e;
        $data->wet_density_b_a = $this->wet_density_b_a;
        $data->wet_density_b_b = $this->wet_density_b_b;
        $data->wet_density_b_c = $this->wet_density_b_c;
        $data->wet_density_b_d = $this->wet_density_b_d;
        $data->wet_density_b_e = $this->wet_density_b_e;
        $data->wet_density_c_a = $this->wet_density_c_a;
        $data->wet_density_c_b = $this->wet_density_c_b;
        $data->wet_density_c_c = $this->wet_density_c_c;
        $data->wet_density_c_d = $this->wet_density_c_d;
        $data->wet_density_c_e = $this->wet_density_c_e;
        $data->wet_density_d_a = $this->wet_density_d_a;
        $data->wet_density_d_b = $this->wet_density_d_b;
        $data->wet_density_d_c = $this->wet_density_d_c;
        $data->wet_density_d_d = $this->wet_density_d_d;
        $data->wet_density_d_e = $this->wet_density_d_e;

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

        
        $data->save();

        session()->flash('success', 'CDOT Form added successfully');
        return redirect()->route('template.cdot');
        $this->resetInputs();
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $cdot_files = FieldDensityCdot::orderBy('id', 'DESC');
        $supervisors = User::orderBy('id', 'DESC')->get();
        return view('livewire.field-moisture.cdot.add-cdot-component', ['projects'=>$projects, 'cdot_files'=>$cdot_files, 'supervisors'=>$supervisors])->layout('livewire.layouts.base');
    }
}
