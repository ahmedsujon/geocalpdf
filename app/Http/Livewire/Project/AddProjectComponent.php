<?php

namespace App\Http\Livewire\Project;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AddProjectComponent extends Component
{
    public $project_number, $name, $location, $avatar, $client_id, $created_by, $responsible_supervisor = [], $responsible_clerk = [], $responsible_pe = [], $responsible_ft = [];

    use WithFileUploads;
    use WithPagination;

    public $sortingValue = 10, $searchTerm;
    public $edit_id, $delete_id;
    protected $listeners = ['deleteConfirmed' => 'deleteData'];

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'project_number' => 'required|unique:projects,project_number',
            'name' => 'required|unique:projects,name',
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
            'project_number' => 'required|unique:projects,project_number',
            'name' => 'required|unique:projects,name',
            'location' => 'required',
            'client_id' => 'required',
            'responsible_ft' => 'required',
            'responsible_supervisor' => 'required',
            'responsible_clerk' => 'required',
            'responsible_pe' => 'required',
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

        if ($this->avatar != null) {
            $imageName = Carbon::now()->timestamp . '.' . $this->avatar->extension();
            $this->avatar->storeAs('project', $imageName);
            $project->avatar = $imageName;
        }
        $project->save();

        // Fetch email addresses of responsible users
        $responsible_ft_emails = User::whereIn('id', $this->responsible_ft)->pluck('email')->toArray();
        $responsible_supervisor_emails = User::whereIn('id', $this->responsible_supervisor)->pluck('email')->toArray();
        $responsible_clerk_emails = User::whereIn('id', $this->responsible_clerk)->pluck('email')->toArray();
        $responsible_pe_emails = User::whereIn('id', $this->responsible_pe)->pluck('email')->toArray();

        // Prepare mail data
        $auth_user = Auth::user();
        $mailData['name'] = $this->name;
        $mailData['project_number'] = $this->project_number;
        $mailData['location'] = $this->location;
        $mailData['role_id'] = $auth_user->role_id;
        $mailData['admin_name'] = $auth_user->name;

        // Fetch email addresses of responsible users
        $responsible_ft_emails = User::whereIn('id', $this->responsible_ft)->pluck('email')->toArray();
        $responsible_supervisor_emails = User::whereIn('id', $this->responsible_supervisor)->pluck('email')->toArray();
        $responsible_clerk_emails = User::whereIn('id', $this->responsible_clerk)->pluck('email')->toArray();
        $responsible_pe_emails = User::whereIn('id', $this->responsible_pe)->pluck('email')->toArray();

        // Combine all email arrays into one unique array
        $all_emails = array_unique(array_merge(
            $responsible_ft_emails,
            $responsible_supervisor_emails,
            $responsible_clerk_emails,
            $responsible_pe_emails
        ));

        // Send emails to all responsible users with the prepared $mailData
        foreach ($all_emails as $email) {
            Mail::send('emails.new_project_notify', $mailData, function ($message) use ($mailData, $email) {
                $message->to($email)
                    ->subject('New Project Assign: ' . $mailData['name']);
            });
        }

        $this->dispatchBrowserEvent('success', ['message' => 'Project created successfully']);
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
        $field_techs = User::orderBy('id', 'DESC')->where('role_id', 5)->where('status', 0)->get();
        $supervisors = User::orderBy('id', 'DESC')->where('role_id', 4)->where('status', 0)->get();
        $cleks = User::orderBy('id', 'DESC')->where('role_id', 3)->where('status', 0)->get();
        $p_engineers = User::orderBy('id', 'DESC')->where('role_id', 2)->where('status', 0)->get();

        $clients = Client::orderBy('id', 'DESC')->get();
        return view('livewire.project.add-project-component', ['clients' => $clients, 'supervisors' => $supervisors, 'cleks' => $cleks, 'p_engineers' => $p_engineers, 'field_techs' => $field_techs])->layout('livewire.layouts.base');
    }
}
