<?php

namespace App\Http\Livewire\SFProject;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CompressiveStrength;

class SFCompressiveComponent extends Component
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

        $listing_two = CompressiveStrength::where('project_id', $this->project_id)->where('publish_status', 'publish')->get();
        foreach ($listing_two as $l2) {
            $l2->table_name = 'compressive_strengths';
            $project_listing->push($l2);
        }

        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.s-f-project.s-f-compressive-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
