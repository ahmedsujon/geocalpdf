<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm, $searchTermStatus = 0;

    protected $listeners = ['deleteConfirmed'=>'deleteData'];
    public $edit_id, $delete_id;

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function changeStatus($id, $status)
    {
        User::where('id', $id)->update(['status' => ($status == 1 ? 0 : 1)]);
        $this->dispatchBrowserEvent('success', ['message' => 'User diactivated successfully.']);
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
        $users = User::orderBy('id', 'DESC')
        ->where('name', 'like', '%'.$this->searchTerm.'%')
        ->where('status', 'like', '%' . $this->searchTermStatus . '%')
        ->paginate($this->sortingValue);
        return view('livewire.user.user-component', [ 'users'=>$users ])->layout('livewire.layouts.base');
    }
}
