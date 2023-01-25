<?php

namespace App\Http\Livewire\Templates\TemplatesOne;

use App\Models\Project;
use App\Models\TemplateOne;
use App\Models\TemplateOneData;
use App\Models\User;
use Livewire\Component;

class TemplateOneViewComponent extends Component
{
    public $fields = [], $i = 1, $j = 1;

    public $project_id, $client_id, $project_number, $date, $user_id, $remark, $created_by, $client_name, $weather, $est_wind, $est_rh, $slump_cone, $thermometer, $air_meter, $unit_weight_measure, $scale_id, $contractor, $mix_supplier, $plant, $mix_id, $design_strength, $required_strength, $specified_slump_min, $specified_slump_max, $specified_air_min, $specified_air_max, $conc_temp_min, $conc_temp_max, $cement_ib, $cementitious_malt, $water, $fine_aggregate, $course_aggregate, $max_aggregate, $admixture_one, $admixture_two, $admixture_three, $representative, $total_yds;

    public $test_no = [], $ticket_no = [], $truck_no = [], $truck_dispatched = [], $time_sample_taken = [], $time_truck_finished = [], $batch_size = [], $total_cumulative = [], $slump = [], $air_cont = [], $unit_wt = [], $air_temp = [], $conc_temp = [], $location = [], $water_added_before_test = [], $water_added_after_test = [], $cylinder_set_no = [], $wc_ratio = [], $relative_yield = [], $type = [], $dimensions = [], $cyls_cast = [], $age_days = [], $templateData = [];

    public function selectInfo()
    {
        $project = Project::where('id', $this->project_id)->first();
        $this->project_number = $project->project_number;
        $this->client_id = $project->client_id;
        $this->client_name = client($project->client_id)->name;
    }

    public function mount($file_id)
    {
        $file = TemplateOne::where('id', $file_id)->first();
        $this->project_name = project($file->project_id)->name;
        $this->name = client($file->client_id)->name;
        $this->client_name = client($file->client_id)->name;
        $this->Technician = user($file->user_id)->name;
        $this->file_id = $file_id;

        $this->project_id = $file->project_id;
        $this->client_id = $file->client_id;
        $this->project_number = $file->project_number;
        $this->date = $file->date;
        $this->user_id = $file->user_id;
        $this->weather = $file->weather;
        $this->est_wind = $file->est_wind;
        $this->est_rh = $file->est_rh;
        $this->slump_cone = $file->slump_cone;
        $this->thermometer = $file->thermometer;
        $this->air_meter = $file->air_meter;
        $this->unit_weight_measure = $file->unit_weight_measure;
        $this->scale_id = $file->scale_id;
        $this->general_location = $file->general_location;
        $this->contractor = $file->contractor;

        $this->mix_supplier = $file->mix_supplier;
        $this->plant = $file->plant;
        $this->mix_id = $file->mix_id;
        $this->design_strength = $file->design_strength;
        $this->required_strength = $file->required_strength;
        $this->specified_slump_min = $file->specified_slump_min;
        $this->specified_slump_max = $file->specified_slump_max;
        $this->specified_air_min = $file->specified_air_min;
        $this->specified_air_max = $file->specified_air_max;
        $this->conc_temp_min = $file->conc_temp_min;
        $this->conc_temp_max = $file->conc_temp_max;
        $this->cement_ib = $file->cement_ib;
        $this->cementitious_malt = $file->cementitious_malt;
        $this->water = $file->water;
        $this->fine_aggregate = $file->fine_aggregate;
        $this->course_aggregate = $file->course_aggregate;
        $this->max_aggregate = $file->max_aggregate;
        $this->admixture_one = $file->admixture_one;
        $this->admixture_two = $file->admixture_two;
        $this->admixture_three = $file->admixture_three;
        $this->remark = $file->remark;
        $this->total_yds = $file->total_yds;
        $this->representative = $file->representative;

        $templateOnes = TemplateOneData::where('template_one_id', $file->id)->get();
        $this->i = $templateOnes->count();
        foreach ($templateOnes as $key => $template) {
            array_push($this->test_no, $template->test_no);
            array_push($this->ticket_no, $template->ticket_no);
            array_push($this->truck_no, $template->truck_no);
            array_push($this->truck_dispatched, $template->truck_dispatched);
            array_push($this->time_sample_taken, $template->time_sample_taken);
            array_push($this->time_truck_finished, $template->time_truck_finished);
            array_push($this->batch_size, $template->batch_size);
            array_push($this->total_cumulative, $template->total_cumulative);
            array_push($this->slump, $template->slump);
            array_push($this->air_cont, $template->air_cont);
            array_push($this->unit_wt, $template->unit_wt);
            array_push($this->air_temp, $template->air_temp);
            array_push($this->conc_temp, $template->conc_temp);
            array_push($this->location, $template->location);
            array_push($this->water_added_before_test, $template->water_added_before_test);
            array_push($this->water_added_after_test, $template->water_added_after_test);
            array_push($this->cylinder_set_no, $template->cylinder_set_no);
            array_push($this->wc_ratio, $template->wc_ratio);
            array_push($this->relative_yield, $template->relative_yield);
            array_push($this->type, $template->type);
            array_push($this->dimensions, $template->dimensions);
            array_push($this->cyls_cast, $template->cyls_cast);
            array_push($this->age_days, $template->age_days);
            array_push($this->templateData, $template->id);
            array_push($this->fields, $key);
        }
        $this->compaction_requirement = $file->compaction_requirement;
        $this->requirment_plus = $file->requirment_plus;
        $this->requirment_minus = $file->requirment_minus;
        $this->general_info = $file->general_info;
        $this->remark = $file->remark;
    }
    
    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->get();

        return view('livewire.templates.templates-one.template-one-view-component', ['projects'=>$projects, 'supervisors'=>$supervisors])->layout('livewire.layouts.base');
    }
}
