<?php

namespace App\Http\Livewire\Project;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EditProjectComponent extends Component
{

    use WithFileUploads;

    public $project_id, $project_number, $name, $phone, $location, $avatar, $new_avatar, $client_id, $created_by, $responsible_supervisor = [], $responsible_clerk = [], $responsible_pe = [], $responsible_ft = [];

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

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_number' => 'required|unique:projects,project_number',
            'name' => 'required',
            'location' => 'required',
            'client_id' => 'required',
            'responsible_ft' => 'required',
            'responsible_supervisor' => 'required',
            'responsible_clerk' => 'required',
            'responsible_pe' => 'required',
        ]);
    }

    public function storeData()
    {
        $this->validate([
            'location' => 'required',
            'client_id' => 'required',
            'responsible_supervisor' => 'required',
            'responsible_clerk' => 'required',
            'responsible_pe' => 'required',
            'responsible_ft' => 'required',
        ]);

        // Fetch the existing project
        $project = Project::where('id', $this->project_id)->first();

        // Initialize old responsible user arrays (use empty arrays if null)
        $old_responsible_ft = !empty($project->responsible_ft) ? json_decode($project->responsible_ft, true) : [];
        $old_responsible_supervisor = !empty($project->responsible_supervisor) ? json_decode($project->responsible_supervisor, true) : [];
        $old_responsible_clerk = !empty($project->responsible_clerk) ? json_decode($project->responsible_clerk, true) : [];
        $old_responsible_pe = !empty($project->responsible_pe) ? json_decode($project->responsible_pe, true) : [];

        // Save updated project data
        $project->project_number = $this->project_number;
        $project->name = $this->name;
        $project->location = $this->location;
        $project->client_id = $this->client_id;
        $project->created_by = Auth::user()->id;

        // Update the responsible users with new data
        $project->responsible_ft = json_encode($this->responsible_ft);
        $project->responsible_supervisor = json_encode($this->responsible_supervisor);
        $project->responsible_clerk = json_encode($this->responsible_clerk);
        $project->responsible_pe = json_encode($this->responsible_pe);

        $project->save();

        // Find new users by comparing the old and new user lists
        $new_responsible_ft = array_diff($this->responsible_ft, $old_responsible_ft);
        $new_responsible_supervisor = array_diff($this->responsible_supervisor, $old_responsible_supervisor);
        $new_responsible_clerk = array_diff($this->responsible_clerk, $old_responsible_clerk);
        $new_responsible_pe = array_diff($this->responsible_pe, $old_responsible_pe);

        // Fetch emails of newly added users
        $new_ft_emails = User::whereIn('id', $new_responsible_ft)->pluck('email')->toArray();
        $new_supervisor_emails = User::whereIn('id', $new_responsible_supervisor)->pluck('email')->toArray();
        $new_clerk_emails = User::whereIn('id', $new_responsible_clerk)->pluck('email')->toArray();
        $new_pe_emails = User::whereIn('id', $new_responsible_pe)->pluck('email')->toArray();

        // Combine all new emails into one unique array
        $new_emails = array_unique(array_merge(
            $new_ft_emails,
            $new_supervisor_emails,
            $new_clerk_emails,
            $new_pe_emails
        ));

        // Send email to new users
        $auth_user = Auth::user();
        $mailData['name'] = $this->name;
        $mailData['project_number'] = $this->project_number;
        $mailData['location'] = $this->location;
        $mailData['role_id'] = $auth_user->role_id;

        foreach ($new_emails as $email) {
            Mail::send('emails.new_project_notify', $mailData, function ($message) use ($email, $mailData) {
                $message->to($email)
                    ->subject('You’ve been assigned to a new project: ' . $mailData['name']);
            });
        }

        $this->dispatchBrowserEvent('success', ['message' => 'Project Updated successfully']);
        return redirect()->back();
    }

    public function render()
    {
        $field_techs = User::orderBy('id', 'DESC')->where('role_id', 5)->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 4)->get();
        $cleks = User::orderBy('id', 'DESC')->where('role_id', 3)->get();
        $p_engineers = User::orderBy('id', 'DESC')->where('role_id', 2)->get();

        $clients = Client::orderBy('id', 'DESC')->get();
        return view('livewire.project.edit-project-component', ['clients' => $clients, 'supervisors' => $supervisors, 'cleks' => $cleks, 'p_engineers' => $p_engineers, 'field_techs' => $field_techs])->layout('livewire.layouts.base');
    }
}
