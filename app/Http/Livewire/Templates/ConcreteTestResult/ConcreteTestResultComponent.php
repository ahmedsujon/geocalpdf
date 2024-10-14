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

    public function getConcreteRepresentative(Request $request)
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

    public function editConcreteRepresentative(Request $request)
    {
        $output = '';
        DB::statement("SET SQL_MODE=''");
        $value = $request->get('value');
        $file_id = $request->get('file_id');
        $project_id = ConcreteTestResult::find($file_id)->project_id;

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

        if ($value == 'sentToClient') {
            $getCustomer = ConcreteTestResult::where('id', $file_id)->first()->client_id;
            $data = SubClient::where('client_id', $getCustomer)->get();
        } else if ($value == 'sentToTech') {
            $data = User::whereIn('id', $responsible_persons)->where('role_id', 5)->get();
        } else if ($value == 'sentToSupervisor') {
            $data = User::whereIn('id', $responsible_persons)->where('role_id', 4)->get();
        } else if ($value == 'sentToClerk') {
            $data = User::whereIn('id', $responsible_persons)->where('role_id', 3)->get();
        } else if ($value == 'sentToPE') {
            $data = User::whereIn('id', $responsible_persons)->where('role_id', 2)->get();
        }
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . ' </option>';
        }
        echo $output;
    }

    public function render()
    {
        $userId = (string) auth()->user()->id;

        // For Admin (role_id 1) and Supervisor (role_id 2)
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $files = ConcreteTestResult::orderBy('id', 'DESC')
                ->join('projects', 'concrete_test_results.project_id', '=', 'projects.id')
                ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
                ->where('publish_status', 'publish')
                ->select('concrete_test_results.*')
                ->paginate($this->sortingValue);
        }
        // For other roles
        else {
            $projects = Project::whereJsonContains('responsible_ft', $userId)
                ->orWhereJsonContains('responsible_supervisor', $userId)
                ->orWhereJsonContains('responsible_clerk', $userId)
                ->orWhereJsonContains('responsible_pe', $userId)
                ->where('name', 'like', '%' . $this->searchTerm . '%')
                ->orderBy('id', 'DESC')
                ->pluck('id'); // Get only project IDs

            // Now fetch the concrete test results for the filtered projects
            $files = ConcreteTestResult::orderBy('id', 'DESC')
                ->whereIn('project_id', $projects)
                ->where('publish_status', 'publish')
                ->paginate($this->sortingValue);
        }

        return view('livewire.templates.concrete-test-result.concrete-test-result-component', ['files' => $files])
            ->layout('livewire.layouts.base');
    }
}
