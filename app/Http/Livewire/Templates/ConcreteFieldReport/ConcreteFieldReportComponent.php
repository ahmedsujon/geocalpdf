<?php

namespace App\Http\Livewire\Templates\ConcreteFieldReport;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\InspectionConcrete;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ConcreteFieldReportComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    public $project_name, $client_name, $Send_by, $client_id, $message;

    public function storeClientData($id)
    {
        $this->client_id = $id;

        $this->client_name = Client::find($id)->name;

        $this->dispatchBrowserEvent('showMailSendModal');
    }

    public function sentToClient()
    {
        $client_id = $this->client_id;
        $message = $this->message;

        //save data as required

        // mail function
    }

    public function render()
    {
        DB::statement("SET SQL_MODE=''");
        $project_ids = InspectionConcrete::groupBy('project_id')->pluck('project_id')->toArray();
        $projects = Project::whereIn('id', $project_ids)->paginate($this->sortingValue);
        return view('livewire.templates.concrete-field-report.concrete-field-report-component', ['projects' => $projects])->layout('livewire.layouts.base');
    }
}
