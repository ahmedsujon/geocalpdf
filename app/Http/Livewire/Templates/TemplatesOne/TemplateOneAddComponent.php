<?php

namespace App\Http\Livewire\Templates\TemplatesOne;

use App\Models\Project;
use App\Models\TemplateOne;
use App\Models\TemplateOneData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class TemplateOneAddComponent extends Component
{
    public $fields = [], $i = 1, $j = 1, $responsible_person = [];

    public $project_id, $client_id, $project_number, $date, $user_id, $remark, $created_by, $client_name, $weather, $est_wind, $est_rh, $slump_cone, $thermometer, $air_meter, $unit_weight_measure, $scale_id, $contractor, $mix_supplier, $plant, $mix_id, $design_strength, $required_strength, $specified_slump_min, $specified_slump_max, $specified_air_min, $specified_air_max, $conc_temp_min, $conc_temp_max, $cement_ib, $cementitious_malt, $water, $fine_aggregate, $course_aggregate, $max_aggregate, $admixture_one, $admixture_two, $admixture_three, $representative, $total_yds, $general_location, $responsibles, $observation, $office_address;

    public $test_no = [], $ticket_no = [], $truck_no = [], $truck_dispatched = [], $time_sample_taken = [], $time_truck_finished = [], $batch_size = [], $total_cumulative = [], $slump = [], $air_cont = [], $unit_wt = [], $air_temp = [], $conc_temp = [], $location = [], $water_added_before_test = [], $water_added_after_test = [], $cylinder_set_no = [], $wc_ratio = [], $relative_yield = [], $type = [], $dimensions = [], $cyls_cast = [], $age_days = [];

    public function selectInfo()
    {
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

    public function mount()
    {
        $this->test_no[0] = 0;
        $this->ticket_no[0] = 0;
        $this->truck_no[0] = 0;
        $this->truck_dispatched[0] = 0;
        $this->time_sample_taken[0] = 0;
        $this->time_truck_finished[0] = 0;
        $this->batch_size[0] = 0;
        $this->total_cumulative[0] = 0;
        $this->slump[0] = 0;
        $this->air_cont[0] = 0;
        $this->unit_wt[0] = 0;
        $this->air_temp[0] = 0;
        $this->conc_temp[0] = 0;
        $this->location[0] = 0;
        $this->water_added_before_test[0] = 0;
        $this->water_added_after_test[0] = 0;
        $this->cylinder_set_no[0] = 0;
        $this->relative_yield[0] = 0;
        $this->type[0] = 0;
        $this->dimensions[0] = 0;
        $this->dimensions[0] = 0;
        $this->cyls_cast[0] = 0;
        $this->age_days[0] = 0;
        $this->wc_ratio[0] = 0;
    }

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


    public function storeData()
    {
        $this->validate([
            'project_id' => 'required',
            'client_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'responsible_person' => 'required',
            'observation' => 'required',
            'office_address' => 'required',
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
        $data->office_address = $this->office_address;
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
            dispatch(function () use ($persons) {
                foreach ($persons as $key => $re_id) {
                    $user = User::find($re_id);
                    $mailData['email'] = $user->email;
                    $mailData['name'] = $user->name;
                    $mailData['role_id'] = $user->role_id;
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

        return view('livewire.templates.templates-one.template-one-add-component', ['projects' => $projects, 'supervisors' => $supervisors])->layout('livewire.layouts.base');
    }
}
