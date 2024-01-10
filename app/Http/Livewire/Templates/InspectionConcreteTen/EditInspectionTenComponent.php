<?php

namespace App\Http\Livewire\Templates\InspectionConcreteTen;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\SubClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\InspectionConcreteSetTen;

class EditInspectionTenComponent extends Component
{
    public $project_id, $client_id, $client_name, $project_number, $item_number, $office_address, $cylinder_id, $date, $supplier, $plant, $sampled_by, $created_by, $type_of_structure, $general_location, $specific_location, $mix_id, $truck_no, $ticket_no, $batch_time, $sample_time, $ttf_unloading, $ambient_temp, $yards_at_sampling, $total_yard_placement, $water_added, $water_cement_ratio, $air_content, $slump, $concrete_temp, $unit_weight, $air_min, $air_max, $slump_min, $slump_max, $concrete_temp_min, $concrete_temp_max, $yield, $relative_yield, $mix_design_strength, $required_strength, $weather, $est_wind, $est_rh, $slump_cone_id, $thermometer_id, $air_meter_id, $unit_weight_measure_id, $weather_scale_id, $informed_by, $cement, $other_cementitious_matl, $other_cementitious_matl_a, $fly_ash, $water, $fine_aggregate, $course_aggregate, $max_aggregate_size, $admixture_a, $admixture_a_a, $admixture_b, $admixture_b_b, $admixture_c, $admixture_c_c, $total_batch_weight, $conc_comp_machine_id, $caliper_id, $scale_id, $cylinders_cast, $time_cylinders_molded, $cylinders_temperature_24h, $where_cylinders_cured, $field_placement_observations, $remark, $date_cylinders_received_lab, $pick_up_by, $cylinders_condition, $test_hours, $pick_up_hours, $delayed_hours, $why, $status, $file_id, $responsible_person = [];

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
        $file = InspectionConcreteSetTen::where('id', $file_id)->first();
        $this->project_id = $file->project_id;
        $this->file_id = $file_id;
        $this->client_id = $file->client_id;
        $this->client_name = client($file->client_id)->name;
        $this->project_number = $file->project_number;
        $this->item_number = $file->item_number;
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
        $this->age_a = $file->age_a;
        $this->test_date_a = $file->test_date_a;
        $this->diameter_a = $file->diameter_a;
        $this->diameter_a_a = $file->diameter_a_a;
        $this->avg_length_a = $file->avg_length_a;
        $this->mass_a = $file->mass_a;
        $this->max_load_a = $file->max_load_a;
        $this->type_cap_a = $file->type_cap_a;
        $this->area_cyl_a = $file->area_cyl_a;
        $this->measured_strength_a = $file->measured_strength_a;
        $this->specified_strength_a = $file->specified_strength_a;
        $this->type_fracture_a = $file->type_fracture_a;
        $this->person_performing_a = $file->person_performing_a;

        $this->age_b = $file->age_b;
        $this->test_date_b = $file->test_date_b;
        $this->diameter_b = $file->diameter_b;
        $this->diameter_a_b = $file->diameter_a_b;
        $this->avg_length_b = $file->avg_length_b;
        $this->mass_b = $file->mass_b;
        $this->max_load_b = $file->max_load_b;
        $this->type_cap_b = $file->type_cap_b;
        $this->area_cyl_b = $file->area_cyl_b;
        $this->measured_strength_b = $file->measured_strength_b;
        $this->specified_strength_b = $file->specified_strength_b;
        $this->type_fracture_b = $file->type_fracture_b;
        $this->person_performing_b = $file->person_performing_b;

        $this->age_c = $file->age_c;
        $this->test_date_c = $file->test_date_c;
        $this->diameter_c = $file->diameter_c;
        $this->diameter_a_c = $file->diameter_a_c;
        $this->avg_length_c = $file->avg_length_c;
        $this->mass_c = $file->mass_c;
        $this->max_load_c = $file->max_load_c;
        $this->type_cap_c = $file->type_cap_c;
        $this->area_cyl_c = $file->area_cyl_c;
        $this->measured_strength_c = $file->measured_strength_c;
        $this->specified_strength_c = $file->specified_strength_c;
        $this->type_fracture_c = $file->type_fracture_c;
        $this->person_performing_c = $file->person_performing_c;

