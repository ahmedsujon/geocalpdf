<?php

namespace App\Http\Livewire\FieldMoisture\Cdot;

use App\Models\FieldDensityCdot;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class CdotComponent extends Component
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
        $data = FieldDensityCdot::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';
        $this->dispatchBrowserEvent('FileDeleted');
    }

    public function render()
    {
        $cdot_files = FieldDensityCdot::orderBy('id', 'DESC')->paginate($this->sortingValue);
        return view('livewire.field-moisture.cdot.cdot-component', ['cdot_files'=>$cdot_files])->layout('livewire.layouts.base');
    }
}
