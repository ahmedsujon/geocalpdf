<?php

namespace App\Http\Livewire\Templates\SoilAggregate;

use App\Models\CommercialTestResult;
use App\Models\Proctor;
use App\Models\ProctorData;
use App\Models\Project;
use App\Models\SoilAggregate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CreateSoilAggregateComponent extends Component
{
    public $fields = [], $i = 1, $j = 1, $client_name, $responsible_person = [];

    public $project_id, $client_id, $project_number, $date, $user_id, $weather, $troxler, $other, $model, $serial_number, $density_count, $moisture_count, $moisture_equation, $compaction_requirement, $requirement_plus, $requirement_minus, $general_info, $remark, $created_by, $status, $test_mode, $main_test_method, $observation, $office_address;

    public $proctor_id_a, $description_a, $test_method_a, $max_dry_density_a, $optimum_moisture_a, $proctor_info_a;
    public $proctor_id_b, $description_b, $test_method_b, $max_dry_density_b, $optimum_moisture_b, $proctor_info_b;
    public $proctor_id_c, $description_c, $test_method_c, $max_dry_density_c, $optimum_moisture_c, $proctor_info_c;
    public $proctor_id_d, $description_d, $test_method_d, $max_dry_density_d, $optimum_moisture_d, $proctor_info_d;
    public $proctor_id_e, $description_e, $test_method_e, $max_dry_density_e, $optimum_moisture_e, $proctor_info_e;

    public $test_results_a, $test_num_a, $location_a, $test_dept_a, $elev_test_a, $wet_density_a, $dry_density_a, $moisture_content_a, $percent_comp_a, $comments_a, $result_proctor_id_a, $material_a;
    public $test_results_b, $test_num_b, $location_b, $test_dept_b, $elev_test_b, $wet_density_b, $dry_density_b, $moisture_content_b, $percent_comp_b, $comments_b, $result_proctor_id_b, $material_b;
    public $test_results_c, $test_num_c, $location_c, $test_dept_c, $elev_test_c, $wet_density_c, $dry_density_c, $moisture_content_c, $percent_comp_c, $comments_c, $result_proctor_id_c, $material_c;
    public $test_results_d, $test_num_d, $location_d, $test_dept_d, $elev_test_d, $wet_density_d, $dry_density_d, $moisture_content_d, $percent_comp_d, $comments_d, $result_proctor_id_d, $material_d;
    public $test_results_e, $test_num_e, $location_e, $test_dept_e, $elev_test_e, $wet_density_e, $dry_density_e, $moisture_content_e, $percent_comp_e, $comments_e, $result_proctor_id_e, $material_e;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required',
            'client_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'compaction_requirement' => 'required',
            'general_info' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
        ]);
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

    // get proctor information
    public $selected_a_proctor_ids = [];
    public function proctorInfoA()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_a)->first();

        if ($data) {
            
            $this->selected_a_proctor_ids = $this->proctor_id_a;
            $this->description_a = $data->description_a;
            $this->test_method_a = $data->test_method_a;
            $this->max_dry_density_a = $data->max_dry_density_a;
            $this->optimum_moisture_a = $data->optimum_moisture_a;
        } else {
            $this->description_a = '';
            $this->test_method_a = '';
            $this->max_dry_density_a = '';
            $this->optimum_moisture_a = '';
            unset($this->selected_a_proctor_ids);
        }
    }
    public $selected_b_proctor_ids = [];
    public function proctorInfoB()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_b)->first();

        if ($data) {
            $this->selected_b_proctor_ids = $this->proctor_id_b;
            $this->description_b = $data->description_b;
            $this->test_method_b = $data->test_method_b;
            $this->max_dry_density_b = $data->max_dry_density_b;
            $this->optimum_moisture_b = $data->optimum_moisture_b;
        } else {
            $this->description_b = '';
            $this->test_method_b = '';
            $this->max_dry_density_b = '';
            $this->optimum_moisture_b = '';
            unset($this->selected_b_proctor_ids);
        }
    }
    public $selected_c_proctor_ids = [];
    public function proctorInfoC()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_c)->first();

        if ($data) {
            $this->selected_c_proctor_ids = $this->proctor_id_c;
            $this->description_c = $data->description_c;
            $this->test_method_c = $data->test_method_c;
            $this->max_dry_density_c = $data->max_dry_density_c;
            $this->optimum_moisture_c = $data->optimum_moisture_c;
        } else {
            $this->description_c = '';
            $this->test_method_c = '';
            $this->max_dry_density_c = '';
            $this->optimum_moisture_c = '';
            unset($this->selected_c_proctor_ids);
        }
    }
    public $selected_d_proctor_ids = [];
    public function proctorInfoD()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_d)->first();

        if ($data) {
            $this->selected_d_proctor_ids = $this->proctor_id_d;
            $this->description_d = $data->description_d;
            $this->test_method_d = $data->test_method_d;
            $this->max_dry_density_d = $data->max_dry_density_d;
            $this->optimum_moisture_d = $data->optimum_moisture_d;
        } else {
            $this->description_d = '';
            $this->test_method_d = '';
            $this->max_dry_density_d = '';
            $this->optimum_moisture_d = '';
            unset($this->selected_d_proctor_ids);
        }
    }
    public $selected_e_proctor_ids = [];
    public function proctorInfoE()
    {
        $data = Proctor::where('proctorid', $this->proctor_id_e)->first();

        if ($data) {
            $this->selected_e_proctor_ids = $this->proctor_id_e;
            $this->description_e = $data->description_e;
            $this->test_method_e = $data->test_method_e;
            $this->max_dry_density_e = $data->max_dry_density_e;
            $this->optimum_moisture_e = $data->optimum_moisture_e;
        } else {
            $this->description_e = '';
            $this->test_method_e = '';
            $this->max_dry_density_e = '';
            $this->optimum_moisture_e = '';
            unset($this->selected_e_proctor_ids);
        }
    }
    // Test Results
    public function changeTestResultA()
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id_a)->first();
        if ($proctor) {
            if (!$this->dry_density_a) {
                $this->dry_density_a = 0;
            }
            $this->percent_comp_a = round(($this->dry_density_a / $proctor->max_dry_density_a) * 100, 1);
        } else {
            $this->percent_comp_a = 0;
        }
    }
    public function changeTestResultB()
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id_b)->first();
        if ($proctor) {
            if (!$this->dry_density_b) {
                $this->dry_density_b = 0;
            }
            $this->percent_comp_b = round(($this->dry_density_b / $proctor->max_dry_density_b) * 100, 1);
        } else {
            $this->percent_comp_b = 0;
        }
    }

    // public function mount()
    // {
    //     $this->test_num[0] = 0;
    //     $this->location[0] = 0;
    //     $this->result_proctor_id[0] = 0;
    //     $this->elev_test[0] = 0;
    //     $this->wet_density[0] = 0;
    //     $this->moisture_content[0] = 0;
    //     $this->percent_comp[0] = 0;
    //     $this->comments[0] = 0;
    //     $this->material[0] = 0;
    //     $this->dry_density[0] = 0;
    //     $this->test_dept[0] = 0;
    // }

    public function storeData()
    {
        $this->validate([
            'project_id' => 'required',
            'client_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'compaction_requirement' => 'required',
            'general_info' => 'required',
            'responsible_person' => 'required',
            'proctor_id' => 'required',
            'office_address' => 'required',
        ]);

        $data = new SoilAggregate();
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
        $data->serial_number = $this->serial_number;
        $data->density_count = $this->density_count;
        $data->moisture_count = $this->moisture_count;
        $data->moisture_equation = $this->moisture_equation;

        $data->test_mode = $this->test_mode;
        $data->main_test_method = $this->main_test_method;

        $data->compaction_requirement = $this->compaction_requirement;
        $data->requirment_plus = $this->requirment_plus;
        $data->requirment_minus = $this->requirment_minus;
        $data->general_info = $this->general_info;
        $data->observation = $this->observation;

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
                    Mail::send('emails.soil_aggregate', $mailData, function ($message) use ($mailData) {
                        $message->to($mailData['email'])
                            ->subject($mailData['subject']);
                    });
                }
            });
        }

        session()->flash('message', 'File created successfully');
        return redirect()->route('template.commercial');
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();
        $proctors = Proctor::orderBy('id', 'DESC')->get();
        return view('livewire.templates.soil-aggregate.create-soil-aggregate-component', ['projects' => $projects, 'supervisors' => $supervisors, 'proctors' => $proctors])->layout('livewire.layouts.base');
    }
}
