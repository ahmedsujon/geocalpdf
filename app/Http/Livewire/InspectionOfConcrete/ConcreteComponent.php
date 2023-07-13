<?php

namespace App\Http\Livewire\InspectionOfConcrete;

use Livewire\Component;

class ConcreteComponent extends Component
{
    public function render()
    {
        return view('livewire.inspection-of-concrete.concrete-component')->layout('livewire.layouts.base');
    }
}
