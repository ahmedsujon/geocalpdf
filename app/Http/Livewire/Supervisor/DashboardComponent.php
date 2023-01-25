<?php

namespace App\Http\Livewire\Supervisor;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.supervisor.dashboard-component')->layout('livewire.layouts.base');
    }
}
