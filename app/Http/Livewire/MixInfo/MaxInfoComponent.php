<?php

namespace App\Http\Livewire\MixInfo;

use App\Models\MixInfo;
use Livewire\Component;
use Livewire\WithPagination;

class MaxInfoComponent extends Component
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
        $data = MixInfo::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';

        $this->dispatchBrowserEvent('MixInfoDeleted');

    }

    public function render()
    {
        $mix_infos = MixInfo::orderBy('id', 'DESC')->where('mix_id', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);
        return view('livewire.mix-info.max-info-component', ['mix_infos'=>$mix_infos])->layout('livewire.layouts.base');
    }
}