        $this->age_d = $file->age_d;
        $this->test_date_d = $file->test_date_d;
        $this->diameter_d = $file->diameter_d;
        $this->diameter_a_d = $file->diameter_a_d;
        $this->avg_length_d = $file->avg_length_d;
        $this->mass_d = $file->mass_d;
        $this->max_load_d = $file->max_load_d;
        $this->type_cap_d = $file->type_cap_d;
        $this->area_cyl_d = $file->area_cyl_d;
        $this->measured_strength_d = $file->measured_strength_d;
        $this->specified_strength_d = $file->specified_strength_d;
        $this->type_fracture_d = $file->type_fracture_d;
        $this->person_performing_d = $file->person_performing_d;

        $this->age_e = $file->age_e;
        $this->test_date_e = $file->test_date_e;
        $this->diameter_e = $file->diameter_e;
        $this->diameter_a_e = $file->diameter_a_e;
        $this->avg_length_e = $file->avg_length_e;
        $this->mass_e = $file->mass_e;
        $this->max_load_e = $file->max_load_e;
        $this->type_cap_e = $file->type_cap_e;
        $this->area_cyl_e = $file->area_cyl_e;
        $this->measured_strength_e = $file->measured_strength_e;
        $this->specified_strength_e = $file->specified_strength_e;
        $this->type_fracture_e = $file->type_fracture_e;
        $this->person_performing_e = $file->person_performing_e;

        $this->age_f = $file->age_f;
        $this->test_date_f = $file->test_date_f;
        $this->diameter_f = $file->diameter_f;
        $this->diameter_a_f = $file->diameter_a_f;
        $this->avg_length_f = $file->avg_length_f;
        $this->mass_f = $file->mass_f;
        $this->max_load_f = $file->max_load_f;
        $this->type_cap_f = $file->type_cap_f;
        $this->area_cyl_f = $file->area_cyl_f;
        $this->measured_strength_f = $file->measured_strength_f;
        $this->specified_strength_f = $file->specified_strength_f;
        $this->type_fracture_f = $file->type_fracture_f;
        $this->person_performing_f = $file->person_performing_f;

        $this->age_g = $file->age_g;
        $this->test_date_g = $file->test_date_g;
        $this->diameter_g = $file->diameter_g;
        $this->diameter_a_g = $file->diameter_a_g;
        $this->avg_length_g = $file->avg_length_g;
        $this->mass_g = $file->mass_g;
        $this->max_load_g = $file->max_load_g;
        $this->type_cap_g = $file->type_cap_g;
        $this->area_cyl_g = $file->area_cyl_g;
        $this->measured_strength_g = $file->measured_strength_g;
        $this->specified_strength_g = $file->specified_strength_g;
        $this->type_fracture_g = $file->type_fracture_g;
        $this->person_performing_g = $file->person_performing_g;

        $this->age_h = $file->age_h;
        $this->test_date_h = $file->test_date_h;
        $this->diameter_h = $file->diameter_h;
        $this->diameter_a_h = $file->diameter_a_h;
        $this->avg_length_h = $file->avg_length_h;
        $this->mass_h = $file->mass_h;
        $this->max_load_h = $file->max_load_h;
        $this->type_cap_h = $file->type_cap_h;
        $this->area_cyl_h = $file->area_cyl_h;
        $this->measured_strength_h = $file->measured_strength_h;
        $this->specified_strength_h = $file->specified_strength_h;
        $this->type_fracture_h = $file->type_fracture_h;
        $this->person_performing_h = $file->person_performing_h;

        $this->age_i = $file->age_i;
        $this->test_date_i = $file->test_date_i;
        $this->diameter_i = $file->diameter_i;
        $this->diameter_a_i = $file->diameter_a_i;
        $this->avg_length_i = $file->avg_length_i;
        $this->mass_i = $file->mass_i;
        $this->max_load_i = $file->max_load_i;
        $this->type_cap_i = $file->type_cap_i;
        $this->area_cyl_i = $file->area_cyl_i;
        $this->measured_strength_i = $file->measured_strength_i;
        $this->specified_strength_i = $file->specified_strength_i;
        $this->type_fracture_i = $file->type_fracture_i;
        $this->person_performing_i = $file->person_performing_i;
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
    // ================== specified strength ===================

