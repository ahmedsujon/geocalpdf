<?php

namespace App\Http\Livewire\Proctor;

use App\Models\Proctor;
use Livewire\Component;

class AddProctorComponent extends Component
{
    public $proctorid, $material_description, $max_dry_density, $optimum_moisture, $test_method, $status;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'proctorid' => 'required',
            'material_description' => 'required',
            'test_method' => 'required',
            'max_dry_density' => 'required',
            'optimum_moisture' => 'required',
        ]);
    }

    public function storeData()
    {
        $this->validate([
            'proctorid' => 'required',
            'material_description' => 'required',
            'test_method' => 'required',
            'max_dry_density' => 'required',
            'optimum_moisture' => 'required',
        ]);

        $proctor = new Proctor();
        $proctor->proctorid = $this->proctorid;
        $proctor->material_description = $this->material_description;
        $proctor->max_dry_density = $this->max_dry_density;
        $proctor->optimum_moisture = $this->optimum_moisture;
        $proctor->test_method = $this->test_method;
        $proctor->save();

        session()->flash('success', 'Proctor added successfully');
        return redirect()->route('proctor.list');
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->proctorid = '';
        $this->material_description = '';
        $this->max_dry_density = '';
        $this->optimum_moisture = '';
        $this->test_method = '';
    }

    public function render()
    {
        return view('livewire.proctor.add-proctor-component')->layout('livewire.layouts.base');
    }
}
