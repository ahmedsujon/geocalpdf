<?php

namespace App\Http\Livewire\ProjectEng;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.project-eng.dashboard-component')->layout('livewire.layouts.base');
    }
}
