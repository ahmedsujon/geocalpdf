<?php

namespace App\Http\Livewire\Templates\Commercial;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\SubClient;
use App\Models\Commercial;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class CommercialComponent extends Component
{
    use WithPagination;
    public $sortingValue = 2, $searchTerm;
    protected $listeners = ['deleteConfirmed' => 'deleteData'];
    public $edit_id, $delete_id;

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteData()
    {
        $data = Commercial::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';
        $this->dispatchBrowserEvent('FileDeleted');
    }

    public function getCommercialRepresentative(Request $request)
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

    public function editCommercialRepresentative(Request $request)
    {
        $output = '';
        $value = $request->get('value');

        $file_id = $request->get('file_id');
        DB::statement("SET SQL_MODE=''");

        $responsible_persons = Commercial::find($file_id)->responsible_person;

        if ($value == 'sentToClient') {
            $getCustomer = Commercial::where('id', $file_id)->first()->client_id;
            $data = SubClient::where('client_id', $getCustomer)->get();
        } else if ($value == 'sentToTech') {
            $data = User::whereIn('id', json_decode($responsible_persons))->where('role_id', 5)->get();
        } else if ($value == 'sentToSupervisor') {
            $data = User::whereIn('id', json_decode($responsible_persons))->where('role_id', 4)->get();
        } else if ($value == 'sentToClerk') {
            $data = User::whereIn('id', json_decode($responsible_persons))->where('role_id', 3)->get();
        } else if ($value == 'sentToPE') {
            $data = User::whereIn('id', json_decode($responsible_persons))->where('role_id', 2)->get();
        }

        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . ' </option>';
        }
        echo $output;
    }

    public function render()
    {
        //dd(auth()->user());
        $auth_user = auth()->user();
        $files = Commercial::orderBy('id', 'DESC')
            ->join('projects', 'commercials.project_id', '=', 'projects.id')
            ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
            ->select('commercials.*')
            ->paginate($this->sortingValue);

        $filteredItems = $files->filter(function ($item) use ($auth_user) {
            
            $responsible_person = json_decode($item->responsible_person);
            if(in_array($auth_user->id,$responsible_person)){
                return true;
            }
            return false;
        });   

        $perPage = 1;
        $page = request()->get('page', 1);
        $currentPageItems = $filteredItems->slice(($page - 1) * $perPage, $perPage);
        $filteredItems = new LengthAwarePaginator(
            $currentPageItems,
            $filteredItems->count(), // Total items
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        
        //$filteredItems  = $filteredItems->paginate($this->sortingValue);
        //dd($files->toArray());
        return view('livewire.templates.commercial.commercial-component', ['files' => $files, 'filteredItems'=>$filteredItems])->layout('livewire.layouts.base');
    }

    // public function render()
    // {
    //     $files = Commercial::orderBy('id', 'DESC')
    //         ->join('projects', 'commercials.project_id', '=', 'projects.id')
    //         ->where(Auth::user()->id, 'responsible_person_id')
    //         ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
    //         ->select('commercials.*')
    //         ->paginate($this->sortingValue);
    //     return view('livewire.templates.commercial.commercial-component', ['files' => $files])->layout('livewire.layouts.base');
    // }
}
