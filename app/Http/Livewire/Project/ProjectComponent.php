<?php

namespace App\Http\Livewire\Project;

use App\Models\Commercial;
use App\Models\FieldDensityCdot;
use App\Models\InspectionConcrete;
use App\Models\Project;
use App\Models\TemplateOne;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectComponent extends Component
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
        $cdot = FieldDensityCdot::where('project_id', $this->delete_id)->get();
        $commercial = Commercial::where('project_id', $this->delete_id)->get();
        $temp_one = InspectionConcrete::where('project_id', $this->delete_id)->get();

        if ($cdot->count() > 0 || $commercial->count() > 0 || $temp_one->count() > 0) {
            $this->dispatchBrowserEvent('projectDeleteError');
        } else {
            $data = Project::find($this->delete_id);
            $data->delete();

            $this->dispatchBrowserEvent('ProjectDeleted');
        }
    }

    public function render()
    {
        $userId = (string) auth()->user()->id;
        // Check if the user is a super_admin
        if (Auth::user()->role_id == '1') {
            // If the user is a super_admin, retrieve all projects
            $projects = Project::where('name', 'like', '%' . $this->searchTerm . '%')
                ->orderBy('id', 'DESC')
                ->paginate($this->sortingValue);
        } else {
            // Otherwise, apply the filtering conditions
            $projects = Project::whereJsonContains('responsible_ft', $userId)
                ->orWhereJsonContains('responsible_supervisor', $userId)
                ->orWhereJsonContains('responsible_clerk', $userId)
                ->orWhereJsonContains('responsible_pe', $userId)
                ->where('name', 'like', '%' . $this->searchTerm . '%')
                ->orderBy('id', 'DESC')
                ->paginate($this->sortingValue);
        }

        return view('livewire.project.project-component', ['projects' => $projects])
            ->layout('livewire.layouts.base');
    }
}
