<?php

namespace App\Http\Livewire\Templates\PlasticConcrete;

use App\Models\PlasticConcrete;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CreatePlasticConcreteComponent extends Component
{

    public $project_id, $client_id, $project_number, $date, $user_id, $remark, $created_by, $client_name, $weather, $est_wind, $est_rh, $slump_cone, $thermometer, $air_meter, $unit_weight_measure, $scale_id, $contractor, $mix_supplier, $plant, $mix_id, $design_strength, $required_strength, $specified_slump_min, $specified_slump_max, $specified_air_min, $specified_air_max, $conc_temp_min, $conc_temp_max, $cement_ib, $cementitious_malt, $water, $fine_aggregate, $course_aggregate, $max_aggregate, $admixture_one, $admixture_two, $admixture_three, $representative, $total_yds, $general_location, $responsibles, $observation, $office_address, $responsible_person = [];

    public $test_no_a, $ticket_no_a, $truck_no_a, $truck_dispatched_a, $time_sample_taken_a, $time_truck_finished_a, $batch_size_a, $total_cumulative_a, $slump_a, $air_cont_a, $unit_wt_a, $air_temp_a, $conc_temp_a, $location_a, $water_added_before_test_a, $water_added_after_test_a, $cylinder_set_no_a, $wc_ratio_a, $relative_yield_a, $type_a, $dimensions_a, $cyls_cast_a, $age_days_a;

    public $test_no_b, $ticket_no_b, $truck_no_b, $truck_dispatched_b, $time_sample_taken_b, $time_truck_finished_b, $batch_size_b, $total_cumulative_b, $slump_b, $air_cont_b, $unit_wt_b, $air_temp_b, $conc_temp_b, $location_b, $water_added_before_test_b, $water_added_after_test_b, $cylinder_set_no_b, $wc_ratio_b, $relative_yield_b, $type_b, $dimensions_b, $cyls_cast_b, $age_days_b;

    public $test_no_c, $ticket_no_c, $truck_no_c, $truck_dispatched_c, $time_sample_taken_c, $time_truck_finished_c, $batch_size_c, $total_cumulative_c, $slump_c, $air_cont_c, $unit_wt_c, $air_temp_c, $conc_temp_c, $location_c, $water_added_before_test_c, $water_added_after_test_c, $cylinder_set_no_c, $wc_ratio_c, $relative_yield_c, $type_c, $dimensions_c, $cyls_cast_c, $age_days_c;

    public $test_no_d, $ticket_no_d, $truck_no_d, $truck_dispatched_d, $time_sample_taken_d, $time_truck_finished_d, $batch_size_d, $total_cumulative_d, $slump_d, $air_cont_d, $unit_wt_d, $air_temp_d, $conc_temp_d, $location_d, $water_added_before_test_d, $water_added_after_test_d, $cylinder_set_no_d, $wc_ratio_d, $relative_yield_d, $type_d, $dimensions_d, $cyls_cast_d, $age_days_d;


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

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'general_location' => 'required',
            'responsible_person' => 'required',
            'observation' => 'required',
            'office_address' => 'required',
            'design_strength' => 'required',
            'required_strength' => 'required',
        ]);
    }

    public function storeData()
    {
        $this->validate([
            'project_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'general_location' => 'required',
            'responsible_person' => 'required',
            'observation' => 'required',
            'office_address' => 'required',
            'design_strength' => 'required',
            'required_strength' => 'required',
        ]);

        $data = new PlasticConcrete();
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
        $data->general_location = $this->general_location;
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
        // Test Results
        $data->test_no_a = $this->test_no_a;
        $data->ticket_no_a = $this->ticket_no_a;
        $data->truck_no_a = $this->truck_no_a;
        $data->truck_dispatched_a = $this->truck_dispatched_a;
        $data->time_sample_taken_a = $this->time_sample_taken_a;
        $data->time_truck_finished_a = $this->time_truck_finished_a;
        $data->batch_size_a = $this->batch_size_a;
        $data->total_cumulative_a = $this->total_cumulative_a;
        $data->slump_a = $this->slump_a;
        $data->air_cont_a = $this->air_cont_a;
        $data->unit_wt_a = $this->unit_wt_a;
        $data->air_temp_a = $this->air_temp_a;
        $data->conc_temp_a = $this->conc_temp_a;
        $data->location_a = $this->location_a;
        $data->water_added_before_test_a = $this->water_added_before_test_a;
        $data->water_added_after_test_a = $this->water_added_after_test_a;
        $data->cylinder_set_no_a = $this->cylinder_set_no_a;
        $data->wc_ratio_a = $this->wc_ratio_a;
        $data->relative_yield_a = $this->relative_yield_a;
        $data->type_a = $this->type_a;
        $data->dimensions_a = $this->dimensions_a;
        $data->cyls_cast_a = $this->cyls_cast_a;
        $data->age_days_a = $this->age_days_a;

        $data->test_no_b = $this->test_no_b;
        $data->ticket_no_b = $this->ticket_no_b;
        $data->truck_no_b = $this->truck_no_b;
        $data->truck_dispatched_b = $this->truck_dispatched_b;
        $data->time_sample_taken_b = $this->time_sample_taken_b;
        $data->time_truck_finished_b = $this->time_truck_finished_b;
        $data->batch_size_b = $this->batch_size_b;
        $data->total_cumulative_b = $this->total_cumulative_b;
        $data->slump_b = $this->slump_b;
        $data->air_cont_b = $this->air_cont_b;
        $data->unit_wt_b = $this->unit_wt_b;
        $data->air_temp_b = $this->air_temp_b;
        $data->conc_temp_b = $this->conc_temp_b;
        $data->location_b = $this->location_b;
        $data->water_added_before_test_b = $this->water_added_before_test_b;
        $data->water_added_after_test_b = $this->water_added_after_test_b;
        $data->cylinder_set_no_b = $this->cylinder_set_no_b;
        $data->wc_ratio_b = $this->wc_ratio_b;
        $data->relative_yield_b = $this->relative_yield_b;
        $data->type_b = $this->type_b;
        $data->dimensions_b = $this->dimensions_b;
        $data->cyls_cast_b = $this->cyls_cast_b;
        $data->age_days_b = $this->age_days_b;

        $data->test_no_c = $this->test_no_c;
        $data->ticket_no_c = $this->ticket_no_c;
        $data->truck_no_c = $this->truck_no_c;
        $data->truck_dispatched_c = $this->truck_dispatched_c;
        $data->time_sample_taken_c = $this->time_sample_taken_c;
        $data->time_truck_finished_c = $this->time_truck_finished_c;
        $data->batch_size_c = $this->batch_size_c;
        $data->total_cumulative_c = $this->total_cumulative_c;
        $data->slump_c = $this->slump_c;
        $data->air_cont_c = $this->air_cont_c;
        $data->unit_wt_c = $this->unit_wt_c;
        $data->air_temp_c = $this->air_temp_c;
        $data->conc_temp_c = $this->conc_temp_c;
        $data->location_c = $this->location_c;
        $data->water_added_before_test_c = $this->water_added_before_test_c;
        $data->water_added_after_test_c = $this->water_added_after_test_c;
        $data->cylinder_set_no_c = $this->cylinder_set_no_c;
        $data->wc_ratio_c = $this->wc_ratio_c;
        $data->relative_yield_c = $this->relative_yield_c;
        $data->type_c = $this->type_c;
        $data->dimensions_c = $this->dimensions_c;
        $data->cyls_cast_c = $this->cyls_cast_c;
        $data->age_days_c = $this->age_days_c;

        $data->test_no_d = $this->test_no_d;
        $data->ticket_no_d = $this->ticket_no_d;
        $data->truck_no_d = $this->truck_no_d;
        $data->truck_dispatched_d = $this->truck_dispatched_d;
        $data->time_sample_taken_d = $this->time_sample_taken_d;
        $data->time_truck_finished_d = $this->time_truck_finished_d;
        $data->batch_size_d = $this->batch_size_d;
        $data->total_cumulative_d = $this->total_cumulative_d;
        $data->slump_d = $this->slump_d;
        $data->air_cont_d = $this->air_cont_d;
        $data->unit_wt_d = $this->unit_wt_d;
        $data->air_temp_d = $this->air_temp_d;
        $data->conc_temp_d = $this->conc_temp_d;
        $data->location_d = $this->location_d;
        $data->water_added_before_test_d = $this->water_added_before_test_d;
        $data->water_added_after_test_d = $this->water_added_after_test_d;
        $data->cylinder_set_no_d = $this->cylinder_set_no_d;
        $data->wc_ratio_d = $this->wc_ratio_d;
        $data->relative_yield_d = $this->relative_yield_d;
        $data->type_d = $this->type_d;
        $data->dimensions_d = $this->dimensions_d;
        $data->cyls_cast_d = $this->cyls_cast_d;
        $data->age_days_d = $this->age_days_d;


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
                    Mail::send('emails.plastic_concrete', $mailData, function ($message) use ($mailData) {
                        $message->to($mailData['email'])
                            ->subject($mailData['subject']);
                    });
                }
            });
        }

        session()->flash('message', 'Plastic concrete created successfully');
        return redirect()->route('template.plastic.concrete.list');
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        return view('livewire.templates.plastic-concrete.create-plastic-concrete-component', ['projects' => $projects, 'supervisors' => $supervisors])->layout('livewire.layouts.base');
    }
}
