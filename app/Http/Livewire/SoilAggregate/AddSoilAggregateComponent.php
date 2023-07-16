<?php

namespace App\Http\Livewire\SoilAggregate;

use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class AddSoilAggregateComponent extends Component
{
    public $client_id, $project_id, $project_number, $date, $technician, $weather, $office_address, $troxler, $other, $model, $serial_no, $density_count, $moisture_count, $moisture_equation, $test_mode, $compaction_requirement_min, $compaction_requirement_max, $general_location, $remark, $status, $responsible_person = [], $fields = [], $i = 1, $j = 1;

    public $mix_id = [], $supplier = [], $plant = [], $mix_type = [], $max_theoretical_density = [], $max_theoretical_specificGravity;

    public $testresults = [], $test_no = [], $result_mix_id = [], $count_period = [], $material = [], $lift = [], $layer_thickness = [], $max_theory_density = [], $field_wet_density = [], $relative_compaction = [], $pass_fail = [];


    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();
        return view('livewire.soil-aggregate.add-soil-aggregate-component', ['projects'=>$projects, 'supervisors'=>$supervisors])->layout('livewire.layouts.base');
    }
}
