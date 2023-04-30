<?php

namespace App\Http\Livewire\FieldMoisture\Cdot;

use App\Models\Project;
use Livewire\Component;

class CdotComponent extends Component
{
    public $project_id, $client_id, $project_number, $client_name, $geocal_project_num, $geocal_project_name, $cdot_project_name, $weather, $date;

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

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('livewire.field-moisture.cdot.cdot-component', ['projects'=>$projects])->layout('livewire.layouts.base');
    }
}
