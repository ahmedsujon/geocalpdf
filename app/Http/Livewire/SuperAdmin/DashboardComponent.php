<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\File;
use DateTime;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardComponent extends Component
{

    use WithPagination;
    public $sortingValue = 10, $searchTerm;
    
    public $edit_id;

    public static function ago($timestamp){

        $today = new DateTime(date('y-m-d h:i:s'));
        $thatDay = new DateTime($timestamp);
        $dt = $today->diff($thatDay);

        if ($dt->y > 0){
            $number = $dt->y;
            $unit = "year";
        } else if ($dt->m > 0) {
            $number = $dt->m;
            $unit = "month";
        } else if ($dt->d > 0) {
            $number = $dt->d;
            $unit = "day";
        } else if ($dt->h > 0) {
            $number = $dt->h;
            $unit = "hour";
        } else if ($dt->i > 0) {
            $number = $dt->i;
            $unit = "minute";
        } else if ($dt->s > 0) {
            $number = $dt->s;
            $unit = "second";
        }

        $unit .= $number  > 1 ? "s" : "";
        $ret = $number." ".$unit." "."ago";
        return $ret;
    }

    public function render()
    {
        $files = File::orderBy('id', 'DESC')->take(2)->get();
        $activities = File::orderBy('id', 'DESC')->paginate($this->sortingValue);
        return view('livewire.super-admin.dashboard-component', ['files'=>$files, 'activities'=>$activities])->layout('livewire.layouts.base');
    }
}
