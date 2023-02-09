<?php

namespace App\Http\Livewire\Proctor;

use App\Models\Proctor;
use Livewire\Component;

class EditProctorComponent extends Component
{
    public $proctor_id, $proctorid, $material_description, $max_dry_density, $optimum_moisture, $test_method, $status;
    
    public function mount($proctor_id)
    {
        $proctor = Proctor::where('id', $proctor_id)->first();
        $this->proctorid = $proctor->proctorid;
        $this->material_description = $proctor->material_description;
        $this->max_dry_density = $proctor->max_dry_density;
        $this->optimum_moisture = $proctor->optimum_moisture;
        $this->test_method = $proctor->test_method;
       
    }

    public function updateData()
    {
        $this->validate([
            'proctorid' => 'required',
            'material_description' => 'required',
            'max_dry_density' => 'required',
            'optimum_moisture' => 'required',
            'test_method' => 'required',
        ]);

        $proctor = Proctor::where('id', $this->proctor_id)->first();
        $proctor->proctorid = $this->proctorid;
        $proctor->material_description = $this->material_description;
        $proctor->max_dry_density = $this->max_dry_density;
        $proctor->optimum_moisture = $this->optimum_moisture;
        $proctor->test_method = $this->test_method;
        $proctor->save();

        session()->flash('success', 'Proctor updated successfully');
        return redirect()->route('proctor.list');
    }

    public function render()
    {
        return view('livewire.proctor.edit-proctor-component')->layout('livewire.layouts.base');
    }
}
