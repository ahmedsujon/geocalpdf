<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use App\Models\FieldDensityCdot;
use App\Models\FieldDensityCommercial;
use App\Models\TemplateOne;
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
        $cdot = FieldDensityCdot::where('client_id', $this->delete_id)->get();
        $commercial = FieldDensityCommercial::where('client_id', $this->delete_id)->get();
        $temp_one = TemplateOne::where('client_id', $this->delete_id)->get();

        if ($cdot->count() > 0 || $commercial->count() > 0 || $temp_one->count() > 0) {
            $this->dispatchBrowserEvent('clientDeleteError');
        } else {
            $data = Client::find($this->delete_id);
            $data->delete();

            $this->dispatchBrowserEvent('ClientDeleted');
        }
    }


    public function render()
    {
        $clients = Client::orderBy('id', 'DESC')->where('name', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);
        return view('livewire.client.client-component',['clients'=>$clients])->layout('livewire.layouts.base');
    }
}
