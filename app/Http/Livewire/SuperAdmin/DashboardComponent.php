<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Commercial;
use App\Models\Concrete;
use App\Models\FieldDensityCdot;
use App\Models\PlasticConcrete;
use App\Models\SoilAggregate;
use App\Models\TemplateOne;
use DateTime;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardComponent extends Component
{

    use WithPagination;
    public $sortingValue = 5, $searchTerm;
    
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
        $commercial_forms = SoilAggregate::orderBy('id', 'DESC')->take(5)->get();
        $cdot_forms = FieldDensityCdot::orderBy('id', 'DESC')->take(5)->get();
        $soil_aggregates = Commercial::orderBy('id', 'DESC')->take(5)->get();
        $concretes = Concrete::orderBy('id', 'DESC')->take(5)->get();
        $plastic_concretes = PlasticConcrete::orderBy('id', 'DESC')->take(5)->get();
        return view('livewire.super-admin.dashboard-component', ['cdot_forms'=>$cdot_forms, 'commercial_forms'=>$commercial_forms, 'soil_aggregates'=>$soil_aggregates, 'concretes'=>$concretes, 'plastic_concretes'=>$plastic_concretes])->layout('livewire.layouts.base');
    }
}
