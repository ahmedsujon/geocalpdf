<?php

namespace App\Http\Livewire\Templates\ConcreteFieldReport;

use App\Models\InspectionConcrete;
use Livewire\Component;
use Livewire\WithPagination;

class ConcreteFieldReportComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;

    public function render()
    {
        $files = InspectionConcrete::orderBy('id', 'DESC')
        // $files = InspectionConcrete::orderBy('name', 'desc')
        //     ->orderBy('id', 'desc')
        //     ->distinct('name')
            ->paginate($this->sortingValue);
        return view('livewire.templates.concrete-field-report.concrete-field-report-component', ['files' => $files])->layout('livewire.layouts.base');
    }
}
