<?php

namespace App\Http\Livewire\FieldMoisture\Cdot;

use App\Models\FieldDensityCdot;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddCdotComponent extends Component
{
    public $user_id, $project_id, $client_id, $project_number, $client_name, $geocal_project_num, $geocal_project_name, $cdot_project_name, $weather, $date, $office_address, $test_method, $troxler, $other, $model, $serial_no, $density_std_count, $moisture_std_count, $moisture_equations, $density_count, $moisture_count, $created_by;

    public $project_no, $region, $contract_id, $project_location, $form_no, $grading;

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
        
        $data->save();

        session()->flash('success', 'CDOT Form added successfully');
        return redirect()->route('template.cdot');
        $this->resetInputs();
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $cdot_files = FieldDensityCdot::orderBy('id', 'DESC');
        return view('livewire.field-moisture.cdot.add-cdot-component', ['projects'=>$projects, 'cdot_files'=>$cdot_files])->layout('livewire.layouts.base');
    }
}
