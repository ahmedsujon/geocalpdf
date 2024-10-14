<?php

namespace App\Http\Livewire\Templates\CompressiveStrength;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CompressiveStrength;
use Illuminate\Support\Facades\Auth;

class CompressiveDraftFileComponent extends Component
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
        $data = CompressiveStrength::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';
        $this->dispatchBrowserEvent('FileDeleted');
    }
    public function render()
    {
        $files = CompressiveStrength::orderBy('id', 'DESC')
            ->join('projects', 'compressive_strengths.project_id', '=', 'projects.id')
            ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
            ->where('projects.id', 'like', '%' . $this->searchTerm . '%')
            ->where('publish_status', 'unpublish')
            ->where('user_id', Auth::user()->id)
            ->select('compressive_strengths.*')
            ->paginate($this->sortingValue);

        $projects = Project::orderBy('id', 'DESC')->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        return view('livewire.templates.compressive-strength.compressive-draft-file-component', ['files' => $files, 'projects' => $projects, 'supervisors' => $supervisors])->layout('livewire.layouts.base');
    }
}
