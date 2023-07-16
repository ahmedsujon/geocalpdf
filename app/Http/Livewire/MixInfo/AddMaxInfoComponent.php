<?php

namespace App\Http\Livewire\MixInfo;

use App\Models\MixInfo;
use Livewire\Component;

class AddMaxInfoComponent extends Component
{
    public $mix_id, $supplier, $plant, $mix_type, $max_theoretical_density, $max_theoretical_specificGravity;

    public function storeData()
    {
        $this->validate([
            'mix_id' => 'required',
            'supplier' => 'required',
            'plant' => 'required',
            'mix_type' => 'required',
            'max_theoretical_density' => 'required',
            'max_theoretical_specificGravity' => 'required',
        ]);

        $proctor = new MixInfo();
        $proctor->mix_id = $this->mix_id;
        $proctor->supplier = $this->supplier;
        $proctor->plant = $this->plant;
        $proctor->mix_type = $this->mix_type;
        $proctor->max_theoretical_density = $this->max_theoretical_density;
        $proctor->max_theoretical_specificGravity = $this->max_theoretical_specificGravity;
        $proctor->save();

        session()->flash('success', 'Mix Info added successfully');
        return redirect()->route('mixInfo.list');
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->mix_id = '';
        $this->supplier = '';
        $this->plant = '';
        $this->mix_type = '';
        $this->max_theoretical_density = '';
        $this->max_theoretical_specificGravity = '';
    }

    public function render()
    {
        return view('livewire.mix-info.add-max-info-component')->layout('livewire.layouts.base');
    }
}
