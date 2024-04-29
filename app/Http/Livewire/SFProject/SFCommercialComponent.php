<?php

namespace App\Http\Livewire\SFProject;

use Livewire\Component;
use App\Models\Commercial;
use Livewire\WithPagination;

class SFCommercialComponent extends Component
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

        $listing_three = Commercial::where('project_id', $this->project_id)->get();
        foreach ($listing_three as $l3) {
            $l3->table_name = 'commercials';
            $project_listing->push($l3);
        }

        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.s-f-project.s-f-commercial-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
