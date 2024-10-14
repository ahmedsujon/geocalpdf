<?php

namespace App\Http\Livewire\Templates\ConcreteTestResult;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ConcreteTestResult;
use Illuminate\Support\Facades\Auth;

class DraftFileComponent extends Component
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
    public function render()
    {
        $files = ConcreteTestResult::orderBy('id', 'DESC')
            ->join('projects', 'concrete_test_results.project_id', '=', 'projects.id')
            ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
            ->where('projects.id', 'like', '%' . $this->searchTerm . '%')
            ->where('publish_status', 'unpublish')
            ->where('user_id', Auth::user()->id)
            ->select('concrete_test_results.*')
            ->paginate($this->sortingValue);

        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        return view('livewire.templates.concrete-test-result.draft-file-component', ['files' => $files, 'projects' => $projects, 'supervisors' => $supervisors])->layout('livewire.layouts.base');
    }
}