    public function specifiedStrength()
    {
        $this->specifiedStrengthA();
        $this->specifiedStrengthB();
        $this->specifiedStrengthC();
        $this->specifiedStrengthD();
        $this->specifiedStrengthE();
        $this->specifiedStrengthF();
        $this->specifiedStrengthG();
        $this->specifiedStrengthH();
        $this->specifiedStrengthI();
    }

    public function specifiedStrengthA()
    {
        if ($this->age_a != null) {
           $this->test_date_a = Carbon::parse($this->date)->addDays($this->age_a)->format('Y-m-d');  
        }else {
            $this->test_date_a = null;
        }

        if ($this->age_a == 28) {
            $this->specified_strength_a = $this->required_strength;
        } elseif ($this->age_a == null) {
            $this->age_a = null;
        } else {
            $this->specified_strength_a = null;
        }
    }
    public function specifiedStrengthB()
    {
        if ($this->age_b != null) {
            $this->test_date_b = Carbon::parse($this->date)->addDays($this->age_b)->format('Y-m-d');  
         }else {
            $this->test_date_b = null;
        }

        if ($this->age_b == 28) {
            $this->specified_strength_b = $this->required_strength;
        } elseif ($this->age_b == null) {
            $this->age_b = null;
        } else {
            $this->specified_strength_b = null;
        }
    }
    public function specifiedStrengthC()
    {
        if ($this->age_c != null) {
            $this->test_date_c = Carbon::parse($this->date)->addDays($this->age_c)->format('Y-m-d');  
         }else {
            $this->test_date_c = null;
        }

        if ($this->age_c == 28) {
            $this->specified_strength_c = $this->required_strength;
        } elseif ($this->age_c == null) {
            $this->age_c = null;
        } else {
            $this->specified_strength_c = null;
        }
    }
    public function specifiedStrengthD()
    {
        if ($this->age_d != null) {
            $this->test_date_d = Carbon::parse($this->date)->addDays($this->age_d)->format('Y-m-d');  
         }else {
            $this->test_date_d = null;
        }

        if ($this->age_d == 28) {
            $this->specified_strength_d = $this->required_strength;
        } elseif ($this->age_d == null) {
            $this->age_d = null;
        } else {
            $this->specified_strength_d = null;
        }
    }
    public function specifiedStrengthE()
    {
        if ($this->age_e != null) {
            $this->test_date_e = Carbon::parse($this->date)->addDays($this->age_e)->format('Y-m-d');  
         }else {
            $this->test_date_e = null;
        }

        if ($this->age_e == 28) {
            $this->specified_strength_e = $this->required_strength;
        } elseif ($this->age_e == null) {
            $this->age_e = null;
        } else {
            $this->specified_strength_e = null;
        }
    }
    public function specifiedStrengthF()
    {
        if ($this->age_f != null) {
            $this->test_date_f = Carbon::parse($this->date)->addDays($this->age_f)->format('Y-m-d');  
         }else {
            $this->test_date_f = null;
        }

        if ($this->age_f == 28) {
            $this->specified_strength_f = $this->required_strength;
        } elseif ($this->age_f == null) {
            $this->age_f = null;
        } else {
            $this->specified_strength_f = null;
        }
    }
    public function specifiedStrengthG()
    {
        if ($this->age_g != null) {
            $this->test_date_g = Carbon::parse($this->date)->addDays($this->age_g)->format('Y-m-d');  
         }else {
            $this->test_date_g = null;
        }

        if ($this->age_g == 28) {
            $this->specified_strength_g = $this->required_strength;
        } elseif ($this->age_g == null) {
            $this->age_g = null;
        } else {
            $this->specified_strength_g = null;
        }
    }
    public function specifiedStrengthH()
    {
        if ($this->age_h != null) {
            $this->test_date_h = Carbon::parse($this->date)->addDays($this->age_h)->format('Y-m-d');  
         }else {
            $this->test_date_h = null;
        }

        if ($this->age_h == 28) {
            $this->specified_strength_h = $this->required_strength;
        } elseif ($this->age_h == null) {
            $this->age_h = null;
        } else {
            $this->specified_strength_h = null;
        }
    }
    public function specifiedStrengthI()
    {
        if ($this->age_i != null) {
            $this->test_date_i = Carbon::parse($this->date)->addDays($this->age_i)->format('Y-m-d');  
         }else {
            $this->test_date_i = null;
        }

        if ($this->age_i == 28) {
            $this->specified_strength_i = $this->required_strength;
        } elseif ($this->age_i == null) {
            $this->age_i = null;
        } else {
            $this->specified_strength_i = null;
        }
    }

