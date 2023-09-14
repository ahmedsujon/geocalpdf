<?php

namespace App\Http\Livewire\Templates\InspectionConcrete;

use App\Models\Concrete;
use App\Models\InspectionConcrete;
use App\Models\Project;
use App\Models\SubClient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class InspectionConcreteComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    protected $listeners = ['deleteConfirmed' => 'deleteData'];
    public $edit_id, $delete_id;

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteData()
    {
        $data = InspectionConcrete::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';
        $this->dispatchBrowserEvent('FileDeleted');
    }

    public function getInspectionRepresentative(Request $request)
    {
        $output = '';
        $project_id = $request->get('project_id');
        DB::statement("SET SQL_MODE=''");

        $project = Project::find($project_id);
        $responsible_persons = [];

        $responsible_ft = $project->responsible_ft;
        $responsible_persons = array_merge($responsible_persons, json_decode($responsible_ft));

        $responsible_supervisor = $project->responsible_supervisor;
        $responsible_persons = array_merge($responsible_persons, json_decode($responsible_supervisor));

        $responsible_clerk = $project->responsible_clerk;
        $responsible_persons = array_merge($responsible_persons, json_decode($responsible_clerk));

        $responsible_pe = $project->responsible_pe;
        $responsible_persons = array_merge($responsible_persons, json_decode($responsible_pe));

        $data = User::whereIn('id', $responsible_persons)->get();

        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . ' </option>';
        }
        echo $output;
    }

    public function editInspectionRepresentative(Request $request)
    {
        $output = '';
        $value = $request->get('value');

        $file_id = $request->get('file_id');
        DB::statement("SET SQL_MODE=''");

        $responsible_persons = InspectionConcrete::find($file_id)->responsible_person;

        if ($value == 'sentToClient') {
            $getCustomer = InspectionConcrete::where('id', $file_id)->first()->client_id;
            $data = SubClient::where('client_id', $getCustomer)->get();
        } else if ($value == 'sentToTech') {
            $data = User::whereIn('id', json_decode($responsible_persons))->where('role_id', 5)->get();
        } else if ($value == 'sentToSupervisor') {
            $data = User::whereIn('id', json_decode($responsible_persons))->where('role_id', 4)->get();
        } else if ($value == 'sentToClerk') {
            $data = User::whereIn('id', json_decode($responsible_persons))->where('role_id', 3)->get();
        } else if ($value == 'sentToPE') {
            $data = User::whereIn('id', json_decode($responsible_persons))->where('role_id', 2)->get();
        }

        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . ' </option>';
        }
        echo $output;
    }

    public function render()
    {
        $files = InspectionConcrete::orderBy('id', 'DESC')
            ->join('projects', 'inspection_concretes.project_id', '=', 'projects.id')
            ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
            ->select('inspection_concretes.*')
            ->paginate($this->sortingValue);
        return view('livewire.templates.inspection-concrete.inspection-concrete-component', ['files' => $files])->layout('livewire.layouts.base');
    }
}
