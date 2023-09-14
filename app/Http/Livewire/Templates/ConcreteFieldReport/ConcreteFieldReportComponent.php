<?php

namespace App\Http\Livewire\Templates\ConcreteFieldReport;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\InspectionConcrete;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ConcreteFieldReportComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;

    public function render()
    {
        // $files = InspectionConcrete::orderBy('id', 'DESC')
        DB::statement("SET SQL_MODE=''");

        $project_ids = InspectionConcrete::groupBy('project_id')->pluck('project_id')->toArray();
        $projects = Project::whereIn('id', $project_ids)->paginate($this->sortingValue);
        return view('livewire.templates.concrete-field-report.concrete-field-report-component', ['projects' => $projects])->layout('livewire.layouts.base');
    }
}
