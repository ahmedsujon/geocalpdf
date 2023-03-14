<?php

namespace App\Http\Livewire\Project;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProjectComponent extends Component
{

    use WithFileUploads;

    public $project_id, $project_number, $name, $phone, $location, $avatar, $new_avatar, $client_id, $created_by, $responsible_supervisor=[], $responsible_clerk=[], $responsible_pe=[], $responsible_ft = [];

    public function mount($project_id)
    {
        $project = Project::where('id', $this->project_id)->first();
        $this->project_number = $project->project_number;
        $this->name = $project->name;
        $this->location = $project->location;
        $this->phone = $project->phone;
        $this->new_avatar = $project->avatar;
        $this->client_id = $project->client_id;
        $this->project_id = $project->id;

        $this->responsible_ft = json_decode($project->responsible_ft);
        $this->responsible_supervisor = json_decode($project->responsible_supervisor);
        $this->responsible_clerk = json_decode($project->responsible_clerk);
        $this->responsible_pe = json_decode($project->responsible_pe);
    }

    public function storeData()
    {
        $this->validate([
            'location'=>'required',
            'client_id'=>'required',
            'responsible_supervisor'=>'required',
            'responsible_clerk'=>'required',
            'responsible_pe'=>'required',
            'responsible_ft'=>'required',
        ]);

        $project = Project::where('id', $this->project_id)->first();
        $project->project_number = $this->project_number;
        $project->name = $this->name;
        $project->location = $this->location;
        $project->client_id = $this->client_id;
        $project->created_by = Auth::user()->id;

        $project->responsible_ft = json_encode($this->responsible_ft);
        $project->responsible_supervisor = json_encode($this->responsible_supervisor);
        $project->responsible_clerk = json_encode($this->responsible_clerk);
        $project->responsible_pe = json_encode($this->responsible_pe);

        if($this->avatar != ''){
            $imageName = Carbon::now()->timestamp. '.' . $this->avatar->extension();
            $this->avatar->storeAs('project',$imageName);
            $project->avatar = $imageName;
        }

        $project->save();
        $this->dispatchBrowserEvent('success', ['message'=>'Project Updated successfully']);
        return redirect()->back();
    }

    public function render()
    {
        $field_techs = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 4)->get();
        $cleks = User::orderBy('id', 'DESC')->where('role_id', 3)->get();
        $p_engineers = User::orderBy('id', 'DESC')->where('role_id', 2)->get();

        $clients = Client::orderBy('id', 'DESC')->get();
        return view('livewire.project.edit-project-component', ['clients'=>$clients, 'supervisors'=>$supervisors, 'cleks'=>$cleks, 'p_engineers'=>$p_engineers, 'field_techs'=>$field_techs])->layout('livewire.layouts.base');
    }
}
