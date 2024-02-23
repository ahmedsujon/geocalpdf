<?php

namespace App\Http\Livewire\Templates\CompressiveStrength;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\CompressiveStrength;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CreateCompressiveStrengthComponent extends Component
{
    public $project_number, $client_name, $project_id, $client_id, $user_id, $office_address, $contractid, $region, $contract_id_seq, $project_location,
        $concrete_supplier, $cdot_mix, $item, $description, $placed_at, $material_placed_in_line_item, $batch_ticket,
        $field_tester_name, $entrained_air, $slump, $concrete_temperature, $unit_weight, $yield, $wc_ratio,

        $specimen_for, $mold_date, $time, $hours_initial_cure_in_molds, $initial_cure_temperature, $final_cure_method,
        $location_stored_in_field, $manner_of_protection, $maintained_moist_and_temperature_by, $date_time_molds_removed,
        $field_comments, $sample_id, $set_no, $conc_class, $day_break_date, $number_of_specimens,
        $for_cast_specimens,

        $date_submitted_to_lab, $specimens_tested_at, $required_strength, $day_average_compressive_strength,
        $type_of_specimen_submitted, $cubes, $other, $represented_quantity, $previous_qty, $this_sheet, $total_to_date,

        $break_date_a, $age_a, $diameter_one_a, $diameter_two_a, $area_a, $maximum_load_a, $psi_a,
        $break_type_a, $aggregate_fractured_a,

        $break_date_b, $age_b, $diameter_one_b, $diameter_two_b, $area_b, $maximum_load_b, $psi_b,
        $break_type_b, $aggregate_fractured_b,

        $break_date_c, $age_c, $diameter_one_c, $diameter_two_c, $area_c, $maximum_load_c, $psi_c,
        $break_type_c, $aggregate_fractured_c,

        $break_date_d, $age_d, $diameter_one_d, $diameter_two_d, $area_d, $maximum_load_d, $psi_d,
        $break_type_d, $aggregate_fractured_d,

        $break_date_e, $age_e, $diameter_one_e, $diameter_two_e, $area_e, $maximum_load_e, $psi_e,
        $break_type_e, $aggregate_fractured_e,

        $break_date_f, $age_f, $diameter_one_f, $diameter_two_f, $area_f, $maximum_load_f, $psi_f,
        $break_type_f, $aggregate_fractured_f,

        $break_date_g, $age_g, $diameter_one_g, $diameter_two_g, $area_g, $maximum_load_g, $psi_g,
        $break_type_g, $aggregate_fractured_g,

        $lab_comments, $submitted_by, $approved_by, $email, $slump_cone_id, $thermometer_id, $air_meter_id,
        $unit_weight_measure_id, $scale_id, $publish_status, $status, $send_to_client, $remark, $responsible_person = [];

    // ============== get project information ========
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

    // ======== Break Date Calculation ========
    public function breakDateA()
    {
        if ($this->age_a != null) {
            $this->break_date_a = Carbon::parse($this->mold_date)->addDays($this->age_a)->format('Y-m-d');
        } else {
            $this->break_date_a = null;
        }
    }
    public function breakDateB()
    {
        if ($this->age_b != null) {
            $this->break_date_b = Carbon::parse($this->mold_date)->addDays($this->age_b)->format('Y-m-d');
        } else {
            $this->break_date_b = null;
        }
    }
    public function breakDateC()
    {
        if ($this->age_c != null) {
            $this->break_date_c = Carbon::parse($this->mold_date)->addDays($this->age_c)->format('Y-m-d');
        } else {
            $this->break_date_c = null;
        }
    }
    public function breakDateD()
    {
        if ($this->age_d != null) {
            $this->break_date_d = Carbon::parse($this->mold_date)->addDays($this->age_d)->format('Y-m-d');
        } else {
            $this->break_date_d = null;
        }
    }
    public function breakDateE()
    {
        if ($this->age_e != null) {
            $this->break_date_e = Carbon::parse($this->mold_date)->addDays($this->age_e)->format('Y-m-d');
        } else {
            $this->break_date_e = null;
        }
    }
    public function breakDateF()
    {
        if ($this->age_f != null) {
            $this->break_date_f = Carbon::parse($this->mold_date)->addDays($this->age_f)->format('Y-m-d');
        } else {
            $this->break_date_f = null;
        }
    }
    public function breakDateG()
    {
        if ($this->age_g != null) {
            $this->break_date_g = Carbon::parse($this->mold_date)->addDays($this->age_g)->format('Y-m-d');
        } else {
            $this->break_date_g = null;
        }
    }

