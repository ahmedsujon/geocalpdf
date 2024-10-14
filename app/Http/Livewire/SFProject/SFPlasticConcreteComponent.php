<?php

namespace App\Http\Livewire\SFProject;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PlasticConcrete;

class SFPlasticConcreteComponent extends Component
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

        $listing_six = PlasticConcrete::where('project_id', $this->project_id)->where('publish_status', 'publish')->get();
        foreach ($listing_six as $l6) {
            $l6->table_name = 'plastic_concretes';
            $project_listing->push($l6);
        }

        $project_listings = $project_listing->paginate($this->sortingValue);

        return view('livewire.s-f-project.s-f-plastic-concrete-component', ['project_listing' => $project_listings])->layout('livewire.layouts.base');
    }
}
