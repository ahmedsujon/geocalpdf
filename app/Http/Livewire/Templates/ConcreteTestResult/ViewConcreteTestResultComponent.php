<?php

namespace App\Http\Livewire\Templates\ConcreteTestResult;

use Livewire\Component;

class ViewConcreteTestResultComponent extends Component
{
    public function render()
    {
        return view('livewire.templates.concrete-test-result.view-concrete-test-result-component')->layout('livewire.layouts.base');
    }
}
