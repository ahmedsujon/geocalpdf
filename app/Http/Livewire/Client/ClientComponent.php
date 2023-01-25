<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class ClientComponent extends Component
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
        $data = Client::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';

        $this->dispatchBrowserEvent('ClientDeleted');

    }

    public function render()
    {
        $clients = Client::orderBy('id', 'DESC')->where('name', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);
        return view('livewire.client.client-component',['clients'=>$clients])->layout('livewire.layouts.base');
    }
}
