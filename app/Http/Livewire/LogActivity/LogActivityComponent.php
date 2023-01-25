<?php

namespace App\Http\Livewire\LogActivity;

use App\Helpers\LogActivity;
use Livewire\Component;

class LogActivityComponent extends Component
{

    public function myTestAddToLog()
    {
        LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }

    public function render()
    {
        return view('livewire.log-activity.log-activity-component')->layout('livewire.layouts.base');
    }
}
