<?php

namespace App\Http\Livewire\Project;

use App\Models\FieldDensityCdot;
use App\Models\FieldDensityCommercial;
use App\Models\Project;
use App\Models\TemplateOne;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    protected $listeners = ['deleteConfirmed'=>'deleteData'];

    public $edit_id, $delete_id;

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteData()
    {
        $cdot = FieldDensityCdot::where('project_id', $this->delete_id)->get();
        $commercial = FieldDensityCommercial::where('project_id', $this->delete_id)->get();
        $temp_one = TemplateOne::where('project_id', $this->delete_id)->get();

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
        $projects = Project::orderBy('id', 'DESC')->where('name', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);
        return view('livewire.project.project-component', ['projects'=>$projects])->layout('livewire.layouts.base');
    }
}