    // ================== area of cycle ===================
    public function AreaCylA()
    {
        if ($this->diameter_a != null && $this->diameter_a_a != null) {
            $this->area_cyl_a = number_format(pow((($this->diameter_a + $this->diameter_a_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_a = 0;
        }
    }
    public function AreaCylB()
    {
        if ($this->diameter_b != null && $this->diameter_a_b != null) {
            $this->area_cyl_b = number_format(pow((($this->diameter_b + $this->diameter_a_b) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_b = 0;
        }
    }
    public function AreaCylC()
    {
        if ($this->diameter_c != null && $this->diameter_a_c != null) {
            $this->area_cyl_c = number_format(pow((($this->diameter_c + $this->diameter_a_c) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_c = 0;
        }
    }
    public function AreaCylD()
    {
        if ($this->diameter_d != null && $this->diameter_a_d != null) {
            $this->area_cyl_d = number_format(pow((($this->diameter_d + $this->diameter_a_d) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_d = 0;
        }
    }
    public function AreaCylE()
    {
        if ($this->diameter_e != null && $this->diameter_a_e != null) {
            $this->area_cyl_e = number_format(pow((($this->diameter_e + $this->diameter_a_e) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_e = 0;
        }
    }
    public function AreaCylF()
    {
        if ($this->diameter_f != null && $this->diameter_a_f != null) {
            $this->area_cyl_f = number_format(pow((($this->diameter_f + $this->diameter_a_f) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_f = 0;
        }
    }
    public function AreaCylG()
    {
        if ($this->diameter_g != null && $this->diameter_a_g != null) {
            $this->area_cyl_g = number_format(pow((($this->diameter_g + $this->diameter_a_g) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_g = 0;
        }
    }
    public function AreaCylH()
    {
        if ($this->diameter_h != null && $this->diameter_a_h != null) {
            $this->area_cyl_h = number_format(pow((($this->diameter_h + $this->diameter_a_h) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_h = 0;
        }
    }
    public function AreaCylI()
    {
        if ($this->diameter_i != null && $this->diameter_a_i != null) {
            $this->area_cyl_i = number_format(pow((($this->diameter_i + $this->diameter_a_i) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_i = 0;
        }
    }
    // ================== measured strength ===================
    public function measuredStrengthA()
    {
        if ($this->max_load_a != null) {
            $this->measured_strength_a = round($this->max_load_a / ($this->area_cyl_a == 0 ? 1 : $this->area_cyl_a), -1);
        } else {
            $this->measured_strength_a = 0;
        }
    }
    public function measuredStrengthB()
    {
        if ($this->max_load_b != null) {
            $this->measured_strength_b = round($this->max_load_b / ($this->area_cyl_b == 0 ? 1 : $this->area_cyl_b), -1);
        } else {
            $this->measured_strength_b = 0;
        }
    }
    public function measuredStrengthC()
    {
        if ($this->max_load_c != null) {
            $this->measured_strength_c = round($this->max_load_c / ($this->area_cyl_c == 0 ? 1 : $this->area_cyl_c), -1);
        } else {
            $this->measured_strength_c = 0;
        }
    }
    public function measuredStrengthD()
    {
        if ($this->max_load_d != null) {
            $this->measured_strength_d = round($this->max_load_d / ($this->area_cyl_d == 0 ? 1 : $this->area_cyl_d), -1);
        } else {
            $this->measured_strength_d = 0;
        }
    }
    public function measuredStrengthE()
    {
        if ($this->max_load_e != null) {
            $this->measured_strength_e = round($this->max_load_e / ($this->area_cyl_e == 0 ? 1 : $this->area_cyl_e), -1);
        } else {
            $this->measured_strength_e = 0;
        }
    }
    public function measuredStrengthF()
    {
        if ($this->max_load_f != null) {
            $this->measured_strength_f = round($this->max_load_f / ($this->area_cyl_f == 0 ? 1 : $this->area_cyl_f), -1);
        } else {
            $this->measured_strength_f = 0;
        }
    }
    public function measuredStrengthG()
    {
        if ($this->max_load_g != null) {
            $this->measured_strength_g = round($this->max_load_g / ($this->area_cyl_g == 0 ? 1 : $this->area_cyl_g), -1);
        } else {
            $this->measured_strength_g = 0;
        }
    }
    public function measuredStrengthH()
    {
        if ($this->max_load_h != null) {
            $this->measured_strength_h = round($this->max_load_h / ($this->area_cyl_h == 0 ? 1 : $this->area_cyl_h), -1);
        } else {
            $this->measured_strength_h = 0;
        }
    }
    public function measuredStrengthI()
    {
        if ($this->max_load_i != null) {
            $this->measured_strength_i = round($this->max_load_i / ($this->area_cyl_i == 0 ? 1 : $this->area_cyl_i), -1);
        } else {
            $this->measured_strength_i = 0;
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required',
            'date' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
            'batch_time' => 'required',
            'sample_time' => 'required',
            'ttf_unloading' => 'required',
            'required_strength' => 'required',
            'age_a' => 'required',
        ]);
    }

    public function updateData()
    {
        $this->validate([
            'project_id' => 'required',
            'date' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
            'batch_time' => 'required',
            'sample_time' => 'required',
            'ttf_unloading' => 'required',
            'required_strength' => 'required',
            'age_a' => 'required',
        ], [
            'age_a.required' => 'At lest one [Age (days)] rows should be fillup',
            'project_id.required' => 'Project Name is required',
        ]);

        $data = new InspectionConcreteSetTen();
        $data->project_id = $this->project_id;
        $data->client_id = $this->client_id;
        $data->project_number = $this->project_number;
        $data->item_number = $this->item_number;
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
        $data->informed_by = $this->informed_by;
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
        $data->cylinders_cast = $this->cylinders_cast;
        $data->time_cylinders_molded = $this->time_cylinders_molded;
        $data->cylinders_temperature_24h = $this->cylinders_temperature_24h;
        $data->where_cylinders_cured = $this->where_cylinders_cured;
        $data->field_placement_observations = $this->field_placement_observations;
        $data->date_cylinders_received_lab = $this->date_cylinders_received_lab;
        $data->pick_up_by = $this->pick_up_by;
        $data->cylinders_condition = $this->cylinders_condition;
        $data->test_hours = $this->test_hours;
        $data->pick_up_hours = $this->pick_up_hours;
        $data->delayed_hours = $this->delayed_hours;
        $data->why = $this->why;
        // COMPRESSIVE STRENGTHS DATA
        $data->age_a = $this->age_a;
        $data->test_date_a = $this->test_date_a;
        $data->diameter_a = $this->diameter_a;
        $data->diameter_a_a = $this->diameter_a_a;
        $data->avg_length_a = $this->avg_length_a;
        $data->mass_a = $this->mass_a;
        $data->max_load_a = $this->max_load_a;
        $data->type_cap_a = $this->type_cap_a;
        $data->area_cyl_a = $this->area_cyl_a;
        $data->measured_strength_a = $this->measured_strength_a;
        $data->specified_strength_a = $this->specified_strength_a;
        $data->type_fracture_a = $this->type_fracture_a;
        $data->person_performing_a = $this->person_performing_a;

        $data->age_b = $this->age_b;
        $data->test_date_b = $this->test_date_b;
        $data->diameter_b = $this->diameter_b;
        $data->diameter_a_b = $this->diameter_a_b;
        $data->avg_length_b = $this->avg_length_b;
        $data->mass_b = $this->mass_b;
        $data->max_load_b = $this->max_load_b;
        $data->type_cap_b = $this->type_cap_b;
        $data->area_cyl_b = $this->area_cyl_b;
        $data->measured_strength_b = $this->measured_strength_b;
        $data->specified_strength_b = $this->specified_strength_b;
        $data->type_fracture_b = $this->type_fracture_b;
        $data->person_performing_b = $this->person_performing_b;

        $data->age_c = $this->age_c;
        $data->test_date_c = $this->test_date_c;
        $data->diameter_c = $this->diameter_c;
        $data->diameter_a_c = $this->diameter_a_c;
        $data->avg_length_c = $this->avg_length_c;
        $data->mass_c = $this->mass_c;
        $data->max_load_c = $this->max_load_c;
        $data->type_cap_c = $this->type_cap_c;
        $data->area_cyl_c = $this->area_cyl_c;
        $data->measured_strength_c = $this->measured_strength_c;
        $data->specified_strength_c = $this->specified_strength_c;
        $data->type_fracture_c = $this->type_fracture_c;
        $data->person_performing_c = $this->person_performing_c;

        $data->age_d = $this->age_d;
        $data->test_date_d = $this->test_date_d;
        $data->diameter_d = $this->diameter_d;
        $data->diameter_a_d = $this->diameter_a_d;
        $data->avg_length_d = $this->avg_length_d;
        $data->mass_d = $this->mass_d;
        $data->max_load_d = $this->max_load_d;
        $data->type_cap_d = $this->type_cap_d;
        $data->area_cyl_d = $this->area_cyl_d;
        $data->measured_strength_d = $this->measured_strength_d;
        $data->specified_strength_d = $this->specified_strength_d;
        $data->type_fracture_d = $this->type_fracture_d;
        $data->person_performing_d = $this->person_performing_d;

        $data->age_e = $this->age_e;
        $data->test_date_e = $this->test_date_e;
        $data->diameter_e = $this->diameter_e;
        $data->diameter_a_e = $this->diameter_a_e;
        $data->avg_length_e = $this->avg_length_e;
        $data->mass_e = $this->mass_e;
        $data->max_load_e = $this->max_load_e;
        $data->type_cap_e = $this->type_cap_e;
        $data->area_cyl_e = $this->area_cyl_e;
        $data->measured_strength_e = $this->measured_strength_e;
        $data->specified_strength_e = $this->specified_strength_e;
        $data->type_fracture_e = $this->type_fracture_e;
        $data->person_performing_e = $this->person_performing_e;

        $data->age_f = $this->age_f;
        $data->test_date_f = $this->test_date_f;
        $data->diameter_f = $this->diameter_f;
        $data->diameter_a_f = $this->diameter_a_f;
        $data->avg_length_f = $this->avg_length_f;
        $data->mass_f = $this->mass_f;
        $data->max_load_f = $this->max_load_f;
        $data->type_cap_f = $this->type_cap_f;
        $data->area_cyl_f = $this->area_cyl_f;
        $data->measured_strength_f = $this->measured_strength_f;
        $data->specified_strength_f = $this->specified_strength_f;
        $data->type_fracture_f = $this->type_fracture_f;
        $data->person_performing_f = $this->person_performing_f;

        $data->age_g = $this->age_g;
        $data->test_date_g = $this->test_date_g;
        $data->diameter_g = $this->diameter_g;
        $data->diameter_a_g = $this->diameter_a_g;
        $data->avg_length_g = $this->avg_length_g;
        $data->mass_g = $this->mass_g;
        $data->max_load_g = $this->max_load_g;
        $data->type_cap_g = $this->type_cap_g;
        $data->area_cyl_g = $this->area_cyl_g;
        $data->measured_strength_g = $this->measured_strength_g;
        $data->specified_strength_g = $this->specified_strength_g;
        $data->type_fracture_g = $this->type_fracture_g;
        $data->person_performing_g = $this->person_performing_g;

        $data->age_h = $this->age_h;
        $data->test_date_h = $this->test_date_h;
        $data->diameter_h = $this->diameter_h;
        $data->diameter_a_h = $this->diameter_a_h;
        $data->avg_length_h = $this->avg_length_h;
        $data->mass_h = $this->mass_h;
        $data->max_load_h = $this->max_load_h;
        $data->type_cap_h = $this->type_cap_h;
        $data->area_cyl_h = $this->area_cyl_h;
        $data->measured_strength_h = $this->measured_strength_h;
        $data->specified_strength_h = $this->specified_strength_h;
        $data->type_fracture_h = $this->type_fracture_h;
        $data->person_performing_h = $this->person_performing_h;

        $data->age_i = $this->age_i;
        $data->test_date_i = $this->test_date_i;
        $data->diameter_i = $this->diameter_i;
        $data->diameter_a_i = $this->diameter_a_i;
        $data->avg_length_i = $this->avg_length_i;
        $data->mass_i = $this->mass_i;
        $data->max_load_i = $this->max_load_i;
        $data->type_cap_i = $this->type_cap_i;
        $data->area_cyl_i = $this->area_cyl_i;
        $data->measured_strength_i = $this->measured_strength_i;
        $data->specified_strength_i = $this->specified_strength_i;
        $data->type_fracture_i = $this->type_fracture_i;
        $data->person_performing_i = $this->person_performing_i;

        $data->status = $this->status;
        if($this->status == 'sentToClient'){
            $data->send_to_client = 1;
        }

        $data->remark = $this->remark;
        $data->created_by = Auth::user()->id;
        $data->responsible_person = json_encode($this->responsible_person);
        $data->save();


        //send Mail
        if ($this->responsible_person) {
            $persons = $this->responsible_person;
            $f_id = $data->id;
            $auth_user_id = Auth::user()->id;
            $project_id = InspectionConcreteSetTen::find($f_id)->project_id;
            dispatch(function () use ($persons, $f_id, $project_id, $auth_user_id) {
                foreach ($persons as $key => $re_id) {
                    
                    $select_project = InspectionConcreteSetTen::find($f_id);
                    if ($select_project->send_to_client == 1){
                        $sub_client = SubClient::find($re_id);
                        $mailData['email'] = $sub_client->email;
                    }else{
                        $select_user = User::find($re_id);
                        $mailData['email'] = $select_user->email;
                    }
                    $user = User::find($auth_user_id);
                    $mailData['name'] = $user->name;
                    $mailData['role_id'] = $user->role_id;
                    $mailData['id'] = $f_id;
                    $mailData['project_id'] = $project_id;
                    $mailData['subject'] = 'New file waiting for your review';
                    Mail::send('emails.inspection_concrete_set_ten', $mailData, function ($message) use ($mailData) {
                        $message->to($mailData['email'])
                            ->subject($mailData['subject']);
                    });
                }
            });
        }

        session()->flash('message', 'Inspection concrete updated successfully');
        return redirect()->route('template.concrete.ten');
    }

    public function render()
    {
        if ($this->area_cyl_a) {
            $this->measuredStrengthA();
        }
        if ($this->area_cyl_b) {
            $this->measuredStrengthB();
        }
        if ($this->area_cyl_c) {
            $this->measuredStrengthC();
        }
        if ($this->area_cyl_d) {
            $this->measuredStrengthD();
        }
        if ($this->area_cyl_e) {
            $this->measuredStrengthE();
        }
        if ($this->area_cyl_f) {
            $this->measuredStrengthF();
        }
        if ($this->area_cyl_g) {
            $this->measuredStrengthG();
        }
        if ($this->area_cyl_h) {
            $this->measuredStrengthH();
        }
        if ($this->area_cyl_i) {
            $this->measuredStrengthI();
        }
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('livewire.templates.inspection-concrete-ten.edit-inspection-ten-component', ['projects' => $projects])->layout('livewire.layouts.base');
    }
}
