<?php

namespace App\Http\Livewire\Files;

use App\Models\File;
use App\Models\FileTestResult;
use App\Models\Proctor;
use App\Models\ProctorData;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddFileComponent extends Component
{
    public $fields = [], $i = 1, $j = 1, $client_name, $responsibles, $responsible_person = [];

    public $project_id, $client_id, $project_number, $date, $user_id, $weather, $troxler, $other, $model, $serial_number, $density_count, $moisture_count, $moisture_equation, $compaction_requirement, $requirment_plus, $requirment_minus, $general_info, $remark, $created_by, $status, $test_mode, $main_test_method, $observation;

    public $proctor_id = [], $description = [], $test_method = [], $max_dry_density = [], $optimum_moisture = [], $proctor_info = [];

    public $testresults = [], $test_num = [], $location = [], $test_dept = [], $elev_test = [], $wet_density = [], $dry_density = [], $moisture_content = [], $percent_comp = [], $comments = [], $result_proctor_id = [], $comments_one = [], $percent_comp_one = [];

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
        ]);
    }

    public function selectInfo()
    {
        // get project information
        $project = Project::where('id', $this->project_id)->first();
        $this->project_number = $project->project_number;
        $this->client_id = $project->client_id;
        $this->client_name = client($project->client_id)->name;

        // get responsible persons
        $responsible_persons = [];
        $responsible_supervisor = $project->responsible_supervisor;
        $responsible_persons = array_merge($responsible_persons, json_decode($responsible_supervisor));
        $responsible_clerk = $project->responsible_clerk;
        $responsible_persons = array_merge($responsible_persons, json_decode($responsible_clerk));
        $responsible_pe = $project->responsible_pe;
        $responsible_persons = array_merge($responsible_persons, json_decode($responsible_pe));
        $this->responsibles = User::whereIn('id', $responsible_persons)->get();
    }

    // get proctor information

    public $selected_proctor_ids = [];

    public function proctorInfo($value)
    {
        $proctor = Proctor::where('proctorid', $this->proctor_id[$value])->first();
        if ($proctor) {

            $this->selected_proctor_ids[$value] = $this->proctor_id[$value];

            $this->description[$value] = $proctor->material_description;
            $this->test_method[$value] = $proctor->max_dry_density;
            $this->max_dry_density[$value] = $proctor->optimum_moisture;
            $this->optimum_moisture[$value] = $proctor->test_type;
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
        }else {
            $this->percent_comp[$value] = 0;
        }
    }

    public function addField($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->fields, $i);
        $this->test_num[$i] = 0;
        $this->location[$i] = 0;
        $this->result_proctor_id[$i] = 0;
        $this->elev_test[$i] = 0;
        $this->wet_density[$i] = 0;
        $this->moisture_content[$i] = 0;
        $this->percent_comp[$i] = 0;
        $this->comments[$i] = 0;
        $this->percent_comp_one[$i] = 0;
        $this->comments_one[$i] = 0;
        $this->dry_density[$i] = 0;
        $this->test_dept[$i] = 0;
        $this->proctor_id[$i] = 0;
    }

    public function removeField($i)
    {
        unset($this->fields[$i]);
        unset($this->selected_proctor_ids[$i]);
    }

    public function addTestResult($j)
    {
        $j = $j + 1;
        $this->j = $j;
        array_push($this->testresults, $j);
        $this->test_num[$j] = 0;
        $this->location[$j] = 0;
        $this->result_proctor_id[$j] = 0;
        $this->elev_test[$j] = 0;
        $this->wet_density[$j] = 0;
        $this->moisture_content[$j] = 0;
        $this->percent_comp[$j] = 0;
        $this->comments[$j] = 0;
        $this->percent_comp_one[$j] = 0;
        $this->comments_one[$j] = 0;
        $this->dry_density[$j] = 0;
        $this->test_dept[$j] = 0;
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
        $this->percent_comp_one[0] = 0;
        $this->comments_one[0] = 0;
        $this->dry_density[0] = 0;
        $this->test_dept[0] = 0;
    }

    public function removeTestResult($j)
    {
        unset($this->testresults[$j]);
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
        ]);

        $data = new File();
        $data->project_id = $this->project_id;
        $data->client_id = $this->client_id;
        $data->project_number = $this->project_number;
        $data->date = $this->date;
        $data->user_id = $this->user_id;
        $data->weather = $this->weather;
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
            $cont->file_id = $data->id;
            $cont->proctor_id = $this->proctor_id[$key];
            $cont->description = $this->description[$key];
            $cont->test_method = $this->test_method[$key];
            $cont->max_dry_density = $this->max_dry_density[$key];
            $cont->optimum_moisture = $this->optimum_moisture[$key];
            $cont->save();
        }

        // test result information
        foreach ($this->test_num as $key => $test_n) {
            $cont = new FileTestResult();
            $cont->file_id = $data->id;
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
            $cont->percent_comp_one = $this->percent_comp_one[$key];
            $cont->comments_one = $this->comments_one[$key];
            $cont->save();
        }



        $data->save();
        session()->flash('message', 'File created successfully');
        return redirect()->route('file.list');
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();
        $proctors = Proctor::orderBy('id', 'DESC')->get();

        return view('livewire.files.add-file-component', ['projects' => $projects, 'supervisors' => $supervisors, 'proctors' => $proctors])->layout('livewire.layouts.base');
    }
}
