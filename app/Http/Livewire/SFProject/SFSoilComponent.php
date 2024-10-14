<?php

namespace App\Http\Livewire\SFProject;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SoilAggregate;

class SFSoilComponent extends Component
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

        $listing_five = SoilAggregate::where('project_id', $this->project_id)->where('publish_status', 'publish')->get();
        foreach ($listing_five as $l5) {
            $l5->table_name = 'soil_aggregates';
            $project_listing->push($l5);
        }

        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.s-f-project.s-f-soil-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
