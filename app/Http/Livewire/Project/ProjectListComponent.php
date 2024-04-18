<?php

namespace App\Http\Livewire\Project;

use App\Models\CompressiveStrength;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ConcreteTestResult;
use Illuminate\Support\Facades\DB;

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

        // $listing_two = CompressiveStrength::where('project_id', $this->project_id)->get();
        // foreach ($listing_two as $l2) {
        //     $project_listing->push($l2);
        // }

        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.project.project-list-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
