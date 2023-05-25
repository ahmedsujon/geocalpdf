<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email, $password;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $getUser = User::where('email', $this->email)->first();

        if ($getUser != '') {
            if (Hash::check($this->password, $getUser->password)) {
                Auth::attempt(['email' => $this->email, 'password' => $this->password]);

                $this->dispatchBrowserEvent('success', ['message' => 'Login Successful']);

                if(Auth::user()->role_id == 1){
                    return redirect()->route('admin.super.admin.dashboard');
                }
                elseif(Auth::user()->role_id == 2){
                    return redirect()->route('admin.project.engineer.dashboard');
                }
                elseif(Auth::user()->role_id == 3){
                    return redirect()->route('admin.clerk.dashboard');
                }
                elseif(Auth::user()->role_id == 4){
                    return redirect()->route('admin.supervisor.dashboard');
                }
                elseif(Auth::user()->role_id == 5){
                    return redirect()->route('admin.tech.dashboard');
                }
                
            } else {
                session()->flash('errorMessage', 'Invalid email or password');
            }
        } else {
            session()->flash('errorMessage', 'Invalid email or password');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-component')->layout('livewire.auth.auth-base');
    }
}
