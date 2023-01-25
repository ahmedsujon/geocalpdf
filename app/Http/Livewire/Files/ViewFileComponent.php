<?php

namespace App\Http\Livewire\Files;

use App\Models\File;
use App\Models\FileTestResult;
use App\Models\Proctor;
use App\Models\ProctorData;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class ViewFileComponent extends Component
{
    public $file_title, $observation, $project_id, $user_id = [], $remark, $created_by, $pdf_details, $file_id, $i = 1, $j = 1;

    public $proctorData = [], $fields = [], $proctor_id = [], $description = [], $test_method = [], $max_dry_density = [], $optimum_moisture = [];

    public $testResultData = [], $testresults = [], $test_num = [], $location = [], $test_dept = [], $elev_test = [], $wet_density = [], $dry_density = [], $moisture_content = [], $percent_comp = [], $comments = [], $result_proctor_id = [];


    public function mount($file_id)
    {

        $file = File::where('id', $file_id)->first();
        // $this->name = $file->project_id;
        $this->project_name = project($file->project_id)->name;
        $this->name = client($file->client_id)->name;
        $this->Technician = user($file->user_id)->name;

        $this->file_id = $file_id;

        // $this->client_id = $file->client_id;
        $this->project_number = $file->project_number;
        $this->date = $file->date;
        $this->user_id = $file->user_id;
        $this->weather = $file->weather;
        $this->troxler = $file->troxler;
        $this->other = $file->other;
        $this->model = $file->model;
        $this->serial_number = $file->serial_number;
        $this->density_count = $file->density_count;
        $this->moisture_count = $file->moisture_count;
        $this->moisture_equation = $file->moisture_equation;
        $this->observation = $file->observation;

        $this->test_mode = $file->test_mode;
        $this->main_test_method = $file->main_test_method;

        $proctors = ProctorData::where('file_id', $file->id)->get();
        $this->i = $proctors->count();

        foreach ($proctors as $key => $proctor) {
            array_push($this->proctor_id, $proctor->proctor_id);
            array_push($this->description, $proctor->description);
            array_push($this->test_method, $proctor->test_method);
            array_push($this->max_dry_density, $proctor->max_dry_density);
            array_push($this->optimum_moisture, $proctor->optimum_moisture);
            array_push($this->proctorData, $proctor->id);
            array_push($this->fields, $key);
        }

        $test_results = FileTestResult::where('file_id', $file->id)->get();
        $this->i = $test_results->count();

        foreach ($test_results as $key => $test_result) {
            array_push($this->test_num, $test_result->test_num);
            array_push($this->location, $test_result->location);
            array_push($this->result_proctor_id, $test_result->result_proctor_id);
            array_push($this->test_dept, $test_result->test_dept);
            array_push($this->elev_test, $test_result->elev_test);
            array_push($this->wet_density, $test_result->wet_density);
            array_push($this->dry_density, $test_result->dry_density);
            array_push($this->moisture_content, $test_result->moisture_content);
            array_push($this->percent_comp, $test_result->percent_comp);
            array_push($this->comments, $test_result->comments);
            array_push($this->testResultData, $test_result->id);
            array_push($this->testresults, $key);
        }

        $this->compaction_requirement = $file->compaction_requirement;
        $this->requirment_plus = $file->requirment_plus;
        $this->requirment_minus = $file->requirment_minus;
        $this->general_info = $file->general_info;
        $this->remark = $file->remark;
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();
        $proctors = Proctor::orderBy('id', 'DESC')->get();
        
        return view('livewire.files.view-file-component', ['projects'=>$projects, 'supervisors'=>$supervisors, 'proctors'=>$proctors])->layout('livewire.layouts.base');
    }
}
