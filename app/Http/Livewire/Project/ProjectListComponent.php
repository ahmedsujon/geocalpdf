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


        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.project.project-list-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
