<?php

namespace App\Http\Livewire\FieldMoisture\Commercial;

use App\Models\CommercialTestResult;
use App\Models\FieldDensityCommercial;
use App\Models\Proctor;
use App\Models\ProctorData;
use App\Models\Project;
use App\Models\SubClient;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EditCommercialComponent extends Component
{
    public $file_title, $project_id, $office_address, $proctorid, $user_id = [], $remark, $created_by, $pdf_details, $file_id, $i = 1, $j = 1, $main_test_method, $test_mode, $status, $observation, $responsible_person = [];

    public $proctorData = [], $fields = [], $proctor_id = [], $description = [], $test_method = [], $max_dry_density = [], $optimum_moisture = [], $project_number, $client_id, $client_name;

    public $testResultData = [], $testresults = [], $test_num = [], $location = [], $test_dept = [], $elev_test = [], $wet_density = [], $dry_density = [], $moisture_content = [], $percent_comp = [], $comments = [], $result_proctor_id = [], $material = [];

    public $weather, $date, $troxler, $other, $model, $serial_number, $density_count, $moisture_count, $moisture_equation, $compaction_requirement, $requirment_plus, $requirment_minus, $general_info;


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

    public function selectInfo()
    {
        $project = Project::where('id', $this->project_id)->first();
        $this->project_number = $project->project_number;
        $this->client_id = $project->client_id;
        $this->client_name = client($project->client_id)->name;
    }

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
        $this->material[$i] = 0;
        $this->dry_density[$i] = 0;
        $this->test_dept[$i] = 0;
    }

    public function removeField($i)
    {
        unset($this->fields[$i]);
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
        $this->material[$j] = 0;
        $this->dry_density[$j] = 0;
        $this->test_dept[$j] = 0;
    }

    public function removeTestResult($j)
    {
        unset($this->testresults[$j]);
    }

    public function mount($file_id)
    {
        $file = FieldDensityCommercial::where('id', $file_id)->first();
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
        $this->serial_number = $file->serial_number;
        $this->density_count = $file->density_count;
        $this->moisture_count = $file->moisture_count;
        $this->moisture_equation = $file->moisture_equation;
        $this->observation = $file->observation;
        $this->status = $file->status;

        $this->test_mode = $file->test_mode;
        $this->main_test_method = $file->main_test_method;
        // $this->responsible_person = json_encode($this->responsible_person);

        $proctors = ProctorData::where('field_density_commercial_id', $file->id)->get();
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

        $test_results = CommercialTestResult::where('field_density_commercial_id', $file->id)->get();
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
            array_push($this->material, $test_result->material);
            array_push($this->testResultData, $test_result->id);
            array_push($this->testresults, $key);
        }

        $this->compaction_requirement = $file->compaction_requirement;
        $this->requirment_plus = $file->requirment_plus;
        $this->requirment_minus = $file->requirment_minus;
        $this->general_info = $file->general_info;
        $this->remark = $file->remark;
    }

    public function updateData()
    {
        $this->validate([
            'project_id' => 'required',
            'client_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'compaction_requirement' => 'required',
            'general_info' => 'required',
            'responsible_person' => 'required',
            'status' => 'required',
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
        $data->status = $this->status;
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

        // $data->user_id = json_encode($this->user_id);
        $data->remark = $this->remark;
        $data->created_by = Auth::user()->id;
        $data->save();

        //send Mail
        if ($this->responsible_person) {
            $persons = $this->responsible_person;
            $status = $this->status;
            $f_id = $data->id;
            dispatch(function () use ($persons, $status, $f_id) {
                foreach ($persons as $key => $re_id) {
                    if($status == 'sentToClient'){
                        $user = SubClient::find($re_id);
                        $mailData['field_density_commercial_id'] = $f_id;
                    } else{
                        $user = User::find($re_id);
                        $mailData['field_density_commercial_id'] = NULL;
                    }
                    $mailData['email'] = $user->email;
                    $mailData['name'] = $user->name;
                    $mailData['role_id'] = $user->role_id;
                    $mailData['subject'] = 'New file waiting for your review';
                    $mailData['id'] = $f_id;
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

        return view('livewire.field-moisture.commercial.edit-commercial-component', ['projects' => $projects, 'supervisors' => $supervisors, 'proctors' => $proctors])->layout('livewire.layouts.base');
    }
}
