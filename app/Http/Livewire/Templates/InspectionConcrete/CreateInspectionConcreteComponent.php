<?php

namespace App\Http\Livewire\Templates\InspectionConcrete;

use App\Models\Concrete;
use App\Models\ConcreteData;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CreateInspectionConcreteComponent extends Component
{
    public $project_id, $client_id, $client_name, $project_number, $office_address, $cylinder_id, $date, $supplier, $plant, $sampled_by, $created_by, $type_of_structure, $general_location, $specific_location, $mix_id, $truck_no, $ticket_no, $batch_time, $sample_time, $ttf_unloading, $ambient_temp, $yards_at_sampling, $total_yard_placement, $water_added, $water_cement_ratio, $air_content, $slump, $concrete_temp, $unit_weight, $air_min, $air_max, $slump_min, $slump_max, $concrete_temp_min, $concrete_temp_max, $yield, $relative_yield, $mix_design_strength, $required_strength, $weather, $est_wind, $est_rh, $slump_cone_id, $thermometer_id, $air_meter_id, $unit_weight_measure_id, $weather_scale_id, $cement, $other_cementitious_matl, $other_cementitious_matl_a, $fly_ash, $water, $fine_aggregate, $course_aggregate, $max_aggregate_size, $admixture_a, $admixture_a_a, $admixture_b, $admixture_b_b, $admixture_c, $admixture_c_c, $total_batch_weight, $conc_comp_machine_id, $caliper_id, $scale_id, $field, $lab, $time_cylinders_molded, $cylinders_temperature_24h, $where_cylinders_cured, $field_placement_observations, $remark, $date_cylinders_received_lab, $pick_up_by, $cylinders_condition, $good, $fair, $poor, $test_hours, $pick_up_hours, $delayed_hours, $why, $status, $responsible_person = [];

    public $age_a, $test_date_a, $diameter_a, $diameter_a_a, $avg_length_a, $mass_a, $max_load_a, $type_cap_a, $area_cyl_a, $measured_strength_a, $specified_strength_a, $type_fracture_a, $person_performing_a;

    public $age_b, $test_date_b, $diameter_b, $diameter_a_b, $avg_length_b, $mass_b, $max_load_b, $type_cap_b, $area_cyl_b, $measured_strength_b, $specified_strength_b, $type_fracture_b, $person_performing_b;

    public $age_c, $test_date_c, $diameter_c, $diameter_a_c, $avg_length_c, $mass_c, $max_load_c, $type_cap_c, $area_cyl_c, $measured_strength_c, $specified_strength_c, $type_fracture_c, $person_performing_c;

    public $age_d, $test_date_d, $diameter_d, $diameter_a_d, $avg_length_d, $mass_d, $max_load_d, $type_cap_d, $area_cyl_d, $measured_strength_d, $specified_strength_d, $type_fracture_d, $person_performing_d;

    public $age_e, $test_date_e, $diameter_e, $diameter_a_e, $avg_length_e, $mass_e, $max_load_e, $type_cap_e, $area_cyl_e, $measured_strength_e, $specified_strength_e, $type_fracture_e, $person_performing_e;

    public $age_f, $test_date_f, $diameter_f, $diameter_a_f, $avg_length_f, $mass_f, $max_load_f, $type_cap_f, $area_cyl_f, $measured_strength_f, $specified_strength_f, $type_fracture_f, $person_performing_f;

    public $age_g, $test_date_g, $diameter_g, $diameter_a_g, $avg_length_g, $mass_g, $max_load_g, $type_cap_g, $area_cyl_g, $measured_strength_g, $specified_strength_g, $type_fracture_g, $person_performing_g;

    public $age_h, $test_date_h, $diameter_h, $diameter_a_h, $avg_length_h, $mass_h, $max_load_h, $type_cap_h, $area_cyl_h, $measured_strength_h, $specified_strength_h, $type_fracture_h, $person_performing_h;

    public $age_i, $test_date_i, $diameter_i, $diameter_a_i, $avg_length_i, $mass_i, $max_load_i, $type_cap_i, $area_cyl_i, $measured_strength_i, $specified_strength_i, $type_fracture_i, $person_performing_i;

    public $age_j, $test_date_j, $diameter_j, $diameter_a_j, $avg_length_j, $mass_j, $max_load_j, $type_cap_j, $area_cyl_j, $measured_strength_j, $specified_strength_j, $type_fracture_j, $person_performing_j;

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
    public function specifiedStrengthA()
    {
        if ($this->age_a == 28) {
            $this->specified_strength_a = $this->required_strength;
        } else {
            $this->specified_strength_a = 0;
        }
    }
    public function specifiedStrengthB()
    {
        if ($this->age_b == 28) {
            $this->specified_strength_b = $this->required_strength;
        } else {
            $this->specified_strength_b = 0;
        }
    }

    public function specifiedStrengthC()
    {
        if ($this->age_c == 28) {
            $this->specified_strength_c = $this->required_strength;
        } else {
            $this->specified_strength_c = 0;
        }
    }
    public function specifiedStrengthD()
    {
        if ($this->age_d == 28) {
            $this->specified_strength_d = $this->required_strength;
        } else {
            $this->specified_strength_d = 0;
        }
    }
    public function specifiedStrengthE()
    {
        if ($this->age_e == 28) {
            $this->specified_strength_e = $this->required_strength;
        } else {
            $this->specified_strength_e = 0;
        }
    }
    public function specifiedStrengthF()
    {
        if ($this->age_f == 28) {
            $this->specified_strength_f = $this->required_strength;
        } else {
            $this->specified_strength_f = 0;
        }
    }
    public function specifiedStrengthG()
    {
        if ($this->age_g == 28) {
            $this->specified_strength_g = $this->required_strength;
        } else {
            $this->specified_strength_g = 0;
        }
    }
    public function specifiedStrengthH()
    {
        if ($this->age_h == 28) {
            $this->specified_strength_h = $this->required_strength;
        } else {
            $this->specified_strength_h = 0;
        }
    }
    public function specifiedStrengthI()
    {
        if ($this->age_i == 28) {
            $this->specified_strength_i = $this->required_strength;
        } else {
            $this->specified_strength_i = 0;
        }
    }
    public function specifiedStrengthJ()
    {
        if ($this->age_j == 28) {
            $this->specified_strength_j = $this->required_strength;
        } else {
            $this->specified_strength_j = 0;
        }
    }

    // ================== area of cycle ===================
    public function AreaCylA()
    {
        if ($this->diameter_a != null && $this->diameter_a_a != null) {
            $this->area_cyl_a = round(pow((($this->diameter_a + $this->diameter_a_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_a = 0;
        }
    }
    public function AreaCylB()
    {
        if ($this->diameter_b != null && $this->diameter_a_b != null) {
            $this->area_cyl_b = round(pow((($this->diameter_b + $this->diameter_a_b) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_b = 0;
        }
    }
    public function AreaCylC()
    {
        if ($this->diameter_c != null && $this->diameter_c_c != null) {
            $this->area_cyl_c = round(pow((($this->diameter_c + $this->diameter_a_c) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_c = 0;
        }
    }
    public function AreaCylD()
    {
        if ($this->diameter_d != null && $this->diameter_a_d != null) {
            $this->area_cyl_d = round(pow((($this->diameter_d + $this->diameter_a_d) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_d = 0;
        }
    }
    public function AreaCylE()
    {
        if ($this->diameter_e != null && $this->diameter_a_e != null) {
            $this->area_cyl_e = round(pow((($this->diameter_e + $this->diameter_a_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_e = 0;
        }
    }
    public function AreaCylF()
    {
        if ($this->diameter_f != null && $this->diameter_a_f != null) {
            $this->area_cyl_f = round(pow((($this->diameter_f + $this->diameter_a_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_f = 0;
        }
    }
    public function AreaCylG()
    {
        if ($this->diameter_g != null && $this->diameter_a_g != null) {
            $this->area_cyl_g = round(pow((($this->diameter_g + $this->diameter_a_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_g = 0;
        }
    }
    public function AreaCylH()
    {
        if ($this->diameter_h != null && $this->diameter_a_h != null) {
            $this->area_cyl_h = round(pow((($this->diameter_h + $this->diameter_a_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_h = 0;
        }
    }
    public function AreaCylI()
    {
        if ($this->diameter_i != null && $this->diameter_a_i != null) {
            $this->area_cyl_i = round(pow((($this->diameter_i + $this->diameter_a_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_i = 0;
        }
    }
    public function AreaCylJ()
    {
        if ($this->diameter_j != null && $this->diameter_a_j != null) {
            $this->area_cyl_j = round(pow((($this->diameter_j + $this->diameter_a_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_cyl_j = 0;
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
    public function measuredStrengthJ()
    {
        if ($this->max_load_j != null) {
            $this->measured_strength_j = round($this->max_load_j / ($this->area_cyl_j == 0 ? 1 : $this->area_cyl_j), -1);
        } else {
            $this->measured_strength_j = 0;
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
        ]);
    }

    public function storeData()
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
            'age' => 'required'
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
        if ($this->area_cyl_j) {
            $this->measuredStrengthJ();
        }

        // foreach ($this->fields as $field) {
        //     if ($this->area_cyl[$field]) {
        //         $this->measuredStrength($field);
        //     }
        // }

        $projects = Project::orderBy('id', 'DESC')->get();
        return view('livewire.templates.inspection-concrete.create-inspection-concrete-component', ['projects' => $projects])->layout('livewire.layouts.base');
    }
}
