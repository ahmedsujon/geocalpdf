<?php

namespace App\Http\Livewire\NormalAdmin;

use App\Models\FieldDensityCdot;
use App\Models\FieldDensityCommercial;
use App\Models\File;
use App\Models\TemplateOne;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardComponent extends Component
{
    use WithPagination;
    public $sortingValue = 8, $searchTerm;
    
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
        $cdot_forms = FieldDensityCdot::orderBy('id', 'DESC')->take(5)->get();
        $commercial_forms = FieldDensityCommercial::orderBy('id', 'DESC')->take(5)->get();
        $temp_one_forms = TemplateOne::orderBy('id', 'DESC')->take(5)->get();
        $activities = FieldDensityCdot::orderBy('id', 'DESC')->paginate($this->sortingValue);
        return view('livewire.normal-admin.dashboard-component', ['cdot_forms'=>$cdot_forms, 'commercial_forms'=>$commercial_forms, 'temp_one_forms'=>$temp_one_forms, 'activities'=>$activities])->layout('livewire.layouts.base');
    }
}
