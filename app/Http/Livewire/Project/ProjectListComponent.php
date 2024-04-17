<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ConcreteTestResult;
use Illuminate\Support\Facades\DB;

class ProjectListComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm, $project_id;

    public function render()
    {
        $project_listing = DB::table('concrete_test_results')
            ->where('id', 'LIKE', '%' . $this->searchTerm . '%')
            ->where('project_id', $this->project_id)
            ->select('id', 'name', 'value', 'project_id')
            
            ->union(
                DB::table('compressive_strengths')
                    ->where('id', 'LIKE', '%' . $this->searchTerm . '%')
                    ->where('project_id', $this->project_id)
                    ->select('id', 'name', 'value', 'project_id')
            )
            ->paginate($this->sortingValue);

        return view('livewire.project.project-list-component', ['project_listing' => $project_listing])->layout('livewire.layouts.base');
    }
}
