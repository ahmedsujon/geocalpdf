<?php

namespace App\Http\Livewire\User;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditUserComponent extends Component
{
    use WithFileUploads;
    
    public $role_id, $name, $email, $avatar, $new_avatar, $password, $confirm_password, $phone, $user_id;

    public function mount($user_id)
    {
        $user = User::where('id', $user_id)->first();
        $this->role_id = $user->role_id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->new_avatar = $user->avatar;
        $this->user_id = $user->id;
    }

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
    
    public function updateData()
    {
        $this->validate([
            'role_id'=>'required',
            'email' => 'required|unique:users,email,'.Auth::user()->id.'',
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        $user = User::where('id', $this->user_id)->first();
        $user->role_id = $this->role_id;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        if($this->password != ''){
            $user->password = Hash::make($this->password);
        }
        

        if($this->avatar != ''){
            $imageName = Carbon::now()->timestamp. '.' . $this->avatar->extension();
            $this->avatar->storeAs('user',$imageName);
            $user->avatar = $imageName;
        }

        $user->save();
        $this->dispatchBrowserEvent('success', ['message'=>'User Updated successfully']);
        return redirect()->back();
    }

    public function render()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        return view('livewire.user.edit-user-component', ['roles' => $roles])->layout('livewire.layouts.base');
    }
}
