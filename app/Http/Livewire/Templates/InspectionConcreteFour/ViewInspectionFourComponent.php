<?php

namespace App\Http\Livewire\Templates\InspectionConcreteFour;

use App\Models\InspectionConcreteSetFour;
use App\Models\Project;
use Livewire\Component;

class ViewInspectionFourComponent extends Component
{
    public $project_id, $client_id, $client_name, $project_number, $office_address, $cylinder_id, $date, $supplier, $plant, $sampled_by, $created_by, $type_of_structure, $general_location, $specific_location, $mix_id, $truck_no, $ticket_no, $batch_time, $sample_time, $ttf_unloading, $ambient_temp, $yards_at_sampling, $total_yard_placement, $water_added, $water_cement_ratio, $air_content, $slump, $concrete_temp, $unit_weight, $air_min, $air_max, $slump_min, $slump_max, $concrete_temp_min, $concrete_temp_max, $yield, $relative_yield, $mix_design_strength, $required_strength, $weather, $est_wind, $est_rh, $slump_cone_id, $thermometer_id, $air_meter_id, $unit_weight_measure_id, $weather_scale_id, $informed_by, $cement, $other_cementitious_matl, $other_cementitious_matl_a, $fly_ash, $water, $fine_aggregate, $course_aggregate, $max_aggregate_size, $admixture_a, $admixture_a_a, $admixture_b, $admixture_b_b, $admixture_c, $admixture_c_c, $total_batch_weight, $conc_comp_machine_id, $caliper_id, $scale_id, $cylinders_cast, $time_cylinders_molded, $cylinders_temperature_24h, $where_cylinders_cured, $field_placement_observations, $remark, $date_cylinders_received_lab, $pick_up_by, $cylinders_condition, $test_hours, $pick_up_hours, $delayed_hours, $why, $status, $file_id, $responsible_person = [], $permission;

    public $age_a, $test_date_a, $diameter_a, $diameter_a_a, $avg_length_a, $mass_a, $max_load_a, $type_cap_a, $area_cyl_a, $measured_strength_a, $specified_strength_a, $type_fracture_a, $person_performing_a;

    public $age_b, $test_date_b, $diameter_b, $diameter_a_b, $avg_length_b, $mass_b, $max_load_b, $type_cap_b, $area_cyl_b, $measured_strength_b, $specified_strength_b, $type_fracture_b, $person_performing_b;

    public $age_c, $test_date_c, $diameter_c, $diameter_a_c, $avg_length_c, $mass_c, $max_load_c, $type_cap_c, $area_cyl_c, $measured_strength_c, $specified_strength_c, $type_fracture_c, $person_performing_c;

    public $age_d, $test_date_d, $diameter_d, $diameter_a_d, $avg_length_d, $mass_d, $max_load_d, $type_cap_d, $area_cyl_d, $measured_strength_d, $specified_strength_d, $type_fracture_d, $person_performing_d;

    public $age_e, $test_date_e, $diameter_e, $diameter_a_e, $avg_length_e, $mass_e, $max_load_e, $type_cap_e, $area_cyl_e, $measured_strength_e, $specified_strength_e, $type_fracture_e, $person_performing_e;

    public $age_f, $test_date_f, $diameter_f, $diameter_a_f, $avg_length_f, $mass_f, $max_load_f, $type_cap_f, $area_cyl_f, $measured_strength_f, $specified_strength_f, $type_fracture_f, $person_performing_f;

    public $age_g, $test_date_g, $diameter_g, $diameter_a_g, $avg_length_g, $mass_g, $max_load_g, $type_cap_g, $area_cyl_g, $measured_strength_g, $specified_strength_g, $type_fracture_g, $person_performing_g;

    public $age_h, $test_date_h, $diameter_h, $diameter_a_h, $avg_length_h, $mass_h, $max_load_h, $type_cap_h, $area_cyl_h, $measured_strength_h, $specified_strength_h, $type_fracture_h, $person_performing_h;

