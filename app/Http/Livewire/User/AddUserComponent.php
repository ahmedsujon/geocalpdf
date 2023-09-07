<?php

namespace App\Http\Livewire\User;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddUserComponent extends Component
{
    use WithFileUploads;

    public $role_id, $name, $email, $avatar, $password, $confirm_password, $phone;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email,',
            'password' => 'min:8|same:confirm_password',
            'confirm_password' => 'min:8',
            'role_id' => 'required',
        ]);
    }

    public function storeData()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email,',
            'password' => 'min:8|same:confirm_password',
            'confirm_password' => 'min:8',
            'role_id' => 'required',
        ]);

        $data = new User();
        $data->role_id = $this->role_id;
        $data->name = $this->name;
        $data->email = $this->email;
        $data->password = Hash::make($this->password);
        $data->phone = $this->phone;

        if($this->avatar!=null){
            $imageName = Carbon::now()->timestamp. '.' . $this->avatar->extension();
            $this->avatar->storeAs('user',$imageName);
            $data->avatar = $imageName;
        }
        
        $data->save();
        $this->dispatchBrowserEvent('success', ['message'=>'User created successfully']);
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->role_id = '';
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->confirm_password = '';
        $this->phone = '';
        $this->avatar = '';
    }

    public function render()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        return view('livewire.user.add-user-component', ['roles'=>$roles])->layout('livewire.layouts.base');
    }
}
