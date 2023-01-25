<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
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
        $data = User::find($this->delete_id);
        $data->delete();
        $this->delete_id = '';

        $this->dispatchBrowserEvent('UserDeleted');

    }

    public function render()
    {
        $users = User::orderBy('id', 'DESC')->where('name', 'like', '%'.$this->searchTerm.'%')->paginate($this->sortingValue);
        return view('livewire.user.user-component', [ 'users'=>$users ])->layout('livewire.layouts.base');
    }
}
