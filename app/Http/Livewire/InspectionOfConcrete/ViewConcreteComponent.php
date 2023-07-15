<?php

namespace App\Http\Livewire\InspectionOfConcrete;

use App\Models\Concrete;
use App\Models\ConcreteData;
use App\Models\Project;
use Livewire\Component;

class ViewConcreteComponent extends Component
{
    public $project_id, $client_id, $client_name, $project_number, $office_address, $cylinder_id, $date, $supplier, $plant, $sampled_by, $created_by, $type_of_structure, $general_location, $specific_location, $mix_id, $truck_no, $ticket_no, $batch_time, $sample_time, $ttf_unloading, $ambient_temp, $yards_at_sampling, $total_yard_placement, $water_added, $water_cement_ratio, $air_content, $slump, $concrete_temp, $unit_weight, $air_min, $air_max, $slump_min, $slump_max, $concrete_temp_min, $concrete_temp_max, $yield, $relative_yield, $mix_design_strength, $required_strength, $weather, $est_wind, $est_rh, $slump_cone_id, $thermometer_id, $air_meter_id, $unit_weight_measure_id, $weather_scale_id, $cement, $other_cementitious_matl, $other_cementitious_matl_a, $fly_ash, $water, $fine_aggregate, $course_aggregate, $max_aggregate_size, $admixture_a, $admixture_a_a, $admixture_b, $admixture_b_b, $admixture_c, $admixture_c_c, $total_batch_weight, $conc_comp_machine_id, $caliper_id, $scale_id, $field, $lab, $time_cylinders_molded, $cylinders_temperature_24h, $where_cylinders_cured, $field_placement_observations, $remark, $date_cylinders_received_lab, $pick_up_by, $cylinders_condition, $good, $fair, $poor, $test_hours, $pick_up_hours, $delayed_hours, $why, $status, $file_id, $responsible_person = [];

    public $concreteData = [], $fields = [], $concrete_id = [], $age = [], $test_date = [], $diameter = [], $diameter_a = [], $avg_length = [], $mass = [], $max_load = [], $type_cap = [], $area_cyl = [], $measured_strength = [], $specified_strength = [], $type_fracture = [], $person_performing = [], $i = 1;

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

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('livewire.inspection-of-concrete.view-concrete-component', ['projects'=>$projects])->layout('livewire.layouts.base');
    }
}
