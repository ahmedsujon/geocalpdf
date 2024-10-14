<?php

use App\Models\Role;
use App\Models\User;
use App\Models\Client;
use App\Models\MixInfo;
use App\Models\Proctor;
use App\Models\Project;
use App\Models\InspectionConcrete;
use App\Models\InspectionConcreteSetSix;
use App\Models\InspectionConcreteSetTen;
use App\Models\InspectionConcreteSetTwo;
use App\Models\InspectionConcreteSetFive;
use App\Models\InspectionConcreteSetFour;
use App\Models\InspectionConcreteSetNine;
use App\Models\InspectionConcreteSetEight;
use App\Models\InspectionConcreteSetSeven;
use App\Models\InspectionConcreteSetThree;
use App\Models\SubClient;

function user($id)
{
    $user = User::where('id', $id)->first();
    return $user;
}

function subClient($id)
{
    $subclient = SubClient::where('id', $id)->first();
    return $subclient;
}

function userRole($id)
{
    return Role::where('id', $id)->first();
}

function client($id)
{
    return Client::where('id', $id)->first();
}

function proctor($id)
{
    return Proctor::where('id', $id)->first();
}

function mixInfo($id)
{
    return MixInfo::where('id', $id)->first();
}

function project($id)
{
    return Project::where('id', $id)->first();
}

function getProject($id)
{
    return Project::where('id', $id)->first();
}

function getUser($id)
{
    return User::where('id', $id)->first();
}
function totalSet($id)
{
    $project_id = $id;
    $set_one = InspectionConcrete::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_two = InspectionConcreteSetTwo::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_three = InspectionConcreteSetThree::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_four = InspectionConcreteSetFour::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_five = InspectionConcreteSetFive::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_six = InspectionConcreteSetSix::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_seven = InspectionConcreteSetSeven::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_eight = InspectionConcreteSetEight::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_nine = InspectionConcreteSetNine::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_ten = InspectionConcreteSetTen::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();

    $totalSetOfData = 0;
    if($set_one){
        $totalSetOfData += 1;
    }
    if($set_two){
        $totalSetOfData += 1;
    }
    if($set_three){
        $totalSetOfData += 1;
    }
    if($set_four){
        $totalSetOfData += 1;
    }
    if($set_five){
        $totalSetOfData += 1;
    }
    if($set_six){
        $totalSetOfData += 1;
    }
    if($set_seven){
        $totalSetOfData += 1;
    }
    if($set_eight){
        $totalSetOfData += 1;
    }
    if($set_nine){
        $totalSetOfData += 1;
    }
    if($set_ten){
        $totalSetOfData += 1;
    }
    return $totalSetOfData;
}

function displayTotalSet($id)
{
    $project_id = $id;
    $set_one = InspectionConcrete::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_two = InspectionConcreteSetTwo::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_three = InspectionConcreteSetThree::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_four = InspectionConcreteSetFour::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_five = InspectionConcreteSetFive::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_six = InspectionConcreteSetSix::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_seven = InspectionConcreteSetSeven::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_eight = InspectionConcreteSetEight::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_nine = InspectionConcreteSetNine::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();
    $set_ten = InspectionConcreteSetTen::where('project_id', $project_id)->orderBy('updated_at', 'DESC')->first();

    $totalSetOfData = [];
    if($set_one){
        $totalSetOfData[] = 'Set-1';
    }
    if($set_two){
        $totalSetOfData[] = 'Set-2';
    }
    if($set_three){
        $totalSetOfData[] = 'Set-3';
    }
    if($set_four){
        $totalSetOfData[] = 'Set-4';
    }
    if($set_five){
        $totalSetOfData[] = 'Set-5';
    }
    if($set_six){
        $totalSetOfData[] = 'Set-6';
    }
    if($set_seven){
        $totalSetOfData[] = 'Set-7';
    }
    if($set_eight){
        $totalSetOfData[] = 'Set-8';
    }
    if($set_nine){
        $totalSetOfData[] = 'Set-9';
    }
    if($set_ten){
        $totalSetOfData[] = 'Set-10';
    }
    return $totalSetOfData;
}

function loadingStateStatus($key, $title)
{
    $loadingSpinner = '
        <div wire:loading wire:target="' . $key . '" wire:key="' . $key . '"><span class="spinner-border spinner-border-xs" role="status" aria-hidden="true"></span></div> ' . $title . '
    ';
    return $loadingSpinner;
}

function loadingState($key, $title)
{
    $loadingSpinner = '
        <div wire:loading wire:target="' . $key . '" wire:key="' . $key . '"><i class="fa fa-spinner fa-spin" style="width: 100%;"></i></div> ' . $title . '
    ';
    return $loadingSpinner;
}

function loadingStateSnd($key, $title)
{
    $loadingSpinner = '
        <div wire:loading wire:target="' . $key . '" wire:key="' . $key . '"><i class="fa fa-spinner fa-spin" style="width: 100%;"></i></div> ' . $title . '
    ';
    return $loadingSpinner;
}
