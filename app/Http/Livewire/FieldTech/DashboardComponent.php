<?php

namespace App\Http\Livewire\FieldTech;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.field-tech.dashboard-component')->layout('livewire.layouts.base');
    }
}
