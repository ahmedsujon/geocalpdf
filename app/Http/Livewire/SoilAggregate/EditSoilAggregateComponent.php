<?php

namespace App\Http\Livewire\SoilAggregate;

use App\Models\MixInfo;
use App\Models\Project;
use App\Models\SoilAggregate;
use App\Models\SoilAggregateMixData;
use App\Models\SoilAggregateTestResult;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EditSoilAggregateComponent extends Component
{
    public $client_id, $client_name, $project_id, $project_number, $date, $technician, $weather, $office_address, $troxler, $other, $model, $serial_no, $density_count, $moisture_count, $moisture_equation, $test_mode, $test_method, $compaction_requirement_min, $compaction_requirement_max, $general_location, $remark, $status, $responsible_person = [], $fields = [], $i = 1, $j = 1, $mix_info_id = [];

    public $mix_id = [], $supplier = [], $plant = [], $mix_type = [], $max_theoretical_density = [], $max_theoretical_specific_gravity = [];

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

        $mixDatas = SoilAggregateMixData::where('soil_aggregate_id', $file->id)->get();
        $this->i = $mixDatas->count();

        foreach ($mixDatas as $key => $mix_data) {
            array_push($this->mix_id, $mix_data->mix_id);
            array_push($this->supplier, $mix_data->supplier);
            array_push($this->plant, $mix_data->plant);
            array_push($this->mix_type, $mix_data->mix_type);
            array_push($this->max_theoretical_density, $mix_data->max_theoretical_density);
            array_push($this->max_theoretical_specific_gravity, $mix_data->max_theoretical_specific_gravity);
            array_push($this->mixData, $mix_data->id);
            array_push($this->fields, $key);
        }

        $test_results = SoilAggregateTestResult::where('soil_aggregate_id', $file->id)->get();
        $this->i = $test_results->count();

        foreach ($test_results as $key => $test_result) {
            array_push($this->test_no, $test_result->test_no);

            array_push($this->selected_mix_info_ids, $test_result->result_mix_id);
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

    // get result information
    public function mixResultInfo($value)
    {
        $mixInfo = MixInfo::where('mix_id', $this->result_mix_id[$value])->first();
        if ($mixInfo) {
            $this->max_theory_density[$value] = $mixInfo->max_theoretical_density;
        } else {
            $this->max_theory_density[$value] = '';
        }
    }

        // formula calculation
        public function changeTestResult($value)
        {
            $mix_info = MixInfo::where('mix_id', $this->result_mix_id[$value])->first();
            if ($mix_info) {
                if (!$this->max_theory_density[$value]) {
                    $this->max_theory_density[$value] = 0;
                }
                $this->relative_compaction[$value] = round(($this->field_wet_density[$value] / $mix_info->max_theoretical_density) * 100, 1);
            } else {
                $this->relative_compaction[$value] = 0;
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
        $this->max_theoretical_specific_gravity[$i] = 0;
    }

    public function removeField($i)
    {
        unset($this->fields[$i]);
        unset($this->selected_mix_info_ids[$i]);
    }

    public function addTestResult($j)
    {
        $j = $j + 1;
        $this->j = $j;
        array_push($this->testresults, $j);
        $this->test_no[$j] = 0;
        $this->result_mix_id[$j] = 0;
        $this->location[$j] = 0;
        $this->count_period[$j] = 0;
        $this->material[$j] = 0;
        $this->lift[$j] = 0;
        $this->layer_thickness[$j] = 0;
        $this->max_theory_density[$j] = 0;
        $this->field_wet_density[$j] = 0;
        $this->material[$j] = 0;
        $this->relative_compaction[$j] = 0;
        $this->pass_fail[$j] = 0;
    }

    public function removeTestResult($j)
    {
        unset($this->testresults[$j]);
    }

    // get mix information
    public $selected_mix_info_ids = [];
    public function mixInfo($value)
    {
        $mixInfo = MixInfo::where('mix_id', $this->result_mix_id[$value])->first();

        if ($mixInfo) {
            $this->selected_mix_info_ids[$value] = $this->result_mix_id[$value];
            $this->supplier[$value] = $mixInfo->supplier;
            $this->plant[$value] = $mixInfo->plant;
            $this->mix_type[$value] = $mixInfo->mix_type;
            $this->max_theoretical_density[$value] = $mixInfo->max_theoretical_density;
            $this->max_theoretical_specific_gravity[$value] = $mixInfo->max_theoretical_specific_gravity;
        } else {
            $this->supplier[$value] = '';
            $this->plant[$value] = '';
            $this->mix_type[$value] = '';
            $this->max_theoretical_density[$value] = '';
            $this->max_theoretical_specific_gravity[$value] = '';
            unset($this->selected_mix_info_ids[$value]);
        }
    }

    public function updateData()
    {
        $this->validate([
            'project_id' => 'required',
            'client_id' => 'required',
            'date' => 'required',
            'general_location' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
        ]);

        $data = new SoilAggregate();
        $data->project_id = $this->project_id;
        $data->client_id = $this->client_id;
        $data->project_number = $this->project_number;
        $data->date = $this->date;
        $data->technician = $this->technician;
        $data->weather = $this->weather;
        $data->office_address = $this->office_address;
        $data->troxler = $this->troxler;
        $data->other = $this->other;
        $data->model = $this->model;
        $data->serial_no = $this->serial_no;
        $data->density_count = $this->density_count;
        $data->moisture_count = $this->moisture_count;
        $data->moisture_equation = $this->moisture_equation;

        $data->test_mode = $this->test_mode;
        $data->test_method = $this->test_method;

        $data->compaction_requirement_min = $this->compaction_requirement_min;
        $data->compaction_requirement_max = $this->compaction_requirement_max;
        $data->general_location = $this->general_location;

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

        // mix information
        foreach ($this->mix_id as $key => $m_id) {
            $cont = new SoilAggregateMixData();
            $cont->soil_aggregate_id = $data->id;
            $cont->mix_id = $this->mix_id[$key];
            $cont->supplier = $this->supplier[$key];
            $cont->plant = $this->plant[$key];
            $cont->mix_type = $this->mix_type[$key];
            $cont->max_theoretical_density = $this->max_theoretical_density[$key];
            $cont->max_theoretical_specific_gravity = $this->max_theoretical_specific_gravity[$key];
            $cont->save();
        }

        // test result information
        foreach ($this->test_no as $key => $test_n) {
            $cont = new SoilAggregateTestResult();
            $cont->soil_aggregate_id = $data->id;
            $cont->test_no = $this->test_no[$key];
            $cont->result_mix_id = $this->result_mix_id[$key];
            $cont->location = $this->location[$key];
            $cont->count_period = $this->count_period[$key];
            $cont->material = $this->material[$key];
            $cont->lift = $this->lift[$key];
            $cont->layer_thickness = $this->layer_thickness[$key];
            $cont->max_theory_density = $this->max_theory_density[$key];
            $cont->field_wet_density = $this->field_wet_density[$key];
            $cont->relative_compaction = $this->relative_compaction[$key];
            $cont->pass_fail = $this->pass_fail[$key];
            $cont->save();
        }

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
                    Mail::send('emails.mail_commercial', $mailData, function ($message) use ($mailData) {
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
        $mix_infos = MixInfo::orderBy('id', 'DESC')->get();
        return view('livewire.soil-aggregate.edit-soil-aggregate-component', ['projects' => $projects, 'supervisors' => $supervisors, 'mix_infos' => $mix_infos])->layout('livewire.layouts.base');
    }
}
