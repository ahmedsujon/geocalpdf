<?php

namespace App\Http\Livewire\Templates\InspectionConcreteSix;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\SubClient;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\InspectionConcreteSetSix;

class InspectionSixComponent extends Component
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
        $data = InspectionConcreteSetSix::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';
        $this->dispatchBrowserEvent('FileDeleted');
    }

    public function getDataSetSixRepresentative(Request $request)
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

    public function editDataSetSixRepresentative(Request $request)
    {
        $output = '';
        $value = $request->get('value');

        $file_id = $request->get('file_id');
        DB::statement("SET SQL_MODE=''");

        $responsible_persons = InspectionConcreteSetSix::find($file_id)->responsible_person;

        if ($value == 'sentToClient') {
            $getCustomer = InspectionConcreteSetSix::where('id', $file_id)->first()->client_id;
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
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $files = InspectionConcreteSetSix::orderBy('id', 'DESC')
                ->join('projects', 'inspection_concrete_set_sixes.project_id', '=', 'projects.id')
                ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
                ->select('inspection_concrete_set_sixes.*')
                ->paginate($this->sortingValue);
        } else {
            $files = collect([]);
            $all_files = InspectionConcreteSetSix::orderBy('id', 'DESC')
                ->join('projects', 'inspection_concrete_set_sixes.project_id', '=', 'projects.id')
                ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
                ->select('inspection_concrete_set_sixes.*')
                ->get();

            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $files->push($file);
                }
            }
            $files = $files->paginate($this->sortingValue);
        }
        return view('livewire.templates.inspection-concrete-six.inspection-six-component', ['files' => $files])->layout('livewire.layouts.base');
    }
}
