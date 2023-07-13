<?php

namespace App\Http\Livewire\InspectionOfConcrete;

use Livewire\Component;

class ViewConcreteComponent extends Component
{
    public function render()
    {
        return view('livewire.inspection-of-concrete.view-concrete-component')->layout('livewire.layouts.base');
    }
}
