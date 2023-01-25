<?php

namespace App\Http\Livewire\Proctor;

use App\Models\Proctor;
use Livewire\Component;
use Livewire\WithPagination;

class ProctorComponent extends Component
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
        $data = Proctor::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';

        $this->dispatchBrowserEvent('ProctorDeleted');

    }

    public function render()
    {
        $proctors = Proctor::orderBy('id', 'DESC')->where('proctorid', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);
        return view('livewire.proctor.proctor-component', ['proctors'=>$proctors])->layout('livewire.layouts.base');
    }
}