    public $age_i, $test_date_i, $diameter_i, $diameter_a_i, $avg_length_i, $mass_i, $max_load_i, $type_cap_i, $area_cyl_i, $measured_strength_i, $specified_strength_i, $type_fracture_i, $person_performing_i;
    
    public function mount($file_id)
    {
        $file = InspectionConcreteSetFour::where('id', $file_id)->first();
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
        $this->informed_by = $file->informed_by;
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
        $this->cylinders_cast = $file->cylinders_cast;
        $this->time_cylinders_molded = $file->time_cylinders_molded;
        $this->cylinders_temperature_24h = $file->cylinders_temperature_24h;
        $this->where_cylinders_cured = $file->where_cylinders_cured;
        $this->field_placement_observations = $file->field_placement_observations;
        $this->date_cylinders_received_lab = $file->date_cylinders_received_lab;
        $this->pick_up_by = $file->pick_up_by;
        $this->cylinders_condition = $file->cylinders_condition;
        $this->test_hours = $file->test_hours;
        $this->pick_up_hours = $file->pick_up_hours;
        $this->delayed_hours = $file->delayed_hours;
        $this->why = $file->why;
        $this->remark = $file->remark;
        $this->status = $file->status;

        // COMPRESSIVE STRENGTHS DATA
        $this->age_a =$file->age_a;
        $this->test_date_a =$file->test_date_a;
        $this->diameter_a =$file->diameter_a;
        $this->diameter_a_a =$file->diameter_a_a;
        $this->avg_length_a =$file->avg_length_a;
        $this->mass_a =$file->mass_a;
        $this->max_load_a =$file->max_load_a;
        $this->type_cap_a =$file->type_cap_a;
        $this->area_cyl_a =$file->area_cyl_a;
        $this->measured_strength_a =$file->measured_strength_a;
        $this->specified_strength_a =$file->specified_strength_a;
        $this->type_fracture_a =$file->type_fracture_a;
        $this->person_performing_a =$file->person_performing_a;

        $this->age_b =$file->age_b;
        $this->test_date_b =$file->test_date_b;
        $this->diameter_b =$file->diameter_b;
        $this->diameter_a_b =$file->diameter_a_b;
        $this->avg_length_b =$file->avg_length_b;
        $this->mass_b =$file->mass_b;
        $this->max_load_b =$file->max_load_b;
        $this->type_cap_b =$file->type_cap_b;
        $this->area_cyl_b =$file->area_cyl_b;
        $this->measured_strength_b =$file->measured_strength_b;
        $this->specified_strength_b =$file->specified_strength_b;
        $this->type_fracture_b =$file->type_fracture_b;
        $this->person_performing_b =$file->person_performing_b;

        $this->age_c =$file->age_c;
        $this->test_date_c =$file->test_date_c;
        $this->diameter_c =$file->diameter_c;
        $this->diameter_a_c =$file->diameter_a_c;
        $this->avg_length_c =$file->avg_length_c;
        $this->mass_c =$file->mass_c;
        $this->max_load_c =$file->max_load_c;
        $this->type_cap_c =$file->type_cap_c;
        $this->area_cyl_c =$file->area_cyl_c;
        $this->measured_strength_c =$file->measured_strength_c;
        $this->specified_strength_c =$file->specified_strength_c;
        $this->type_fracture_c =$file->type_fracture_c;
        $this->person_performing_c =$file->person_performing_c;

        $this->age_d =$file->age_d;
        $this->test_date_d =$file->test_date_d;
        $this->diameter_d =$file->diameter_d;
        $this->diameter_a_d =$file->diameter_a_d;
        $this->avg_length_d =$file->avg_length_d;
        $this->mass_d =$file->mass_d;
        $this->max_load_d =$file->max_load_d;
        $this->type_cap_d =$file->type_cap_d;
        $this->area_cyl_d =$file->area_cyl_d;
        $this->measured_strength_d =$file->measured_strength_d;
        $this->specified_strength_d =$file->specified_strength_d;
        $this->type_fracture_d =$file->type_fracture_d;
        $this->person_performing_d =$file->person_performing_d;

        $this->age_e =$file->age_e;
        $this->test_date_e =$file->test_date_e;
        $this->diameter_e =$file->diameter_e;
        $this->diameter_a_e =$file->diameter_a_e;
        $this->avg_length_e =$file->avg_length_e;
        $this->mass_e =$file->mass_e;
        $this->max_load_e =$file->max_load_e;
        $this->type_cap_e =$file->type_cap_e;
        $this->area_cyl_e =$file->area_cyl_e;
        $this->measured_strength_e =$file->measured_strength_e;
        $this->specified_strength_e =$file->specified_strength_e;
        $this->type_fracture_e =$file->type_fracture_e;
        $this->person_performing_e =$file->person_performing_e;

        $this->age_f =$file->age_f;
        $this->test_date_f =$file->test_date_f;
        $this->diameter_f =$file->diameter_f;
        $this->diameter_a_f =$file->diameter_a_f;
        $this->avg_length_f =$file->avg_length_f;
        $this->mass_f =$file->mass_f;
        $this->max_load_f =$file->max_load_f;
        $this->type_cap_f =$file->type_cap_f;
        $this->area_cyl_f =$file->area_cyl_f;
        $this->measured_strength_f =$file->measured_strength_f;
        $this->specified_strength_f =$file->specified_strength_f;
        $this->type_fracture_f =$file->type_fracture_f;
        $this->person_performing_f =$file->person_performing_f;

        $this->age_g =$file->age_g;
        $this->test_date_g =$file->test_date_g;
        $this->diameter_g =$file->diameter_g;
        $this->diameter_a_g =$file->diameter_a_g;
        $this->avg_length_g =$file->avg_length_g;
        $this->mass_g =$file->mass_g;
        $this->max_load_g =$file->max_load_g;
        $this->type_cap_g =$file->type_cap_g;
        $this->area_cyl_g =$file->area_cyl_g;
        $this->measured_strength_g =$file->measured_strength_g;
        $this->specified_strength_g =$file->specified_strength_g;
        $this->type_fracture_g =$file->type_fracture_g;
        $this->person_performing_g =$file->person_performing_g;

        $this->age_h =$file->age_h;
        $this->test_date_h =$file->test_date_h;
        $this->diameter_h =$file->diameter_h;
        $this->diameter_a_h =$file->diameter_a_h;
        $this->avg_length_h =$file->avg_length_h;
        $this->mass_h =$file->mass_h;
        $this->max_load_h =$file->max_load_h;
        $this->type_cap_h =$file->type_cap_h;
        $this->area_cyl_h =$file->area_cyl_h;
        $this->measured_strength_h =$file->measured_strength_h;
        $this->specified_strength_h =$file->specified_strength_h;
        $this->type_fracture_h =$file->type_fracture_h;
        $this->person_performing_h =$file->person_performing_h;

        $this->age_i =$file->age_i;
        $this->test_date_i =$file->test_date_i;
        $this->diameter_i =$file->diameter_i;
        $this->diameter_a_i =$file->diameter_a_i;
        $this->avg_length_i =$file->avg_length_i;
        $this->mass_i =$file->mass_i;
        $this->max_load_i =$file->max_load_i;
        $this->type_cap_i =$file->type_cap_i;
        $this->area_cyl_i =$file->area_cyl_i;
        $this->measured_strength_i =$file->measured_strength_i;
        $this->specified_strength_i =$file->specified_strength_i;
        $this->type_fracture_i =$file->type_fracture_i;
        $this->person_performing_i =$file->person_performing_i;

    }

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('livewire.templates.inspection-concrete-four.view-inspection-four-component', ['projects' => $projects])->layout('livewire.layouts.base');
    }
}
