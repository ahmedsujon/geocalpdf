<?php

namespace App\Http\Livewire\Templates\ConcreteTestResult;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\SubClient;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\ConcreteTestResult;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ConcreteTestResultComponent extends Component
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
        $data = ConcreteTestResult::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';
        $this->dispatchBrowserEvent('FileDeleted');
    }

    public function getConcreteTestResultComponentRepresentative(Request $request)
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

    public function editConcreteTestResultComponentRepresentative(Request $request)
    {
        $output = '';
        $value = $request->get('value');

        $file_id = $request->get('file_id');
        DB::statement("SET SQL_MODE=''");

        $responsible_persons = ConcreteTestResult::find($file_id)->responsible_person;

        if ($value == 'sentToClient') {
            $getCustomer = ConcreteTestResult::where('id', $file_id)->first()->client_id;
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
            $files = ConcreteTestResult::orderBy('id', 'DESC')
                ->join('projects', 'concrete_test_results.project_id', '=', 'projects.id')
                ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
                ->select('concrete_test_results.*')
                ->paginate($this->sortingValue);
        } else {
            $files = collect([]);
            $all_files = ConcreteTestResult::orderBy('id', 'DESC')
                ->join('projects', 'concrete_test_results.project_id', '=', 'projects.id')
                ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
                ->select('concrete_test_results.*')
                ->get();

            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $files->push($file);
                }
            }
            $files = $files->paginate($this->sortingValue);
        }
        return view('livewire.templates.concrete-test-result.concrete-test-result-component', ['files' => $files])->layout('livewire.layouts.base');
    }
}
