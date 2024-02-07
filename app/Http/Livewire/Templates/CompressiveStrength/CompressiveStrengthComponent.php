<?php

namespace App\Http\Livewire\Templates\CompressiveStrength;

use Livewire\Component;
use Livewire\WithPagination;
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
