<?php

namespace App\Http\Livewire\MixInfo;

use App\Models\MixInfo;
use Livewire\Component;

class EditMaxInfoComponent extends Component
{
    public $mix_info_id, $mix_id, $supplier, $plant, $mix_type, $max_theoretical_density, $max_theoretical_specificGravity;

    public function mount($mix_info_id)
    {
        $mixInfo = MixInfo::where('id', $mix_info_id)->first();
        $this->mix_id = $mixInfo->mix_id;
        $this->supplier = $mixInfo->supplier;
        $this->plant = $mixInfo->plant;
        $this->mix_type = $mixInfo->mix_type;
        $this->max_theoretical_density = $mixInfo->max_theoretical_density;
        $this->max_theoretical_specificGravity = $mixInfo->max_theoretical_specificGravity;
    }

    public function updateData()
    {
        $this->validate([
            'mix_id' => 'required',
            'supplier' => 'required',
            'plant' => 'required',
            'mix_type' => 'required',
            'max_theoretical_density' => 'required',
            'max_theoretical_specificGravity' => 'required',
        ]);

        $data = MixInfo::where('id', $this->mix_info_id)->first();
        $data->mix_id = $this->mix_id;
        $data->supplier = $this->supplier;
        $data->plant = $this->plant;
        $data->mix_type = $this->mix_type;
        $data->max_theoretical_density = $this->max_theoretical_density;
        $data->max_theoretical_specificGravity = $this->max_theoretical_specificGravity;
        $data->save();

        session()->flash('success', 'Mix Info added successfully');
        return redirect()->route('mixInfo.list');
        $this->resetInputs();
    }

    public function render()
    {
        return view('livewire.mix-info.edit-max-info-component')->layout('livewire.layouts.base');
    }
}
