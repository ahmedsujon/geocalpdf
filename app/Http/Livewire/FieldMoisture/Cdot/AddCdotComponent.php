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

    public $project_no, $region, $contract_id, $project_location, $form_no, $grading, $taster_id;

    public $company_name, $gauge_id, $sample_id, $test_id, $ia_id, $test_data_a, $test_data_b, $test_data_c, $test_data_d, $test_data_e, $test_data_f;

    public $sample_id_a, $sample_id_b, $sample_id_c, $test_date_a, $test_date_b, $test_date_c, $standard_count_a, $standard_count_b, $standard_count_c, $daily_rice_a, $daily_rice_b, $daily_rice_c, $station_a, $station_b, $station_c, $offset_a, $offset_b, $offset_c, $course_a, $course_b, $course_c;

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
        
        $data->sample_id_a = $this->sample_id_a;
        $data->sample_id_b = $this->sample_id_b;
        $data->sample_id_c = $this->sample_id_c;
        $data->test_date_a = $this->test_date_a;
        $data->test_date_b = $this->test_date_b;
        $data->test_date_c = $this->test_date_c;
        $data->standard_count_a = $this->standard_count_a;
        $data->standard_count_b = $this->standard_count_b;
        $data->standard_count_c = $this->standard_count_c;
        $data->daily_rice_a = $this->daily_rice_a;
        $data->daily_rice_b = $this->daily_rice_b;
        $data->daily_rice_c = $this->daily_rice_c;
        $data->station_a = $this->station_a;
        $data->station_b = $this->station_b;
        $data->station_c = $this->station_c;
        $data->offset_a = $this->offset_a;
        $data->offset_b = $this->offset_b;
        $data->offset_c = $this->offset_c;
        $data->course_a = $this->course_a;
        $data->course_b = $this->course_b;
        $data->course_c = $this->course_c;
        
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
