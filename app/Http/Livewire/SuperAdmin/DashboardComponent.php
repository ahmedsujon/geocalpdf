<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Commercial;
use App\Models\CompressiveStrength;
use App\Models\Concrete;
use App\Models\ConcreteTestResult;
use App\Models\FieldDensityCdot;
use App\Models\InspectionConcrete;
use App\Models\InspectionConcreteSetEight;
use App\Models\InspectionConcreteSetFive;
use App\Models\InspectionConcreteSetFour;
use App\Models\InspectionConcreteSetNine;
use App\Models\InspectionConcreteSetSeven;
use App\Models\InspectionConcreteSetSix;
use App\Models\InspectionConcreteSetTen;
use App\Models\InspectionConcreteSetThree;
use App\Models\InspectionConcreteSetTwo;
use App\Models\PlasticConcrete;
use App\Models\SoilAggregate;
use DateTime;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardComponent extends Component
{

    use WithPagination;
    public $sortingValue = 5, $searchTerm;

    public $edit_id;

    public static function ago($timestamp)
    {

        $today = new DateTime(date('y-m-d h:i:s'));
        $thatDay = new DateTime($timestamp);
        $dt = $today->diff($thatDay);

        if ($dt->y > 0) {
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
        $ret = $number . " " . $unit . " " . "ago";
        return $ret;
    }

    public function render()
    {
        $concreate_test_result_forms = ConcreteTestResult::orderBy('id', 'DESC')->where('publish_status', 'publish')->take(3)->get();
        $compressive_strenght_forms = CompressiveStrength::orderBy('id', 'DESC')->where('publish_status', 'publish')->take(3)->get();
        $commercial_forms = Commercial::orderBy('id', 'DESC')->take(3)->get();
        $cdot_forms = FieldDensityCdot::orderBy('id', 'DESC')->take(3)->get();
        $soil_aggregates = SoilAggregate::orderBy('id', 'DESC')->take(3)->get();
        $plastic_concretes = PlasticConcrete::orderBy('id', 'DESC')->take(3)->get();
        $concrete_ones = InspectionConcrete::orderBy('id', 'DESC')->take(3)->get();
        $concrete_twos = InspectionConcreteSetTwo::orderBy('id', 'DESC')->take(3)->get();
        $concrete_threes = InspectionConcreteSetThree::orderBy('id', 'DESC')->take(3)->get();
        $concrete_fours = InspectionConcreteSetFour::orderBy('id', 'DESC')->take(3)->get();
        $concrete_fives = InspectionConcreteSetFive::orderBy('id', 'DESC')->take(3)->get();
        $concrete_sixs = InspectionConcreteSetSix::orderBy('id', 'DESC')->take(3)->get();
        $concrete_sevens = InspectionConcreteSetSeven::orderBy('id', 'DESC')->take(3)->get();
        $concrete_eights = InspectionConcreteSetEight::orderBy('id', 'DESC')->take(3)->get();
        $concrete_nines = InspectionConcreteSetNine::orderBy('id', 'DESC')->take(3)->get();
        $concrete_tens = InspectionConcreteSetTen::orderBy('id', 'DESC')->take(3)->get();
        return view('livewire.super-admin.dashboard-component', [
            'concreate_test_result_forms'=> $concreate_test_result_forms,
            'compressive_strenght_forms'=> $compressive_strenght_forms,
            'commercial_forms' => $commercial_forms,
            'cdot_forms' => $cdot_forms,
            'soil_aggregates' => $soil_aggregates,
            'plastic_concretes' => $plastic_concretes,
            'concrete_ones' => $concrete_ones,
            'concrete_twos' => $concrete_twos,
            'concrete_threes' => $concrete_threes,
            'concrete_fours' => $concrete_fours,
            'concrete_fives' => $concrete_fives,
            'concrete_sixs' => $concrete_sixs,
            'concrete_sevens' => $concrete_sevens,
            'concrete_eights' => $concrete_eights,
            'concrete_nines' => $concrete_nines,
            'concrete_tens' => $concrete_tens,
        ])
            ->layout('livewire.layouts.base');
    }
}
