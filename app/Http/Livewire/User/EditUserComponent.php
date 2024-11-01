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

    public $role_id, $name, $email, $avatar, $new_avatar, $password, $password_confirmation, $phone, $user_id;

    public $user; // Add this line to define a public property

    public function mount($user_id)
    {
        $user = User::where('id', $user_id)->first();
        if ($user) {
            $this->user = $user;
            $this->role_id = $user->role_id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone = $user->phone;
            $this->new_avatar = $user->avatar;
            $this->user_id = $user->id;
        } else {
            session()->flash('errorMessage', 'User not found.');
            return redirect()->route('some.route');
        }
    }


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email,',
            'role_id' => 'required',
        ]);
    }

    public function updateData()
    {
        if ($this->password) {
            $this->validate([
                'role_id' => 'required',
                'email' => 'required|email',
                'name' => 'required',
                'phone' => 'required',
                'password' => 'required|min:8|confirmed',
            ]);
        } else {
            $this->validate([
                'role_id' => 'required',
                'email' => 'required|email',
                'name' => 'required',
                'phone' => 'required',
            ]);
        }

        $user = User::where('id', $this->user_id)->first();
        $user->role_id = $this->role_id;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;

        if ($this->password != '') {
            $user->password = Hash::make($this->password);
        }

        if ($this->avatar) {
            $fileName = uniqid() . Carbon::now()->timestamp . '.' . $this->avatar->extension();
            $this->avatar->storeAs('profile_images', $fileName);
            $user->avatar = 'uploads/profile_images/' . $fileName;
        } else {
            $user->avatar = 'assets/images/avatar.png';
        }

        $user->save();
        $this->dispatchBrowserEvent('success', ['message' => 'User Updated successfully']);
        return redirect()->back();
    }

    public function changeStatus($id, $status)
    {
        User::where('id', $id)->update(['status' => ($status == 1 ? 0 : 1)]);
        session()->flash('successMessage', 'User status changed successfully.');
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        return view('livewire.user.edit-user-component', ['roles' => $roles])->layout('livewire.layouts.base');
    }
}
