<?php

namespace App\Http\Livewire\Templates\ConcreteTestResult;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\ConcreteTestResult;

class ViewConcreteTestResultComponent extends Component
{
    public $contactid, $office_address, $project_id, $client_id, $client_name, $user_id, $project_number, $project_location, $date_submited, $region, $item,
        $class_name, $design_mix_no, $batch_plant, $structure, $supplier, $slump, $inches_max, $inches_min, $compressive_strength,

        $location_test_a, $date_placed_a, $ticket_no_a, $batched_a, $placed_a, $temp_a, $slump_a, $total_air_a,
        $unit_mass_a, $yeild_a, $calculated_wc_ratio_a, $cylinders_cast_fs_no_a, $set_no_a, $se_a,

        $location_test_b, $date_placed_b, $ticket_no_b, $batched_b, $placed_b, $temp_b, $slump_b, $total_air_b,
        $unit_mass_b, $yeild_b, $calculated_wc_ratio_b, $cylinders_cast_fs_no_b, $set_no_b, $se_b,

        $location_test_c, $date_placed_c, $ticket_no_c, $batched_c, $placed_c, $temp_c, $slump_c, $total_air_c,
        $unit_mass_c, $yeild_c, $calculated_wc_ratio_c, $cylinders_cast_fs_no_c, $set_no_c, $se_c,

        $location_test_d, $date_placed_d, $ticket_no_d, $batched_d, $placed_d, $temp_d, $slump_d, $total_air_d,
        $unit_mass_d, $yeild_d, $calculated_wc_ratio_d, $cylinders_cast_fs_no_d, $set_no_d, $se_d,

        $location_test_e, $date_placed_e, $ticket_no_e, $batched_e, $placed_e, $temp_e, $slump_e, $total_air_e,
        $unit_mass_e, $yeild_e, $calculated_wc_ratio_e, $cylinders_cast_fs_no_e, $set_no_e, $se_e,

        $location_test_f, $date_placed_f, $ticket_no_f, $batched_f, $placed_f, $temp_f, $slump_f, $total_air_f,
        $unit_mass_f, $yeild_f, $calculated_wc_ratio_f, $cylinders_cast_fs_no_f, $set_no_f, $se_f,

        $location_test_g, $date_placed_g, $ticket_no_g, $batched_g, $placed_g, $temp_g, $slump_g, $total_air_g,
        $unit_mass_g, $yeild_g, $calculated_wc_ratio_g, $cylinders_cast_fs_no_g, $set_no_g, $se_g,

        $location_test_h, $date_placed_h, $ticket_no_h, $batched_h, $placed_h, $temp_h, $slump_h, $total_air_h,
        $unit_mass_h, $yeild_h, $calculated_wc_ratio_h, $cylinders_cast_fs_no_h, $set_no_h, $se_h,

        $location_test_i, $date_placed_i, $ticket_no_i, $batched_i, $placed_i, $temp_i, $slump_i, $total_air_i,
        $unit_mass_i, $yeild_i, $calculated_wc_ratio_i, $cylinders_cast_fs_no_i, $set_no_i, $se_i,

        $location_test_j, $date_placed_j, $ticket_no_j, $batched_j, $placed_j, $temp_j, $slump_j, $total_air_j,
        $unit_mass_j, $yeild_j, $calculated_wc_ratio_j, $cylinders_cast_fs_no_j, $set_no_j, $se_j,

        $location_test_k, $date_placed_k, $ticket_no_k, $batched_k, $placed_k, $temp_k, $slump_k, $total_air_k,
        $unit_mass_k, $yeild_k, $calculated_wc_ratio_k, $cylinders_cast_fs_no_k, $set_no_k, $se_k,

        $location_test_l, $date_placed_l, $ticket_no_l, $batched_l, $placed_l, $temp_l, $slump_l, $total_air_l,
        $unit_mass_l, $yeild_l, $calculated_wc_ratio_l, $cylinders_cast_fs_no_l, $set_no_l, $se_l,

        $location_test_m, $date_placed_m, $ticket_no_m, $batched_m, $placed_m, $temp_m, $slump_m, $total_air_m,
        $unit_mass_m, $yeild_m, $calculated_wc_ratio_m, $cylinders_cast_fs_no_m, $set_no_m, $se_m,

        $location_test_n, $date_placed_n, $ticket_no_n, $batched_n, $placed_n, $temp_n, $slump_n, $total_air_n,
        $unit_mass_n, $yeild_n, $calculated_wc_ratio_n, $cylinders_cast_fs_no_n, $set_no_n, $se_n,

