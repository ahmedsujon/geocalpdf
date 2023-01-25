<?php

namespace App\Http\Livewire\Files;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

class ArchiveFileComponent extends Component
{
    use WithPagination;
    public $sortingValue = 10, $searchTerm, $delete_id;
    protected $listeners = ['deleteConfirmed'=>'deleteData'];

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function render()
    {
        $archiveFiles = File::orderBy('id', 'DESC')->paginate($this->sortingValue);
        return view('livewire.files.archive-file-component', ['archiveFiles'=>$archiveFiles])->layout('livewire.layouts.base');
    }
}
