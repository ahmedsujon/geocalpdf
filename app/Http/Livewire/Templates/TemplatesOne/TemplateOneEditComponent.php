<?php

namespace App\Http\Livewire\Templates\TemplatesOne;

use App\Models\Project;
use App\Models\SubClient;
use App\Models\TemplateOne;
use App\Models\TemplateOneData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class TemplateOneEditComponent extends Component
{
    public $fields = [], $i = 1;

    public $project_id, $client_id, $project_number, $date, $user_id, $remark, $created_by, $client_name, $weather, $est_wind, $est_rh, $slump_cone, $thermometer, $air_meter, $unit_weight_measure, $scale_id, $contractor, $mix_supplier, $plant, $mix_id, $design_strength, $required_strength, $specified_slump_min, $specified_slump_max, $specified_air_min, $specified_air_max, $conc_temp_min, $conc_temp_max, $cement_ib, $cementitious_malt, $water, $fine_aggregate, $course_aggregate, $max_aggregate, $admixture_one, $admixture_two, $admixture_three, $representative, $total_yds, $status, $observation, $office_address;

    public $test_no = [], $ticket_no = [], $truck_no = [], $truck_dispatched = [], $time_sample_taken = [], $time_truck_finished = [], $batch_size = [], $total_cumulative = [], $slump = [], $air_cont = [], $unit_wt = [], $air_temp = [], $conc_temp = [], $location = [], $water_added_before_test = [], $water_added_after_test = [], $cylinder_set_no = [], $wc_ratio = [], $relative_yield = [], $type = [], $dimensions = [], $cyls_cast = [], $age_days = [], $templateData = [];

    public $responsible_person = [], $template_one_id, $general_location, $compaction_requirement, $requirment_plus, $requirment_minus, $general_info;

    public function addField($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->fields, $i);
        $this->test_no[$i] = 0;
        $this->ticket_no[$i] = 0;
        $this->truck_no[$i] = 0;
        $this->truck_dispatched[$i] = 0;
        $this->time_sample_taken[$i] = 0;
        $this->time_truck_finished[$i] = 0;
        $this->batch_size[$i] = 0;
        $this->total_cumulative[$i] = 0;
        $this->slump[$i] = 0;
        $this->air_cont[$i] = 0;
        $this->unit_wt[$i] = 0;
        $this->air_temp[$i] = 0;
        $this->conc_temp[$i] = 0;
        $this->location[$i] = 0;
        $this->water_added_before_test[$i] = 0;
        $this->water_added_after_test[$i] = 0;
        $this->cylinder_set_no[$i] = 0;
        $this->relative_yield[$i] = 0;
        $this->type[$i] = 0;
        $this->dimensions[$i] = 0;
        $this->dimensions[$i] = 0;
        $this->cyls_cast[$i] = 0;
        $this->age_days[$i] = 0;
        $this->wc_ratio[$i] = 0;
    }

    public function removeField($i)
    {
        unset($this->fields[$i]);
    }

    public function selectInfo()
    {
        $project = Project::where('id', $this->project_id)->first();
        $this->project_number = $project->project_number;
        $this->client_id = $project->client_id;
        $this->client_name = client($project->client_id)->name;
    }

    public function mount($file_id)
    {
        $file = TemplateOne::where('id', $file_id)->first();

        $this->project_id = $file->project_id;
        $this->client_id = $file->client_id;
        $this->project_number = $file->project_number;
        $this->client_name = client($file->client_id)->name;

        $this->template_one_id = $file_id;

        $this->date = $file->date;
        $this->user_id = $file->user_id;
        $this->weather = $file->weather;
        $this->est_wind = $file->est_wind;
        $this->est_rh = $file->est_rh;
        $this->slump_cone = $file->slump_cone;
        $this->thermometer = $file->thermometer;
        $this->air_meter = $file->air_meter;
        $this->unit_weight_measure = $file->unit_weight_measure;
        $this->scale_id = $file->scale_id;
        $this->general_location = $file->general_location;
        $this->contractor = $file->contractor;
        $this->office_address = $file->office_address;

        $this->mix_supplier = $file->mix_supplier;
        $this->plant = $file->plant;
        $this->mix_id = $file->mix_id;
        $this->design_strength = $file->design_strength;
        $this->required_strength = $file->required_strength;
        $this->specified_slump_min = $file->specified_slump_min;
        $this->specified_slump_max = $file->specified_slump_max;
        $this->specified_air_min = $file->specified_air_min;
        $this->specified_air_max = $file->specified_air_max;
        $this->conc_temp_min = $file->conc_temp_min;
        $this->conc_temp_max = $file->conc_temp_max;
        $this->cement_ib = $file->cement_ib;
        $this->cementitious_malt = $file->cementitious_malt;
        $this->water = $file->water;
        $this->fine_aggregate = $file->fine_aggregate;
        $this->course_aggregate = $file->course_aggregate;
        $this->max_aggregate = $file->max_aggregate;
        $this->admixture_one = $file->admixture_one;
        $this->admixture_two = $file->admixture_two;
        $this->admixture_three = $file->admixture_three;
        $this->remark = $file->remark;
        $this->total_yds = $file->total_yds;
        $this->representative = $file->representative;

        $templateOnes = TemplateOneData::where('template_one_id', $file->id)->get();
        $this->i = $templateOnes->count();
        foreach ($templateOnes as $key => $template) {
            array_push($this->test_no, $template->test_no);
            array_push($this->ticket_no, $template->ticket_no);
            array_push($this->truck_no, $template->truck_no);
            array_push($this->truck_dispatched, $template->truck_dispatched);
            array_push($this->time_sample_taken, $template->time_sample_taken);
            array_push($this->time_truck_finished, $template->time_truck_finished);
            array_push($this->batch_size, $template->batch_size);
            array_push($this->total_cumulative, $template->total_cumulative);
            array_push($this->slump, $template->slump);
            array_push($this->air_cont, $template->air_cont);
            array_push($this->unit_wt, $template->unit_wt);
            array_push($this->air_temp, $template->air_temp);
            array_push($this->conc_temp, $template->conc_temp);
            array_push($this->location, $template->location);
            array_push($this->water_added_before_test, $template->water_added_before_test);
            array_push($this->water_added_after_test, $template->water_added_after_test);
            array_push($this->cylinder_set_no, $template->cylinder_set_no);
            array_push($this->wc_ratio, $template->wc_ratio);
            array_push($this->relative_yield, $template->relative_yield);
            array_push($this->type, $template->type);
            array_push($this->dimensions, $template->dimensions);
            array_push($this->cyls_cast, $template->cyls_cast);
            array_push($this->age_days, $template->age_days);
            array_push($this->templateData, $template->id);
            array_push($this->fields, $key);
        }
        $this->compaction_requirement = $file->compaction_requirement;
        $this->requirment_plus = $file->requirment_plus;
        $this->requirment_minus = $file->requirment_minus;
        $this->general_info = $file->general_info;
        $this->remark = $file->remark;
        $this->observation = $file->observation;
        $this->status = $file->status;
    }

    public function storeData()
    {
        $this->validate([
            'project_id' => 'required',
            'client_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'responsible_person' => 'required',
            'status' => 'required',
            'observation' => 'required',

        ]);

        $data = new TemplateOne();
        // project information
        $data->project_id = $this->project_id;
        $data->client_id = $this->client_id;
        $data->project_number = $this->project_number;
        $data->date = $this->date;
        $data->user_id = $this->user_id;
        // weather information
        $data->weather = $this->weather;
        $data->est_wind = $this->est_wind;
        $data->est_rh = $this->est_rh;
        // Equipment information
        $data->slump_cone = $this->slump_cone;
        $data->thermometer = $this->thermometer;
        $data->air_meter = $this->air_meter;
        $data->unit_weight_measure = $this->unit_weight_measure;
        $data->scale_id = $this->scale_id;
        // mix information
        $data->contractor = $this->contractor;
        $data->mix_supplier = $this->mix_supplier;
        $data->plant = $this->plant;
        $data->mix_id = $this->mix_id;
        $data->design_strength = $this->design_strength;
        $data->required_strength = $this->required_strength;
        $data->specified_slump_min = $this->specified_slump_min;
        $data->specified_slump_max = $this->specified_slump_max;
        $data->specified_air_min = $this->specified_air_min;
        $data->specified_air_max = $this->specified_air_max;
        $data->conc_temp_min = $this->conc_temp_min;
        $data->conc_temp_max = $this->conc_temp_max;
        $data->office_address = $this->office_address;

        $data->total_yds = $this->total_yds;
        $data->representative = $this->representative;

        $data->cement_ib = $this->cement_ib;
        $data->cementitious_malt = $this->cementitious_malt;
        $data->water = $this->water;
        $data->fine_aggregate = $this->fine_aggregate;
        $data->course_aggregate = $this->course_aggregate;
        $data->max_aggregate = $this->max_aggregate;
        $data->admixture_one = $this->admixture_one;
        $data->admixture_two = $this->admixture_two;
        $data->admixture_three = $this->admixture_three;
        $data->responsible_person = json_encode($this->responsible_person);
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
        $data->save();

        // test result information
        foreach ($this->test_no as $key => $test_id) {
            $cont = new TemplateOneData();
            $cont->template_one_id = $data->id;
            $cont->test_no = $this->test_no[$key];
            $cont->ticket_no = $this->ticket_no[$key];
            $cont->truck_no = $this->truck_no[$key];
            $cont->truck_dispatched = $this->truck_dispatched[$key];
            $cont->time_sample_taken = $this->time_sample_taken[$key];
            $cont->time_truck_finished = $this->time_truck_finished[$key];
            $cont->batch_size = $this->batch_size[$key];
            $cont->total_cumulative = $this->total_cumulative[$key];
            $cont->slump = $this->slump[$key];
            $cont->air_cont = $this->air_cont[$key];
            $cont->unit_wt = $this->unit_wt[$key];
            $cont->air_temp = $this->air_temp[$key];
            $cont->conc_temp = $this->conc_temp[$key];
            $cont->location = $this->location[$key];
            $cont->water_added_before_test = $this->water_added_before_test[$key];
            $cont->water_added_after_test = $this->water_added_after_test[$key];
            $cont->cylinder_set_no = $this->cylinder_set_no[$key];
            $cont->wc_ratio = $this->wc_ratio[$key];
            $cont->relative_yield = $this->relative_yield[$key];
            $cont->type = $this->type[$key];
            $cont->dimensions = $this->dimensions[$key];
            $cont->cyls_cast = $this->cyls_cast[$key];
            $cont->age_days = $this->age_days[$key];
            $cont->save();
        }
        
        //send Mail
        if ($this->responsible_person) {
            $persons = $this->responsible_person;
            $status = $this->status;
            $f_id = $data->id;
            dispatch(function () use ($persons, $status, $f_id) {
                foreach ($persons as $key => $re_id) {
                    if($status == 'sentToClient'){
                        $user = SubClient::find($re_id);
                        $mailData['template_one_id'] = $f_id;
                    } else{
                        $user = User::find($re_id);
                        $mailData['template_one_id'] = NULL;
                    }

                    $mailData['email'] = $user->email;
                    $mailData['name'] = $user->name;
                    $mailData['role_id'] = $user->role_id;
                    $mailData['id'] = $f_id;
                    $mailData['subject'] = 'New file waiting for your review';
                    Mail::send('emails.mail_one', $mailData, function ($message) use ($mailData) {
                        $message->to($mailData['email'])
                            ->subject($mailData['subject']);
                    });
                }
            });
        }

        session()->flash('message', 'File created successfully');
        return redirect()->route('template-one.list');
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();
        return view('livewire.templates.templates-one.template-one-edit-component', ['projects' => $projects, 'supervisors' => $supervisors])->layout('livewire.layouts.base');
    }
}
