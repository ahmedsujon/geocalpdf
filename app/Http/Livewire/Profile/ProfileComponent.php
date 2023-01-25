<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileComponent extends Component
{
    public $role_id, $name, $phone, $email, $password, $confirm_password, $avatar, $new_avatar;

    use WithFileUploads;

    public function mount()
    {
        $getData = User::where('id', Auth::user()->id)->first();

        $this->name = $getData->name;
        $this->phone = $getData->phone;
        $this->email = $getData->email;
        $this->new_avatar = $getData->avatar;
    }

    public function storeData()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.Auth::user()->id.'',
            'password' => 'min:8|same:confirm_password',
            'confirm_password' => 'min:8'
        ]);

        $profile = User::where('id', Auth::user()->id)->first();
        $profile->name = $this->name;
        $profile->phone = $this->phone;
        $profile->email = $this->email;
        $profile->password = Hash::make($this->password);

        $imageName = Carbon::now()->timestamp. '.' . $this->avatar->extension();
        $this->avatar->storeAs('profile',$imageName);
        $profile->avatar = $imageName;

        $profile->save();
        $this->dispatchBrowserEvent('success', ['message'=>'Profile Updated Successfully']);

    }

    public function render()
    {
        $profile = User::find(Auth::user()->id);
        return view('livewire.profile.profile-component', ['profile'=>$profile])->layout('livewire.layouts.base');
    }
}