    // ======== Area Calculation ========
    public function AreaCylA()
    {
        if ($this->diameter_one_a != null && $this->diameter_two_a != null) {
            $this->area_a = number_format(pow((($this->diameter_one_a + $this->diameter_two_a) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_a = 0;
        }
    }
    public function AreaCylB()
    {
        if ($this->diameter_one_b != null && $this->diameter_two_b != null) {
            $this->area_b = number_format(pow((($this->diameter_one_b + $this->diameter_two_b) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_b = 0;
        }
    }
    public function AreaCylC()
    {
        if ($this->diameter_one_c != null && $this->diameter_two_c != null) {
            $this->area_c = number_format(pow((($this->diameter_one_c + $this->diameter_two_c) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_c = 0;
        }
    }
    public function AreaCylD()
    {
        if ($this->diameter_one_d != null && $this->diameter_two_d != null) {
            $this->area_d = number_format(pow((($this->diameter_one_d + $this->diameter_two_d) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_d = 0;
        }
    }
    public function AreaCylE()
    {
        if ($this->diameter_one_e != null && $this->diameter_two_e != null) {
            $this->area_e = number_format(pow((($this->diameter_one_e + $this->diameter_two_e) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_e = 0;
        }
    }
    public function AreaCylF()
    {
        if ($this->diameter_one_f != null && $this->diameter_two_f != null) {
            $this->area_f = number_format(pow((($this->diameter_one_f + $this->diameter_two_f) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_f = 0;
        }
    }
    public function AreaCylG()
    {
        if ($this->diameter_one_g != null && $this->diameter_two_g != null) {
            $this->area_g = number_format(pow((($this->diameter_one_g + $this->diameter_two_g) / 2 / 2), 2) * 3.14159265, 2);
        } else {
            $this->area_g = 0;
        }
    }

    // ======== PSI Calculation ========
    public function psiCalculationA()
    {
        if ($this->maximum_load_a != null) {
            $this->psi_a = round($this->maximum_load_a / ($this->area_a == 0 ? 1 : $this->area_a), -1);
        } else {
            $this->psi_a = null;
        }
    }
    public function psiCalculationB()
    {
        if ($this->maximum_load_b != null) {
            $this->psi_b = round($this->maximum_load_b / ($this->area_b == 0 ? 1 : $this->area_b), -1);
        } else {
            $this->psi_b = null;
        }
    }
    public function psiCalculationC()
    {
        if ($this->maximum_load_c != null) {
            $this->psi_c = round($this->maximum_load_c / ($this->area_c == 0 ? 1 : $this->area_c), -1);
        } else {
            $this->psi_c = null;
        }
    }
    public function psiCalculationD()
    {
        if ($this->maximum_load_d != null) {
            $this->psi_d = round($this->maximum_load_d / ($this->area_d == 0 ? 1 : $this->area_d), -1);
        } else {
            $this->psi_d = null;
        }
    }
    public function psiCalculationE()
    {
        if ($this->maximum_load_e != null) {
            $this->psi_e = round($this->maximum_load_e / ($this->area_e == 0 ? 1 : $this->area_e), -1);
        } else {
            $this->psi_e = null;
        }
    }
    public function psiCalculationF()
    {
        if ($this->maximum_load_f != null) {
            $this->psi_f = round($this->maximum_load_f / ($this->area_f == 0 ? 1 : $this->area_f), -1);
        } else {
            $this->psi_f = null;
        }
    }
    public function psiCalculationG()
    {
        if ($this->maximum_load_g != null) {
            $this->psi_g = round($this->maximum_load_g / ($this->area_g == 0 ? 1 : $this->area_g), -1);
        } else {
            $this->psi_g = null;
        }
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_id' => 'required',
            'project_location' => 'required',
            'responsible_person' => 'required',
            'office_address' => 'required',
            'mold_date' => 'required',
        ]);
    }

    public function storeData($publish_status)
    {
        $data = new CompressiveStrength();
        $data->project_id = $this->project_id;
        $data->client_id = $this->client_id;
        $data->user_id = Auth::user()->id;
        $data->project_number = $this->project_number;
        $data->project_location = $this->project_location;
        $data->office_address = $this->office_address;
        $data->contractid = $this->contractid;
        $data->region = $this->region;
        $data->contract_id_seq = $this->contract_id_seq;

        $data->concrete_supplier = $this->concrete_supplier;
        $data->cdot_mix = $this->cdot_mix;
        $data->item = $this->item;
        $data->description = $this->description;

        $data->placed_at = $this->placed_at;
        $data->material_placed_in_line_item = $this->material_placed_in_line_item;
        $data->batch_ticket = $this->batch_ticket;
        $data->field_tester_name = $this->field_tester_name;
        $data->entrained_air = $this->entrained_air;
        $data->slump = $this->slump;
        $data->concrete_temperature = $this->concrete_temperature;
        $data->unit_weight = $this->unit_weight;
        $data->yield = $this->yield;
        $data->wc_ratio = $this->wc_ratio;

        $data->specimen_for = $this->specimen_for;
        $data->mold_date = $this->mold_date;
        $data->time = $this->time;
        $data->hours_initial_cure_in_molds = $this->hours_initial_cure_in_molds;
        $data->initial_cure_temperature = $this->initial_cure_temperature;
        $data->final_cure_method = $this->final_cure_method;

        $data->location_stored_in_field = $this->location_stored_in_field;
        $data->manner_of_protection = $this->manner_of_protection;
        $data->maintained_moist_and_temperature_by = $this->maintained_moist_and_temperature_by;
        $data->date_time_molds_removed = $this->date_time_molds_removed;
        $data->field_comments = $this->field_comments;

        $data->sample_id = $this->sample_id;
        $data->set_no = $this->set_no;
        $data->conc_class = $this->conc_class;
        $data->day_break_date = $this->day_break_date;
        $data->number_of_specimens = $this->number_of_specimens;
        $data->for_cast_specimens = $this->for_cast_specimens;

        $data->date_submitted_to_lab = $this->date_submitted_to_lab;
        $data->specimens_tested_at = $this->specimens_tested_at;
        $data->required_strength = $this->required_strength;
        $data->day_average_compressive_strength = $this->day_average_compressive_strength;
        $data->type_of_specimen_submitted = $this->type_of_specimen_submitted;
        $data->cubes = $this->cubes;
        $data->other = $this->other;
        $data->represented_quantity = $this->represented_quantity;
        $data->previous_qty = $this->previous_qty;
        $data->this_sheet = $this->this_sheet;
        $data->total_to_date = $this->total_to_date;

        $data->break_date_a = $this->break_date_a;
        $data->age_a = $this->age_a;
        $data->diameter_one_a = $this->diameter_one_a;
        $data->diameter_two_a = $this->diameter_two_a;
        $data->area_a = $this->area_a;
        $data->maximum_load_a = $this->maximum_load_a;
        $data->psi_a = $this->psi_a;
        $data->break_type_a = $this->break_type_a;
        $data->aggregate_fractured_a = $this->aggregate_fractured_a;

        $data->break_date_b = $this->break_date_b;
        $data->age_b = $this->age_b;
        $data->diameter_one_b = $this->diameter_one_b;
        $data->diameter_two_b = $this->diameter_two_b;
        $data->area_b = $this->area_b;
        $data->maximum_load_b = $this->maximum_load_b;
        $data->psi_b = $this->psi_b;
        $data->break_type_b = $this->break_type_b;
        $data->aggregate_fractured_b = $this->aggregate_fractured_b;

        $data->break_date_b = $this->break_date_b;
        $data->age_b = $this->age_b;
        $data->diameter_one_b = $this->diameter_one_b;
        $data->diameter_two_b = $this->diameter_two_b;
        $data->area_b = $this->area_b;
        $data->maximum_load_b = $this->maximum_load_b;
        $data->psi_b = $this->psi_b;
        $data->break_type_b = $this->break_type_b;
        $data->aggregate_fractured_b = $this->aggregate_fractured_b;

        $data->break_date_b = $this->break_date_b;
        $data->age_b = $this->age_b;
        $data->diameter_one_b = $this->diameter_one_b;
        $data->diameter_two_b = $this->diameter_two_b;
        $data->area_b = $this->area_b;
        $data->maximum_load_b = $this->maximum_load_b;
        $data->psi_b = $this->psi_b;
        $data->break_type_b = $this->break_type_b;
        $data->aggregate_fractured_b = $this->aggregate_fractured_b;

        $data->break_date_c = $this->break_date_c;
        $data->age_c = $this->age_c;
        $data->diameter_one_c = $this->diameter_one_c;
        $data->diameter_two_c = $this->diameter_two_c;
        $data->area_c = $this->area_c;
        $data->maximum_load_c = $this->maximum_load_c;
        $data->psi_c = $this->psi_c;
        $data->break_type_c = $this->break_type_c;
        $data->aggregate_fractured_c = $this->aggregate_fractured_c;

        $data->break_date_d = $this->break_date_d;
        $data->age_d = $this->age_d;
        $data->diameter_one_d = $this->diameter_one_d;
        $data->diameter_two_d = $this->diameter_two_d;
        $data->area_d = $this->area_d;
        $data->maximum_load_d = $this->maximum_load_d;
        $data->psi_d = $this->psi_d;
        $data->break_type_d = $this->break_type_d;
        $data->aggregate_fractured_d = $this->aggregate_fractured_d;

        $data->break_date_e = $this->break_date_e;
        $data->age_e = $this->age_e;
        $data->diameter_one_e = $this->diameter_one_e;
        $data->diameter_two_e = $this->diameter_two_e;
        $data->area_e = $this->area_e;
        $data->maximum_load_e = $this->maximum_load_e;
        $data->psi_e = $this->psi_e;
        $data->break_type_e = $this->break_type_e;
        $data->aggregate_fractured_e = $this->aggregate_fractured_e;

        $data->break_date_f = $this->break_date_f;
        $data->age_f = $this->age_f;
        $data->diameter_one_f = $this->diameter_one_f;
        $data->diameter_two_f = $this->diameter_two_f;
        $data->area_f = $this->area_f;
        $data->maximum_load_f = $this->maximum_load_f;
        $data->psi_f = $this->psi_f;
        $data->break_type_f = $this->break_type_f;
        $data->aggregate_fractured_f = $this->aggregate_fractured_f;

        $data->break_date_g = $this->break_date_g;
        $data->age_g = $this->age_g;
        $data->diameter_one_g = $this->diameter_one_g;
        $data->diameter_two_g = $this->diameter_two_g;
        $data->area_g = $this->area_g;
        $data->maximum_load_g = $this->maximum_load_g;
        $data->psi_g = $this->psi_g;
        $data->break_type_g = $this->break_type_g;
        $data->aggregate_fractured_g = $this->aggregate_fractured_g;

        $data->lab_comments = $this->lab_comments;
        $data->submitted_by = $this->submitted_by;
        $data->approved_by = $this->approved_by;
        $data->email = $this->email;
        $data->slump_cone_id = $this->slump_cone_id;
        $data->thermometer_id = $this->thermometer_id;
        $data->air_meter_id = $this->air_meter_id;
        $data->unit_weight_measure_id = $this->unit_weight_measure_id;
        $data->scale_id = $this->scale_id;
        $data->remark = $this->remark;
        $data->status = $this->status;
        $data->created_by = Auth::user()->id;
        $data->responsible_person = json_encode($this->responsible_person);
        $data->publish_status = $publish_status;
        $data->save();
        if ($publish_status === 'publish') {
            $this->validate([
                'project_id' => 'required',
                'project_location' => 'required',
                'responsible_person' => 'required',
                'office_address' => 'required',
                'mold_date' => 'required',
            ], [
                'project_id.required' => 'Project name is required',
            ]);
            // send Mail
            if ($this->responsible_person) {
                $persons = $this->responsible_person;
                $f_id = $data->id;
                $auth_user_id = Auth::user()->id;
                dispatch(function () use ($persons, $f_id, $auth_user_id) {
                    foreach ($persons as $key => $re_id) {
                        $auth_user = User::find($auth_user_id);
                        $user = User::find($re_id);
                        $mailData['email'] = $user->email;
                        $mailData['name'] = $auth_user->name;
                        $mailData['role_id'] = $auth_user->role_id;
                        $mailData['id'] = $f_id;
                        $mailData['subject'] = 'New file waiting for your review';
                        Mail::send('emails.mail_compressive_strength', $mailData, function ($message) use ($mailData) {
                            $message->to($mailData['email'])
                                ->subject($mailData['subject']);
                        });
                    }
                });
            }
        } else {
            $this->validate([
                'project_id' => 'required',
                'office_address' => 'required',
                'mold_date' => 'required',
            ], [
                'project_id.required' => 'Project name is required',
            ]);
        }
        session()->flash('message', 'Compressive strength file created successfully');
        return redirect()->route('template.compressive.strength');
    }
    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        return view(
            'livewire.templates.compressive-strength.create-compressive-strength-component',
            ['projects' => $projects, 'supervisors' => $supervisors]
        )->layout('livewire.layouts.base');
    }
}
