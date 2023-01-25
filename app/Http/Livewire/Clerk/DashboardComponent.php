<?php

namespace App\Http\Livewire\Clerk;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.clerk.dashboard-component')->layout('livewire.layouts.base');
    }
}
