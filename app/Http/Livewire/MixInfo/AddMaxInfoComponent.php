<?php

namespace App\Http\Livewire\MixInfo;

use App\Models\MixInfo;
use Livewire\Component;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AddMaxInfoComponent extends Component
{
    public $mix_id, $supplier, $plant, $mix_type, $max_theoretical_density, $max_theoretical_specific_gravity, $signature;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'mix_id' => 'required',
            'supplier' => 'required',
            'plant' => 'required',
            'mix_type' => 'required',
            'max_theoretical_density' => 'required',
            'max_theoretical_specific_gravity' => 'required',
        ]);
    }

    public function storeData()
    {
        $this->validate([
            'mix_id' => 'required',
            'supplier' => 'required',
            'plant' => 'required',
            'mix_type' => 'required',
            'max_theoretical_density' => 'required',
            'max_theoretical_specific_gravity' => 'required',
        ]);

        $proctor = new MixInfo();
        $proctor->mix_id = $this->mix_id;
        $proctor->supplier = $this->supplier;
        $proctor->plant = $this->plant;
        $proctor->mix_type = $this->mix_type;
        $proctor->max_theoretical_density = $this->max_theoretical_density;
        $proctor->max_theoretical_specific_gravity = $this->max_theoretical_specific_gravity;
        $proctor->signature = $this->signature;


        // $folderPath = public_path('uploads/');
        // $signature = $this->signature;
        // // Ensure folder exists, otherwise create it
        // File::ensureDirectoryExists($folderPath);
        // // Extract image type and base64 data
        // list(, $image_data) = explode(';', $signature);
        // list(, $image_base64) = explode(',', $image_data);
        // // Decode base64 data
        // $image = base64_decode($image_base64);
        // // Generate unique filename
        // $filename = uniqid() . '.' . explode('/', mime_content_type($signature))[1];
        // // Write image data to file
        // if (file_put_contents($folderPath . $filename, $image) !== false) {
        //     return back()->with('success', 'Image uploaded successfully.');
        // } else {
        //     return back()->with('error', 'Failed to upload image.');
        // }


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
        $this->mix_type = '';
        $this->signature = '';
        $this->max_theoretical_specific_gravity = '';
    }

    public function render()
    {
        return view('livewire.mix-info.add-max-info-component')->layout('livewire.layouts.base');
    }
}
