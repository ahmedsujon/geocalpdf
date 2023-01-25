<?php

namespace App\Http\Livewire\Templates;

use Livewire\Component;

class TemplateComponent extends Component
{
    public function render()
    {
        return view('livewire.templates.template-component')->layout('livewire.layouts.base');
    }
}