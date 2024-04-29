<?php

namespace App\Http\Livewire\SFProject;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\FieldDensityCdot;

class SFCdotComponent extends Component
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

        $listing_four = FieldDensityCdot::where('project_id', $this->project_id)->get();
        foreach ($listing_four as $l4) {
            $l4->table_name = 'field_density_cdots';
            $project_listing->push($l4);
        }

        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.s-f-project.s-f-cdot-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
