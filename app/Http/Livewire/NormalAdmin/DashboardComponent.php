<?php

namespace App\Http\Livewire\NormalAdmin;

use DateTime;
use Livewire\Component;
use App\Models\Concrete;
use App\Models\Commercial;
use App\Models\CompressiveStrength;
use App\Models\ConcreteTestResult;
use App\Models\TemplateOne;
use Livewire\WithPagination;
use App\Models\SoilAggregate;
use App\Models\PlasticConcrete;
use App\Models\FieldDensityCdot;
use App\Models\InspectionConcrete;
use Illuminate\Support\Facades\Auth;
use App\Models\InspectionConcreteSetSix;
use App\Models\InspectionConcreteSetTen;
use App\Models\InspectionConcreteSetTwo;
use App\Models\InspectionConcreteSetFive;
use App\Models\InspectionConcreteSetFour;
use App\Models\InspectionConcreteSetNine;
use App\Models\InspectionConcreteSetEight;
use App\Models\InspectionConcreteSetSeven;
use App\Models\InspectionConcreteSetThree;

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
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concreate_test_result_forms = ConcreteTestResult::orderBy('id', 'DESC')->where('publish_status', 'publish')->take(3)->get();
        } else {
            $concreate_test_result_forms = collect([]);
            $all_files = ConcreteTestResult::orderBy('id', 'DESC')->where('publish_status', 'publish')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concreate_test_result_forms->push($file);
                }
            }
            $concreate_test_result_forms = $concreate_test_result_forms->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $compressive_strenght_forms = CompressiveStrength::orderBy('id', 'DESC')->where('publish_status', 'publish')->take(3)->get();
        } else {
            $compressive_strenght_forms = collect([]);
            $all_files = CompressiveStrength::orderBy('id', 'DESC')->where('publish_status', 'publish')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $compressive_strenght_forms->push($file);
                }
            }
            $compressive_strenght_forms = $compressive_strenght_forms->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $commercial_forms = Commercial::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $commercial_forms = collect([]);
            $all_files = Commercial::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $commercial_forms->push($file);
                }
            }
            $commercial_forms = $commercial_forms->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $cdot_forms = FieldDensityCdot::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $cdot_forms = collect([]);
            $all_files = FieldDensityCdot::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $cdot_forms->push($file);
                }
            }
            $cdot_forms = $cdot_forms->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $soil_aggregates = SoilAggregate::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $soil_aggregates = collect([]);
            $all_files = SoilAggregate::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $soil_aggregates->push($file);
                }
            }
            $soil_aggregates = $soil_aggregates->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $plastic_concretes = PlasticConcrete::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $plastic_concretes = collect([]);
            $all_files = PlasticConcrete::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $plastic_concretes->push($file);
                }
            }
            $plastic_concretes = $plastic_concretes->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_ones = InspectionConcrete::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_ones = collect([]);
            $all_files = InspectionConcrete::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_ones->push($file);
                }
            }
            $concrete_ones = $concrete_ones->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_twos = InspectionConcreteSetTwo::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_twos = collect([]);
            $all_files = InspectionConcreteSetTwo::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_twos->push($file);
                }
            }
            $concrete_twos = $concrete_twos->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_threes = InspectionConcreteSetThree::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_threes = collect([]);
            $all_files = InspectionConcreteSetThree::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_threes->push($file);
                }
            }
            $concrete_threes = $concrete_threes->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_fours = InspectionConcreteSetFour::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_fours = collect([]);
            $all_files = InspectionConcreteSetFour::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_fours->push($file);
                }
            }
            $concrete_fours = $concrete_fours->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_fives = InspectionConcreteSetFive::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_fives = collect([]);
            $all_files = InspectionConcreteSetFive::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_fives->push($file);
                }
            }
            $concrete_fives = $concrete_fives->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_sixs = InspectionConcreteSetSix::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_sixs = collect([]);
            $all_files = InspectionConcreteSetSix::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_sixs->push($file);
                }
            }
            $concrete_sixs = $concrete_sixs->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_sevens = InspectionConcreteSetSeven::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_sevens = collect([]);
            $all_files = InspectionConcreteSetSeven::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_sevens->push($file);
                }
            }
            $concrete_sevens = $concrete_sevens->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_eights = InspectionConcreteSetEight::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_eights = collect([]);
            $all_files = InspectionConcreteSetEight::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_eights->push($file);
                }
            }
            $concrete_eights = $concrete_eights->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_nines = InspectionConcreteSetNine::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_nines = collect([]);
            $all_files = InspectionConcreteSetNine::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_nines->push($file);
                }
            }
            $concrete_nines = $concrete_nines->take(3);
        }
        if (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') {
            $concrete_tens = InspectionConcreteSetTen::orderBy('id', 'DESC')->take(3)->get();
        } else {
            $concrete_tens = collect([]);
            $all_files = InspectionConcreteSetTen::orderBy('id', 'DESC')->get();
            foreach ($all_files as $key => $file) {
                if (in_array(Auth::user()->id, json_decode($file->responsible_person))) {
                    $concrete_tens->push($file);
                }
            }
            $concrete_tens = $concrete_tens->take(3);
        }

        return view('livewire.super-admin.dashboard-component', [
            'concreate_test_result_forms' => $concreate_test_result_forms,
            'compressive_strenght_forms' => $compressive_strenght_forms,
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
