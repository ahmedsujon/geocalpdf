<?php

namespace App\Http\Livewire\Templates\CompressiveStrength;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\CompressiveStrength;
use Illuminate\Support\Facades\Auth;

class CompressiveStrengthComponent extends Component
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

    public function getCompressiveStrengthResentative(Request $request)
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
    
    public function render()
    {
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $files = CompressiveStrength::orderBy('id', 'DESC')
                ->join('projects', 'compressive_strengths.project_id', '=', 'projects.id')
                ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
                ->select('compressive_strengths.*')
                ->paginate($this->sortingValue);
        } else {
            $files = collect([]);
            $all_files = CompressiveStrength::orderBy('id', 'DESC')
                ->join('projects', 'compressive_strengths.project_id', '=', 'projects.id')
                ->where('projects.name', 'like', '%' . $this->searchTerm . '%')
                ->select('compressive_strengths.*')
                ->get();

            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $files->push($file);
                }
            }
            $files = $files->paginate($this->sortingValue);
        }
        return view('livewire.templates.compressive-strength.compressive-strength-component', ['files'=>$files])->layout('livewire.layouts.base');
    }
}
