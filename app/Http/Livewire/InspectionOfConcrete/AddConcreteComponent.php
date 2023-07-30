<?php

namespace App\Http\Livewire\InspectionOfConcrete;

use App\Models\Concrete;
use App\Models\ConcreteData;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class AddConcreteComponent extends Component
{
    public $project_id, $client_id, $client_name, $project_number, $office_address, $cylinder_id, $date, $supplier, $plant, $sampled_by, $created_by, $type_of_structure, $general_location, $specific_location, $mix_id, $truck_no, $ticket_no, $batch_time, $sample_time, $ttf_unloading, $ambient_temp, $yards_at_sampling, $total_yard_placement, $water_added, $water_cement_ratio, $air_content, $slump, $concrete_temp, $unit_weight, $air_min, $air_max, $slump_min, $slump_max, $concrete_temp_min, $concrete_temp_max, $yield, $relative_yield, $mix_design_strength, $required_strength, $weather, $est_wind, $est_rh, $slump_cone_id, $thermometer_id, $air_meter_id, $unit_weight_measure_id, $weather_scale_id, $cement, $other_cementitious_matl, $other_cementitious_matl_a, $fly_ash, $water, $fine_aggregate, $course_aggregate, $max_aggregate_size, $admixture_a, $admixture_a_a, $admixture_b, $admixture_b_b, $admixture_c, $admixture_c_c, $total_batch_weight, $conc_comp_machine_id, $caliper_id, $scale_id, $field, $lab, $time_cylinders_molded, $cylinders_temperature_24h, $where_cylinders_cured, $field_placement_observations, $remark, $date_cylinders_received_lab, $pick_up_by, $cylinders_condition, $good, $fair, $poor, $test_hours, $pick_up_hours, $delayed_hours, $why, $status, $responsible_person = [];

    public $fields = [], $concrete_id = [], $age = [], $test_date = [], $diameter = [], $diameter_a = [], $avg_length = [], $mass = [], $max_load = [], $type_cap = [], $area_cyl = [], $measured_strength = [], $specified_strength = [], $type_fracture = [], $person_performing = [], $i = 1;

    public function mount()
    {
        $this->age[0] = 0;
        $this->diameter[0] = 0;
        $this->diameter_a[0] = 0;
        $this->max_load[0] = 0;
    }

    public function AreaCyl($value)
    {
        if ($this->diameter_a[$value] != null) {
            $this->area_cyl[$value] = round(pow((($this->diameter[$value] + $this->diameter_a[$value]) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl[$value] = 0;
        }

        // $specified = ConcreteData::first();
        // if ($specified) {
        //     if (!$this->diameter_a[$value]) {
        //         $this->diameter_a[$value] = 0;
        //     }
        //     $this->area_cyl[$value] = round(pow((($this->diameter[$value] + $this->diameter_a[$value]) / 2 / 2), 2) * 3.14159265, 2);
        // } else {
        //     $this->area_cyl[$value] = 0;
        // }
    }

    public function measuredStrength($value)
    {

        if ($this->max_load[$value] != null) {
            $this->measured_strength[$value] = round($this->max_load[$value] / $this->area_cyl[$value], -1);
        } else {
            $this->measured_strength[$value] = 0;
        }

        // $measured = ConcreteData::first();
        // if ($measured) {
        //     if (!$this->area_cyl[$value]) {
        //         $this->area_cyl[$value] = 0;
        //     }
        //     $this->measured_strength[$value] = round($this->max_load[$value] / $this->area_cyl[$value], -1);
        // } else {
        //     $this->measured_strength[$value] = 0;
        // }
    }

    public function specifiedStrength($value)
    {
        if ($this->age[$value] == 28) {
            $this->specified_strength[$value] = $this->required_strength;
        } else {
            $this->specified_strength[$value] = 0;
        }
    }

    // get project and client information
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

    public function addField($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->fields, $i);
        $this->age[$i] = 0;
        $this->test_date[$i] = 0;
        $this->diameter[$i] = 0;
        $this->diameter_a[$i] = 0;
        $this->avg_length[$i] = 0;
        $this->mass[$i] = 0;
        $this->max_load[$i] = 0;
        $this->type_cap[$i] = 0;
        $this->area_cyl[$i] = 0;
        $this->measured_strength[$i] = 0;
        $this->specified_strength[$i] = 0;
        $this->type_fracture[$i] = 0;
        $this->person_performing[$i] = 0;
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
            'date' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
        ]);

        $data = new Concrete();
        $data->project_id = $this->project_id;
        $data->client_id = $this->client_id;
        $data->project_number = $this->project_number;
        $data->office_address = $this->office_address;
        $data->cylinder_id = $this->cylinder_id;
        $data->date = $this->date;
        $data->supplier = $this->supplier;
        $data->plant = $this->plant;
        $data->sampled_by = $this->sampled_by;
        $data->type_of_structure = $this->type_of_structure;
        $data->general_location = $this->general_location;
        $data->specific_location = $this->specific_location;
        $data->mix_id = $this->mix_id;
        $data->truck_no = $this->truck_no;
        $data->ticket_no = $this->ticket_no;
        $data->batch_time = $this->batch_time;
        $data->sample_time = $this->sample_time;
        $data->ttf_unloading = $this->ttf_unloading;
        $data->ambient_temp = $this->ambient_temp;
        $data->yards_at_sampling = $this->yards_at_sampling;
        $data->total_yard_placement = $this->total_yard_placement;
        $data->water_added = $this->water_added;
        $data->water_cement_ratio = $this->water_cement_ratio;
        $data->air_content = $this->air_content;
        $data->slump = $this->slump;
        $data->concrete_temp = $this->concrete_temp;
        $data->unit_weight = $this->unit_weight;
        $data->air_min = $this->air_min;
        $data->air_max = $this->air_max;
        $data->slump_min = $this->slump_min;
        $data->slump_max = $this->slump_max;
        $data->concrete_temp_min = $this->concrete_temp_min;
        $data->concrete_temp_max = $this->concrete_temp_max;
        $data->yield = $this->yield;
        $data->relative_yield = $this->relative_yield;
        $data->mix_design_strength = $this->mix_design_strength;
        $data->required_strength = $this->required_strength;
        $data->weather = $this->weather;
        $data->est_wind = $this->est_wind;
        $data->est_rh = $this->est_rh;
        $data->slump_cone_id = $this->slump_cone_id;
        $data->thermometer_id = $this->thermometer_id;
        $data->air_meter_id = $this->air_meter_id;
        $data->unit_weight_measure_id = $this->unit_weight_measure_id;
        $data->weather_scale_id = $this->weather_scale_id;
        $data->cement = $this->cement;
        $data->other_cementitious_matl = $this->other_cementitious_matl;
        $data->other_cementitious_matl_a = $this->other_cementitious_matl_a;
        $data->water = $this->water;
        $data->fine_aggregate = $this->fine_aggregate;
        $data->course_aggregate = $this->course_aggregate;
        $data->max_aggregate_size = $this->max_aggregate_size;
        $data->admixture_a = $this->admixture_a;
        $data->admixture_a_a = $this->admixture_a_a;
        $data->admixture_b = $this->admixture_b;
        $data->admixture_b_b = $this->admixture_b_b;
        $data->admixture_c = $this->admixture_c;
        $data->admixture_c_c = $this->admixture_c_c;
        $data->total_batch_weight = $this->total_batch_weight;
        $data->conc_comp_machine_id = $this->conc_comp_machine_id;
        $data->caliper_id = $this->caliper_id;
        $data->scale_id = $this->scale_id;
        $data->field = $this->field;
        $data->lab = $this->lab;
        $data->time_cylinders_molded = $this->time_cylinders_molded;
        $data->cylinders_temperature_24h = $this->cylinders_temperature_24h;
        $data->where_cylinders_cured = $this->where_cylinders_cured;
        $data->field_placement_observations = $this->field_placement_observations;
        $data->date_cylinders_received_lab = $this->date_cylinders_received_lab;
        $data->pick_up_by = $this->pick_up_by;
        $data->cylinders_condition = $this->cylinders_condition;
        $data->good = $this->good;
        $data->fair = $this->fair;
        $data->poor = $this->poor;
        $data->test_hours = $this->test_hours;
        $data->pick_up_hours = $this->pick_up_hours;
        $data->delayed_hours = $this->delayed_hours;
        $data->why = $this->why;

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

        // test concrete information
        foreach ($this->test_date as $key => $test_n) {
            $cont = new ConcreteData();
            $cont->concrete_id = $data->id;
            $cont->age = $this->age[$key];
            $cont->test_date = $this->test_date[$key];
            $cont->diameter = $this->diameter[$key];
            $cont->diameter_a = $this->diameter_a[$key];
            $cont->avg_length = $this->avg_length[$key];
            $cont->mass = $this->mass[$key];
            $cont->max_load = $this->max_load[$key];
            $cont->type_cap = $this->type_cap[$key];
            $cont->area_cyl = $this->area_cyl[$key];
            $cont->measured_strength = $this->measured_strength[$key];
            $cont->specified_strength = $this->specified_strength[$key];
            $cont->type_fracture = $this->type_fracture[$key];
            $cont->person_performing = $this->person_performing[$key];
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
                    Mail::send('emails.inspection_concrete', $mailData, function ($message) use ($mailData) {
                        $message->to($mailData['email'])
                            ->subject($mailData['subject']);
                    });
                }
            });
        }

        session()->flash('message', 'File created successfully');
        return redirect()->route('template.concrete');
    }


    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('livewire.inspection-of-concrete.add-concrete-component', ['projects' => $projects])->layout('livewire.layouts.base');
    }
}
