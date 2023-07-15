<?php

namespace App\Http\Livewire\InspectionOfConcrete;

use App\Models\Concrete;
use App\Models\ConcreteData;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditConcreteComponent extends Component
{
    public $project_id, $client_id, $client_name, $project_number, $office_address, $cylinder_id, $date, $supplier, $plant, $sampled_by, $created_by, $type_of_structure, $general_location, $specific_location, $mix_id, $truck_no, $ticket_no, $batch_time, $sample_time, $ttf_unloading, $ambient_temp, $yards_at_sampling, $total_yard_placement, $water_added, $water_cement_ratio, $air_content, $slump, $concrete_temp, $unit_weight, $air_min, $air_max, $slump_min, $slump_max, $concrete_temp_min, $concrete_temp_max, $yield, $relative_yield, $mix_design_strength, $required_strength, $weather, $est_wind, $est_rh, $slump_cone_id, $thermometer_id, $air_meter_id, $unit_weight_measure_id, $weather_scale_id, $cement, $other_cementitious_matl, $other_cementitious_matl_a, $fly_ash, $water, $fine_aggregate, $course_aggregate, $max_aggregate_size, $admixture_a, $admixture_a_a, $admixture_b, $admixture_b_b, $admixture_c, $admixture_c_c, $total_batch_weight, $conc_comp_machine_id, $caliper_id, $scale_id, $field, $lab, $time_cylinders_molded, $cylinders_temperature_24h, $where_cylinders_cured, $field_placement_observations, $remark, $date_cylinders_received_lab, $pick_up_by, $cylinders_condition, $good, $fair, $poor, $test_hours, $pick_up_hours, $delayed_hours, $why, $status, $file_id, $responsible_person = [];

    public $concreteData = [], $fields = [], $concrete_id = [], $age = [], $test_date = [], $diameter = [], $diameter_a = [], $avg_length = [], $mass = [], $max_load = [], $type_cap = [], $area_cyl = [], $measured_strength = [], $specified_strength = [], $type_fracture = [], $person_performing = [], $i = 1;

    public function selectInfo()
    {
        $project = Project::where('id', $this->project_id)->first();
        $this->project_number = $project->project_number;
        $this->client_id = $project->client_id;
        $this->client_name = client($project->client_id)->name;
    }

    public function mount($file_id)
    {
        $file = Concrete::where('id', $file_id)->first();
        $this->project_id = $file->project_id;
        $this->file_id = $file_id;
        $this->client_id = $file->client_id;
        $this->client_name = client($file->client_id)->name;
        $this->project_number = $file->project_number;
        $this->office_address = $file->office_address;
        $this->cylinder_id = $file->cylinder_id;
         $this->date = $file->date;
         $this->supplier = $file->supplier;
         $this->plant = $file->plant;
         $this->sampled_by = $file->sampled_by;
         $this->type_of_structure = $file->type_of_structure;
         $this->general_location = $file->general_location;
         $this->specific_location = $file->specific_location;
         $this->mix_id = $file->mix_id;
         $this->truck_no = $file->truck_no;
         $this->ticket_no = $file->ticket_no;
         $this->batch_time = $file->batch_time;
         $this->sample_time = $file->sample_time;
         $this->ttf_unloading = $file->ttf_unloading;
         $this->ambient_temp = $file->ambient_temp;
         $this->yards_at_sampling = $file->yards_at_sampling;
         $this->total_yard_placement = $file->total_yard_placement;
         $this->water_added = $file->water_added;
         $this->water_cement_ratio = $file->water_cement_ratio;
         $this->air_content = $file->air_content;
         $this->slump = $file->slump;
         $this->concrete_temp = $file->concrete_temp;
         $this->unit_weight = $file->unit_weight;
         $this->air_min = $file->air_min;
         $this->air_max = $file->air_max;
         $this->slump_min = $file->slump_min;
         $this->slump_max = $file->slump_max;
         $this->concrete_temp_min = $file->concrete_temp_min;
         $this->concrete_temp_max = $file->concrete_temp_max;
         $this->yield = $file->yield;
         $this->relative_yield = $file->relative_yield;
         $this->mix_design_strength = $file->mix_design_strength;
         $this->required_strength = $file->required_strength;
         $this->weather = $file->weather;
         $this->est_wind = $file->est_wind;
         $this->est_rh = $file->est_rh;
         $this->slump_cone_id = $file->slump_cone_id;
         $this->thermometer_id = $file->thermometer_id;
         $this->air_meter_id = $file->air_meter_id;
         $this->unit_weight_measure_id = $file->unit_weight_measure_id;
         $this->weather_scale_id = $file->weather_scale_id;
         $this->cement = $file->cement;
         $this->other_cementitious_matl = $file->other_cementitious_matl;
         $this->other_cementitious_matl_a = $file->other_cementitious_matl_a;
         $this->water = $file->water;
         $this->fine_aggregate = $file->fine_aggregate;
         $this->course_aggregate = $file->course_aggregate;
         $this->max_aggregate_size = $file->max_aggregate_size;
         $this->admixture_a = $file->admixture_a;
         $this->admixture_a_a = $file->admixture_a_a;
         $this->admixture_b = $file->admixture_b;
         $this->admixture_b_b = $file->admixture_b_b;
         $this->admixture_c = $file->admixture_c;
         $this->admixture_c_c = $file->admixture_c_c;
         $this->total_batch_weight = $file->total_batch_weight;
         $this->conc_comp_machine_id = $file->conc_comp_machine_id;
         $this->caliper_id = $file->caliper_id;
         $this->scale_id = $file->scale_id;
         $this->field = $file->field;
         $this->lab = $file->lab;
         $this->time_cylinders_molded = $file->time_cylinders_molded;
         $this->cylinders_temperature_24h = $file->cylinders_temperature_24h;
         $this->where_cylinders_cured = $file->where_cylinders_cured;
         $this->field_placement_observations = $file->field_placement_observations;
         $this->date_cylinders_received_lab = $file->date_cylinders_received_lab;
         $this->pick_up_by = $file->pick_up_by;
         $this->cylinders_condition = $file->cylinders_condition;
         $this->good = $file->good;
         $this->fair = $file->fair;
         $this->poor = $file->poor;
         $this->test_hours = $file->test_hours;
         $this->pick_up_hours = $file->pick_up_hours;
         $this->delayed_hours = $file->delayed_hours;
         $this->why = $file->why;
         $this->remark = $file->remark;
         $this->status = $file->status;

         $concretes = ConcreteData::where('concrete_id', $file->id)->get();
         $this->i = $concretes->count();
 
         foreach ($concretes as $key => $concrete) {
             array_push($this->age, $concrete->age);
             array_push($this->test_date, $concrete->test_date);
             array_push($this->diameter, $concrete->diameter);
             array_push($this->diameter_a, $concrete->diameter_a);
             array_push($this->avg_length, $concrete->avg_length);
             array_push($this->mass, $concrete->mass);
             array_push($this->max_load, $concrete->max_load);
             array_push($this->type_cap, $concrete->type_cap);
             array_push($this->area_cyl, $concrete->area_cyl);
             array_push($this->measured_strength, $concrete->measured_strength);
             array_push($this->specified_strength, $concrete->specified_strength);
             array_push($this->type_fracture, $concrete->type_fracture);
             array_push($this->person_performing, $concrete->person_performing);
             array_push($this->concreteData, $concrete->id);
             array_push($this->fields, $key);
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

    public function updateData()
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
        // if ($this->responsible_person) {
        //     $persons = $this->responsible_person;
        //     $f_id = $data->id;
        //     dispatch(function () use ($persons, $f_id) {
        //         foreach ($persons as $key => $re_id) {
        //             $user = User::find($re_id);
        //             $mailData['email'] = $user->email;
        //             $mailData['name'] = $user->name;
        //             $mailData['role_id'] = $user->role_id;
        //             $mailData['id'] = $f_id;
        //             $mailData['subject'] = 'New file waiting for your review';
        //             Mail::send('emails.mail_commercial', $mailData, function ($message) use ($mailData) {
        //                 $message->to($mailData['email'])
        //                     ->subject($mailData['subject']);
        //             });
        //         }
        //     });
        // }

        session()->flash('message', 'File created successfully');
        return redirect()->route('template.concrete');
    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('livewire.inspection-of-concrete.edit-concrete-component', ['projects'=>$projects])->layout('livewire.layouts.base');
    }
}
