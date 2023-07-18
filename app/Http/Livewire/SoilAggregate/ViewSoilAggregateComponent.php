<?php

namespace App\Http\Livewire\SoilAggregate;

use App\Models\MixInfo;
use App\Models\Project;
use App\Models\SoilAggregate;
use App\Models\SoilAggregateMixData;
use App\Models\SoilAggregateTestResult;
use App\Models\User;
use Livewire\Component;

class ViewSoilAggregateComponent extends Component
{
    public $client_id, $client_name, $project_id, $project_number, $date, $technician, $weather, $office_address, $troxler, $other, $model, $serial_no, $density_count, $moisture_count, $moisture_equation, $test_mode, $test_method, $compaction_requirement_min, $compaction_requirement_max, $general_location, $remark, $status, $responsible_person = [], $fields = [], $i = 1, $j = 1, $mix_info_id = [];

    public $mix_id = [], $supplier = [], $plant = [], $mix_type = [], $max_theoretical_density = [], $max_theoretical_specific_gravity;

    public $testresults = [], $test_no = [], $result_mix_id = [], $location = [], $count_period = [], $material = [], $lift = [], $layer_thickness = [], $max_theory_density = [], $field_wet_density = [], $relative_compaction = [], $pass_fail = [];

    public $file_id, $user_id, $testResultData = [], $mixData = [];

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
        $this->serial_no = $file->serial_no;
        $this->density_count = $file->density_count;
        $this->moisture_count = $file->moisture_count;
        $this->moisture_equation = $file->moisture_equation;
        $this->test_mode = $file->test_mode;
        $this->test_method = $file->test_method;
        $this->compaction_requirement_min = $file->compaction_requirement_min;
        $this->compaction_requirement_max = $file->compaction_requirement_max;
        $this->general_location = $file->general_location;
        $this->remark = $file->remark;
        $this->status = $file->status;

        $mixDatas = SoilAggregateMixData::where('soil_aggregate_id', $file->id)->get();
        $this->i = $mixDatas->count();

        foreach ($mixDatas as $key => $mix_data) {
            array_push($this->mix_id, $mix_data->mix_id);
            array_push($this->supplier, $mix_data->supplier);
            array_push($this->plant, $mix_data->plant);
            array_push($this->mix_type, $mix_data->mix_type);
            array_push($this->max_theoretical_density, $mix_data->max_theoretical_density);
            // array_push($this->max_theoretical_specific_gravity, $mix_data->max_theoretical_specific_gravity);
            array_push($this->mixData, $mix_data->id);
            array_push($this->fields, $key);
        }

        $test_results = SoilAggregateTestResult::where('soil_aggregate_id', $file->id)->get();
        $this->i = $test_results->count();

        foreach ($test_results as $key => $test_result) {
            array_push($this->test_no, $test_result->test_no);
            array_push($this->result_mix_id, $test_result->result_mix_id);
            array_push($this->location, $test_result->location);
            array_push($this->count_period, $test_result->count_period);
            array_push($this->material, $test_result->material);
            array_push($this->lift, $test_result->lift);
            array_push($this->layer_thickness, $test_result->layer_thickness);
            array_push($this->max_theory_density, $test_result->max_theory_density);
            array_push($this->field_wet_density, $test_result->field_wet_density);
            array_push($this->relative_compaction, $test_result->relative_compaction);
            array_push($this->pass_fail, $test_result->pass_fail);
            array_push($this->testResultData, $test_result->id);
            array_push($this->testresults, $key);
        }
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();
        $mix_infos = MixInfo::orderBy('id', 'DESC')->get();
        return view('livewire.soil-aggregate.view-soil-aggregate-component', ['projects' => $projects, 'supervisors' => $supervisors, 'mix_infos' => $mix_infos])->layout('livewire.layouts.base');
    }
}
