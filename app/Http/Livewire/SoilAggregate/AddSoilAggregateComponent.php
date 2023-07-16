<?php

namespace App\Http\Livewire\SoilAggregate;

use App\Models\MixInfo;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class AddSoilAggregateComponent extends Component
{
    public $client_id, $client_name, $project_id, $project_number, $date, $technician, $weather, $office_address, $troxler, $other, $model, $serial_no, $density_count, $moisture_count, $moisture_equation, $test_mode, $test_method, $compaction_requirement_min, $compaction_requirement_max, $general_location, $remark, $status, $responsible_person = [], $fields = [], $i = 1, $j = 1, $mix_info_id = [];

    public $mix_id = [], $supplier = [], $plant = [], $mix_type = [], $max_theoretical_density = [], $max_theoretical_specificGravity;

    public $testresults = [], $test_no = [], $result_mix_id = [], $count_period = [], $material = [], $lift = [], $layer_thickness = [], $max_theory_density = [], $field_wet_density = [], $relative_compaction = [], $pass_fail = [];

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

    public function addField($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->fields, $i);
        $this->mix_id[$i] = 0;
        $this->supplier[$i] = 0;
        $this->plant[$i] = 0;
        $this->mix_type[$i] = 0;
        $this->max_theoretical_density[$i] = 0;
        $this->max_theoretical_specificGravity[$i] = 0;
    }

    public function removeField($i)
    {
        unset($this->fields[$i]);
        unset($this->selected_mix_info_ids[$i]);
    }

        // get mix information
        public $selected_mix_info_ids = [];
        public function mixInfo($value)
        {
            $mixInfo = MixInfo::where('mix_id', $this->mix_info_id[$value])->first();
            
            if ($mixInfo) {
                $this->selected_mix_info_ids[$value] = $this->mix_info_id[$value];
                $this->supplier[$value] = $mixInfo->supplier;
                $this->plant[$value] = $mixInfo->plant;
                $this->mix_type[$value] = $mixInfo->mix_type;
                $this->max_theoretical_density[$value] = $mixInfo->max_theoretical_density;
                $this->max_theoretical_specificGravity[$value] = $mixInfo->max_theoretical_specificGravity;
            } else {
                $this->supplier[$value] = $mixInfo->supplier;
                $this->plant[$value] = $mixInfo->plant;
                $this->mix_type[$value] = $mixInfo->mix_type;
                $this->max_theoretical_density[$value] = $mixInfo->max_theoretical_density;
                $this->max_theoretical_specificGravity[$value] = $mixInfo->max_theoretical_specificGravity;
                unset($this->selected_mix_info_ids[$value]);
            }
        }


    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();
        $mix_infos = MixInfo::orderBy('id', 'DESC')->get();
        return view('livewire.soil-aggregate.add-soil-aggregate-component', ['projects'=>$projects, 'supervisors'=>$supervisors, 'mix_infos' =>$mix_infos])->layout('livewire.layouts.base');
    }
}