        $location_test_o, $date_placed_o, $ticket_no_o, $batched_o, $placed_o, $temp_o, $slump_o, $total_air_o,
        $unit_mass_o, $yeild_o, $calculated_wc_ratio_o, $cylinders_cast_fs_no_o, $set_no_o, $se_o,

        $tester, $tester_title, $project_engineer, $signature, $title, $file_id,
        $remark, $status, $created_by, $responsible_person = [];
    public function mount($file_id)
    {
        $file = ConcreteTestResult::where('id', $file_id)->first();
        $this->project_id = $file->project_id;
        $this->file_id = $file_id;
        $this->client_id = $file->client_id;
        $this->client_name = client($file->client_id)->name;
        $this->project_number = $file->project_number;
        $this->contactid = $file->contactid;

        $this->item = $file->item;
        $this->class_name = $file->class_name;
        $this->design_mix_no = $file->design_mix_no;
        $this->batch_plant = $file->batch_plant;
        $this->structure = $file->structure;
        $this->supplier = $file->supplier;
        $this->slump = $file->slump;
        $this->inches_max = $file->inches_max;
        $this->inches_min = $file->inches_min;
        $this->compressive_strength = $file->compressive_strength;

        $this->location_test_a = $file->location_test_a;
        $this->date_placed_a = $file->date_placed_a;
        $this->ticket_no_a = $file->ticket_no_a;
        $this->batched_a = $file->batched_a;
        $this->placed_a = $file->placed_a;
        $this->temp_a = $file->temp_a;
        $this->slump_a = $file->slump_a;
        $this->total_air_a = $file->total_air_a;
        $this->unit_mass_a = $file->unit_mass_a;
        $this->yeild_a = $file->yeild_a;
        $this->calculated_wc_ratio_a = $file->calculated_wc_ratio_a;
        $this->cylinders_cast_fs_no_a = $file->cylinders_cast_fs_no_a;
        $this->set_no_a = $file->set_no_a;
        $this->se_a = $file->se_a;

        $this->location_test_b = $file->location_test_b;
        $this->date_placed_b = $file->date_placed_b;
        $this->ticket_no_b = $file->ticket_no_b;
        $this->batched_b = $file->batched_b;
        $this->placed_b = $file->placed_b;
        $this->temp_b = $file->temp_b;
        $this->slump_b = $file->slump_b;
        $this->total_air_b = $file->total_air_b;
        $this->unit_mass_b = $file->unit_mass_b;
        $this->yeild_b = $file->yeild_b;
        $this->calculated_wc_ratio_b = $file->calculated_wc_ratio_b;
        $this->cylinders_cast_fs_no_b = $file->cylinders_cast_fs_no_b;
        $this->set_no_b = $file->set_no_b;
        $this->se_b = $file->se_b;

        $this->location_test_c = $file->location_test_c;
        $this->date_placed_c = $file->date_placed_c;
        $this->ticket_no_c = $file->ticket_no_c;
        $this->batched_c = $file->batched_c;
        $this->placed_c = $file->placed_c;
        $this->temp_c = $file->temp_c;
        $this->slump_c = $file->slump_c;
        $this->total_air_c = $file->total_air_c;
        $this->unit_mass_c = $file->unit_mass_c;
        $this->yeild_c = $file->yeild_c;
        $this->calculated_wc_ratio_c = $file->calculated_wc_ratio_c;
        $this->cylinders_cast_fs_no_c = $file->cylinders_cast_fs_no_c;
        $this->set_no_c = $file->set_no_c;
        $this->se_c = $file->se_c;

        $this->location_test_d = $file->location_test_d;
        $this->date_placed_d = $file->date_placed_d;
        $this->ticket_no_d = $file->ticket_no_d;
        $this->batched_d = $file->batched_d;
        $this->placed_d = $file->placed_d;
        $this->temp_d = $file->temp_d;
        $this->slump_d = $file->slump_d;
        $this->total_air_d = $file->total_air_d;
        $this->unit_mass_d = $file->unit_mass_d;
        $this->yeild_d = $file->yeild_d;
        $this->calculated_wc_ratio_d = $file->calculated_wc_ratio_d;
        $this->cylinders_cast_fs_no_d = $file->cylinders_cast_fs_no_d;
        $this->set_no_d = $file->set_no_d;
        $this->se_d = $file->se_d;

        $this->location_test_e = $file->location_test_e;
        $this->date_placed_e = $file->date_placed_e;
        $this->ticket_no_e = $file->ticket_no_e;
        $this->batched_e = $file->batched_e;
        $this->placed_e = $file->placed_e;
        $this->temp_e = $file->temp_e;
        $this->slump_e = $file->slump_e;
        $this->total_air_e = $file->total_air_e;
        $this->unit_mass_e = $file->unit_mass_e;
        $this->yeild_e = $file->yeild_e;
        $this->calculated_wc_ratio_e = $file->calculated_wc_ratio_e;
        $this->cylinders_cast_fs_no_e = $file->cylinders_cast_fs_no_e;
        $this->set_no_e = $file->set_no_e;
        $this->se_e = $file->se_e;

        $this->location_test_f = $file->location_test_f;
        $this->date_placed_f = $file->date_placed_f;
        $this->ticket_no_f = $file->ticket_no_f;
        $this->batched_f = $file->batched_f;
        $this->placed_f = $file->placed_f;
        $this->temp_f = $file->temp_f;
        $this->slump_f = $file->slump_f;
        $this->total_air_f = $file->total_air_f;
        $this->unit_mass_f = $file->unit_mass_f;
        $this->yeild_f = $file->yeild_f;
        $this->calculated_wc_ratio_f = $file->calculated_wc_ratio_f;
        $this->cylinders_cast_fs_no_f = $file->cylinders_cast_fs_no_f;
        $this->set_no_f = $file->set_no_f;
        $this->se_f = $file->se_f;

        $this->location_test_g = $file->location_test_g;
        $this->date_placed_g = $file->date_placed_g;
        $this->ticket_no_g = $file->ticket_no_g;
        $this->batched_g = $file->batched_g;
        $this->placed_g = $file->placed_g;
        $this->temp_g = $file->temp_g;
        $this->slump_g = $file->slump_g;
        $this->total_air_g = $file->total_air_g;
        $this->unit_mass_g = $file->unit_mass_g;
        $this->yeild_g = $file->yeild_g;
        $this->calculated_wc_ratio_g = $file->calculated_wc_ratio_g;
        $this->cylinders_cast_fs_no_g = $file->cylinders_cast_fs_no_g;
        $this->set_no_g = $file->set_no_g;
        $this->se_g = $file->se_g;

        $this->location_test_h = $file->location_test_h;
        $this->date_placed_h = $file->date_placed_h;
        $this->ticket_no_h = $file->ticket_no_h;
        $this->batched_h = $file->batched_h;
        $this->placed_h = $file->placed_h;
        $this->temp_h = $file->temp_h;
        $this->slump_h = $file->slump_h;
        $this->total_air_h = $file->total_air_h;
        $this->unit_mass_h = $file->unit_mass_h;
        $this->yeild_h = $file->yeild_h;
        $this->calculated_wc_ratio_h = $file->calculated_wc_ratio_h;
        $this->cylinders_cast_fs_no_h = $file->cylinders_cast_fs_no_h;
        $this->set_no_h = $file->set_no_h;
        $this->se_h = $file->se_h;

        $this->location_test_i = $file->location_test_i;
        $this->date_placed_i = $file->date_placed_i;
        $this->ticket_no_i = $file->ticket_no_i;
        $this->batched_i = $file->batched_i;
        $this->placed_i = $file->placed_i;
        $this->temp_i = $file->temp_i;
        $this->slump_i = $file->slump_i;
        $this->total_air_i = $file->total_air_i;
        $this->unit_mass_i = $file->unit_mass_i;
        $this->yeild_i = $file->yeild_i;
        $this->calculated_wc_ratio_i = $file->calculated_wc_ratio_i;
        $this->cylinders_cast_fs_no_i = $file->cylinders_cast_fs_no_i;
        $this->set_no_i = $file->set_no_i;
        $this->se_i = $file->se_i;

        $this->location_test_j = $file->location_test_j;
        $this->date_placed_j = $file->date_placed_j;
        $this->ticket_no_j = $file->ticket_no_j;
        $this->batched_j = $file->batched_j;
        $this->placed_j = $file->placed_j;
        $this->temp_j = $file->temp_j;
        $this->slump_j = $file->slump_j;
        $this->total_air_j = $file->total_air_j;
        $this->unit_mass_j = $file->unit_mass_j;
        $this->yeild_j = $file->yeild_j;
        $this->calculated_wc_ratio_j = $file->calculated_wc_ratio_j;
        $this->cylinders_cast_fs_no_j = $file->cylinders_cast_fs_no_j;
        $this->set_no_j = $file->set_no_j;
        $this->se_j = $file->se_j;

        $this->location_test_k = $file->location_test_k;
        $this->date_placed_k = $file->date_placed_k;
        $this->ticket_no_k = $file->ticket_no_k;
        $this->batched_k = $file->batched_k;
        $this->placed_k = $file->placed_k;
        $this->temp_k = $file->temp_k;
        $this->slump_k = $file->slump_k;
        $this->total_air_k = $file->total_air_k;
        $this->unit_mass_k = $file->unit_mass_k;
        $this->yeild_k = $file->yeild_k;
        $this->calculated_wc_ratio_k = $file->calculated_wc_ratio_k;
        $this->cylinders_cast_fs_no_k = $file->cylinders_cast_fs_no_k;
        $this->set_no_k = $file->set_no_k;
        $this->se_k = $file->se_k;

        $this->location_test_l = $file->location_test_l;
        $this->date_placed_l = $file->date_placed_l;
        $this->ticket_no_l = $file->ticket_no_l;
        $this->batched_l = $file->batched_l;
        $this->placed_l = $file->placed_l;
        $this->temp_l = $file->temp_l;
        $this->slump_l = $file->slump_l;
        $this->total_air_l = $file->total_air_l;
        $this->unit_mass_l = $file->unit_mass_l;
        $this->yeild_l = $file->yeild_l;
        $this->calculated_wc_ratio_l = $file->calculated_wc_ratio_l;
        $this->cylinders_cast_fs_no_l = $file->cylinders_cast_fs_no_l;
        $this->set_no_l = $file->set_no_l;
        $this->se_l = $file->se_l;

        $this->location_test_m = $file->location_test_m;
        $this->date_placed_m = $file->date_placed_m;
        $this->ticket_no_m = $file->ticket_no_m;
        $this->batched_m = $file->batched_m;
        $this->placed_m = $file->placed_m;
        $this->temp_m = $file->temp_m;
        $this->slump_m = $file->slump_m;
        $this->total_air_m = $file->total_air_m;
        $this->unit_mass_m = $file->unit_mass_m;
        $this->yeild_m = $file->yeild_m;
        $this->calculated_wc_ratio_m = $file->calculated_wc_ratio_m;
        $this->cylinders_cast_fs_no_m = $file->cylinders_cast_fs_no_m;
        $this->set_no_m = $file->set_no_m;
        $this->se_m = $file->se_m;

        $this->location_test_n = $file->location_test_n;
        $this->date_placed_n = $file->date_placed_n;
        $this->ticket_no_n = $file->ticket_no_n;
        $this->batched_n = $file->batched_n;
        $this->placed_n = $file->placed_n;
        $this->temp_n = $file->temp_n;
        $this->slump_n = $file->slump_n;
        $this->total_air_n = $file->total_air_n;
        $this->unit_mass_n = $file->unit_mass_n;
        $this->yeild_n = $file->yeild_n;
        $this->calculated_wc_ratio_n = $file->calculated_wc_ratio_n;
        $this->cylinders_cast_fs_no_n = $file->cylinders_cast_fs_no_n;
        $this->set_no_n = $file->set_no_n;
        $this->se_n = $file->se_n;

        $this->location_test_o = $file->location_test_o;
        $this->date_placed_o = $file->date_placed_o;
        $this->ticket_no_o = $file->ticket_no_o;
        $this->batched_o = $file->batched_o;
        $this->placed_o = $file->placed_o;
        $this->temp_o = $file->temp_o;
        $this->slump_o = $file->slump_o;
        $this->total_air_o = $file->total_air_o;
        $this->unit_mass_o = $file->unit_mass_o;
        $this->yeild_o = $file->yeild_o;
        $this->calculated_wc_ratio_o = $file->calculated_wc_ratio_o;
        $this->cylinders_cast_fs_no_o = $file->cylinders_cast_fs_no_o;
        $this->set_no_o = $file->set_no_o;
        $this->se_o = $file->se_o;

        $this->tester = $file->tester;
        $this->tester_title = $file->tester_title;
        $this->project_engineer = $file->project_engineer;
        $this->signature = $file->signature;
        $this->title = $file->title;

        $this->remark = $file->remark;
        $this->status = $file->status;
    }
    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        return view('livewire.templates.concrete-test-result.view-concrete-test-result-component', ['projects' => $projects, 'supervisors' => $supervisors])->layout('livewire.layouts.base');
    }
}
