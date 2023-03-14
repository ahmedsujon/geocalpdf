<?php

namespace App\Http\Livewire\Project;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddProjectComponent extends Component
{
    public $project_number, $name, $location, $avatar, $client_id, $created_by, $responsible_supervisor = [], $responsible_clerk = [], $responsible_pe = [], $responsible_ft = [];

    use WithFileUploads;
    use WithPagination;

    public $sortingValue = 10, $searchTerm;
    public $edit_id, $delete_id;
    protected $listeners = ['deleteConfirmed'=>'deleteData'];


    public function storeData()
    {
        $this->validate([
            'project_number'=>'required|unique:projects,project_number',
            'name'=>'required',
            'location'=>'required',
            'client_id'=>'required',
            'responsible_ft'=>'required',
            'responsible_supervisor'=>'required',
            'responsible_clerk'=>'required',
            'responsible_pe'=>'required',
        ]);

        $project = new Project();
        $project->project_number = $this->project_number;
        $project->name = $this->name;
        $project->location = $this->location;
        $project->client_id = $this->client_id;
        $project->created_by = Auth::user()->id;

        $project->responsible_ft = json_encode($this->responsible_ft);
        $project->responsible_supervisor = json_encode($this->responsible_supervisor);
        $project->responsible_clerk = json_encode($this->responsible_clerk);
        $project->responsible_pe = json_encode($this->responsible_pe);

        if($this->avatar!=null){
            $imageName = Carbon::now()->timestamp. '.' . $this->avatar->extension();
            $this->avatar->storeAs('project',$imageName);
            $project->avatar = $imageName;
        }
  
        $project->save();
        $this->dispatchBrowserEvent('success', ['message'=>'Project created successfully']);
        $this->resetInputs();

    }

    public function resetInputs()
    {
        $this->project_number = '';
        $this->delete_id = '';
        $this->name = '';
        $this->location = '';
        $this->avatar = '';
        $this->client_id = '';
        $this->created_by = '';
        $this->responsible_ft = '';
        $this->responsible_supervisor = '';
        $this->responsible_clerk = '';
        $this->responsible_pe = '';
    }

    public function render()
    {
        $field_techs = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 4)->get();
        $cleks = User::orderBy('id', 'DESC')->where('role_id', 3)->get();
        $p_engineers = User::orderBy('id', 'DESC')->where('role_id', 2)->get();

        $clients = Client::orderBy('id', 'DESC')->get();
        return view('livewire.project.add-project-component', ['clients'=>$clients, 'supervisors'=>$supervisors, 'cleks'=>$cleks, 'p_engineers'=>$p_engineers, 'field_techs'=>$field_techs ])->layout('livewire.layouts.base');
    }
}
