<?php

namespace App\Http\Livewire\InspectionOfConcrete;

use App\Models\Project;
use Livewire\Component;

class AddConcreteComponent extends Component
{
    public $project_id, $client_id, $client_name, $project_number, $office_address, $cylinder_id, $date, $supplier, $plant, $sampled_by, $created_by, $type_of_structure, $general_location, $specific_location, $mix_id, $truck_no, $ticket_no, $batch_time, $sample_time, $ttf_unloading, $ambient_temp, $yards_at_sampling, $total_yard_placement, $water_added, $water_cement_ratio, $air_content, $slump, $concrete_temp, $unit_weight, $min_a, $min_b, $min_c, $max_a, $max_b, $max_c, $yield, $relative_yield, $mix_design_strength, $required_strength, $weather, $est_wind, $est_rh, $slump_cone_id, $thermometer_id, $air_meter_id, $unit_weight_measure_id, $weather_scale_id, $cement, $other_cementitious_matl, $other_cementitious_matl_a, $fly_ash, $water, $fine_aggregate, $course_aggregate, $max_aggregate_size, $admixture_a, $admixture_a_a, $admixture_b, $admixture_b_b, $admixture_c, $admixture_c_c, $total_batch_weight, $conc_comp_machine_id, $caliper_id, $scale_id, $field, $lab, $time_cylinders_molded, $cylinders_temperature_24h, $where_cylinders_cured, $field_placement_observations, $remark, $date_cylinders_received_lab, $pick_up_by, $cylinders_condition, $good, $fair, $poor, $test_hours, $pick_up_hours, $delayed_hours, $why, $status, $responsible_person;

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

    public function render()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('livewire.inspection-of-concrete.add-concrete-component', ['projects' => $projects])->layout('livewire.layouts.base');
    }
}
