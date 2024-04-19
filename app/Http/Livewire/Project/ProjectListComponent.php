<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Commercial;
use Livewire\WithPagination;
use App\Models\SoilAggregate;
use App\Models\PlasticConcrete;
use App\Models\FieldDensityCdot;
use App\Models\ConcreteTestResult;
use App\Models\InspectionConcrete;
use Illuminate\Support\Facades\DB;
use App\Models\CompressiveStrength;
use App\Models\InspectionConcreteSetSix;
use App\Models\InspectionConcreteSetTen;
use App\Models\InspectionConcreteSetTwo;
use App\Models\InspectionConcreteSetFive;
use App\Models\InspectionConcreteSetFour;
use App\Models\InspectionConcreteSetNine;
use App\Models\InspectionConcreteSetEight;
use App\Models\InspectionConcreteSetSeven;
use App\Models\InspectionConcreteSetThree;

class ProjectListComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm, $project_id;

    public function mount($project_id)
    {
        $this->project_id = $project_id;
    }

    public function render()
    {

        $project_listing = collect([]);

        $listing_one = ConcreteTestResult::where('project_id', $this->project_id)->get();
        foreach ($listing_one as $l1) {
            $l1->table_name = 'concrete_test_results';
            $project_listing->push($l1);
        }

        $listing_two = CompressiveStrength::where('project_id', $this->project_id)->get();
        foreach ($listing_two as $l2) {
            $l2->table_name = 'compressive_strengths';
            $project_listing->push($l2);
        }

        $listing_three = Commercial::where('project_id', $this->project_id)->get();
        foreach ($listing_three as $l3) {
            $l3->table_name = 'commercials';
            $project_listing->push($l3);
        }

        $listing_four = FieldDensityCdot::where('project_id', $this->project_id)->get();
        foreach ($listing_four as $l4) {
            $l4->table_name = 'field_density_cdots';
            $project_listing->push($l4);
        }

        $listing_five = SoilAggregate::where('project_id', $this->project_id)->get();
        foreach ($listing_five as $l5) {
            $l5->table_name = 'soil_aggregates';
            $project_listing->push($l5);
        }

        $listing_six = PlasticConcrete::where('project_id', $this->project_id)->get();
        foreach ($listing_six as $l6) {
            $l6->table_name = 'plastic_concretes';
            $project_listing->push($l6);
        }

        // Inspection Of Concrete

        $inspection_concrete_one = InspectionConcrete::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_one as $ICl1) {
            $ICl1->table_name = 'inspection_concretes';
            $project_listing->push($ICl1);
        }

        $inspection_concrete_two = InspectionConcreteSetTwo::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_two as $IC2) {
            $IC2->table_name = 'inspection_concrete_set_twos';
            $project_listing->push($IC2);
        }

        $inspection_concrete_three = InspectionConcreteSetThree::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_three as $IC3) {
            $IC3->table_name = 'inspection_concrete_set_threes';
            $project_listing->push($IC3);
        }

        $inspection_concrete_four = InspectionConcreteSetFour::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_four as $ICl4) {
            $ICl4->table_name = 'inspection_concrete_set_fours';
            $project_listing->push($ICl4);
        }

        $inspection_concrete_five = InspectionConcreteSetFive::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_five as $IC5) {
            $IC5->table_name = 'inspection_concrete_set_fives';
            $project_listing->push($IC5);
        }

        $inspection_concrete_six = InspectionConcreteSetSix::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_six as $ICl6) {
            $ICl6->table_name = 'inspection_concrete_set_sixes';
            $project_listing->push($ICl6);
        }

        $inspection_concrete_seven = InspectionConcreteSetSeven::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_seven as $ICl7) {
            $ICl7->table_name = 'inspection_concrete_set_sevens';
            $project_listing->push($ICl7);
        }

        $inspection_concrete_eight = InspectionConcreteSetEight::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_eight as $ICl8) {
            $ICl8->table_name = 'inspection_concrete_set_eights';
            $project_listing->push($ICl8);
        }

        $inspection_concrete_nine = InspectionConcreteSetNine::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_nine as $ICl9) {
            $ICl9->table_name = 'inspection_concrete_set_nines';
            $project_listing->push($ICl9);
        }

        $inspection_concrete_ten = InspectionConcreteSetTen::where('project_id', $this->project_id)->get();
        foreach ($inspection_concrete_ten as $ICl10) {
            $ICl10->table_name = 'inspection_concrete_set_tens';
            $project_listing->push($ICl10);
        }

        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.project.project-list-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
