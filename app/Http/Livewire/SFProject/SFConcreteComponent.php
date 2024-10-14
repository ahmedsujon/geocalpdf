<?php

namespace App\Http\Livewire\SFProject;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ConcreteTestResult;

class SFConcreteComponent extends Component
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

        $listing_one = ConcreteTestResult::where('project_id', $this->project_id)->where('publish_status', 'publish')->get();
        foreach ($listing_one as $l1) {
            $l1->table_name = 'concrete_test_results';
            $project_listing->push($l1);
        }

        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.s-f-project.s-f-concrete-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
