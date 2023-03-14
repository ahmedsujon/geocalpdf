<?php

namespace App\Http\Livewire\Project;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class ViewProjectComponent extends Component
{

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

    public function render()
    {
        $field_techs = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 4)->get();
        $cleks = User::orderBy('id', 'DESC')->where('role_id', 3)->get();
        $p_engineers = User::orderBy('id', 'DESC')->where('role_id', 2)->get();

        $clients = Client::orderBy('id', 'DESC')->get();
        return view('livewire.project.view-project-component', ['clients'=>$clients, 'supervisors'=>$supervisors, 'cleks'=>$cleks, 'p_engineers'=>$p_engineers, 'field_techs'=>$field_techs])->layout('livewire.layouts.base');
    }
}
