<?php

namespace App\Http\Livewire\Templates\SoilAggregate;

use Livewire\Component;

class CreateSoilAggregateComponent extends Component
{
    public $fields = [], $i = 1, $j = 1, $client_name, $responsibles, $responsible_person = [];

    public $project_id, $client_id, $project_number, $date, $user_id, $weather, $troxler, $other, $model, $serial_number, $density_count, $moisture_count, $moisture_equation, $compaction_requirement, $requirment_plus, $requirment_minus, $general_info, $remark, $created_by, $status, $test_mode, $main_test_method, $observation, $office_address;

    public $proctor_id = [], $description = [], $test_method = [], $max_dry_density = [], $optimum_moisture = [], $proctor_info = [];

    public $testresults = [], $test_num = [], $location = [], $test_dept = [], $elev_test = [], $wet_density = [], $dry_density = [], $moisture_content = [], $percent_comp = [], $comments = [], $result_proctor_id = [], $material = [];

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
            'proctor_id' => 'required',
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
    public $selected_proctor_ids = [];
    public function proctorInfo($value)
    {
        $proctor = Proctor::where('proctorid', $this->proctor_id[$value])->first();
        if ($proctor) {

            $this->selected_proctor_ids[$value] = $this->proctor_id[$value];
            $this->description[$value] = $proctor->material_description;
            $this->test_method[$value] = $proctor->test_method;
            $this->max_dry_density[$value] = $proctor->max_dry_density;
            $this->optimum_moisture[$value] = $proctor->optimum_moisture;
        } else {
            $this->description[$value] = '';
            $this->test_method[$value] = '';
            $this->max_dry_density[$value] = '';
            $this->optimum_moisture[$value] = '';
            unset($this->selected_proctor_ids[$value]);
        }
    }

    public function changeTestResult($value)
    {
        $proctor = Proctor::where('proctorid', $this->result_proctor_id[$value])->first();
        if ($proctor) {
            if (!$this->dry_density[$value]) {
                $this->dry_density[$value] = 0;
            }
            $this->percent_comp[$value] = round(($this->dry_density[$value] / $proctor->max_dry_density) * 100, 1);
        } else {
            $this->percent_comp[$value] = 0;
        }
    }

    public function mount()
    {
        $this->test_num[0] = 0;
        $this->location[0] = 0;
        $this->result_proctor_id[0] = 0;
        $this->elev_test[0] = 0;
        $this->wet_density[0] = 0;
        $this->moisture_content[0] = 0;
        $this->percent_comp[0] = 0;
        $this->comments[0] = 0;
        $this->material[0] = 0;
        $this->dry_density[0] = 0;
        $this->test_dept[0] = 0;
    }

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

        $data = new FieldDensityCommercial();
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

        // proctor information
        foreach ($this->proctor_id as $key => $p_id) {
            $cont = new ProctorData();
            $cont->field_density_commercial_id = $data->id;
            $cont->proctor_id = $this->proctor_id[$key];
            $cont->description = $this->description[$key];
            $cont->test_method = $this->test_method[$key];
            $cont->max_dry_density = $this->max_dry_density[$key];
            $cont->optimum_moisture = $this->optimum_moisture[$key];
            $cont->save();
        }

        // test result information
        foreach ($this->test_num as $key => $test_n) {
            $cont = new CommercialTestResult();
            $cont->field_density_commercial_id = $data->id;
            $cont->result_proctor_id = $this->result_proctor_id[$key];
            $cont->test_num = $this->test_num[$key];
            $cont->location = $this->location[$key];
            $cont->test_dept = $this->test_dept[$key];
            $cont->elev_test = $this->elev_test[$key];
            $cont->wet_density = $this->wet_density[$key];
            $cont->dry_density = $this->dry_density[$key];
            $cont->moisture_content = $this->moisture_content[$key];
            $cont->percent_comp = $this->percent_comp[$key];
            $cont->comments = $this->comments[$key];
            $cont->material = $this->material[$key];
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
        return view('livewire.templates.soil-aggregate.create-soil-aggregate-component');
    }
}