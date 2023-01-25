<?php

use App\Models\Client;
use App\Models\Proctor;
use App\Models\Project;
use App\Models\User;

function user($id)
{
    $user = User::where('id', $id)->first();
    return $user;
}

function client($id)
{
    return Client::where('id', $id)->first();
}

function proctor($id)
{
    return Proctor::where('id', $id)->first();
}

function project($id)
{
    return Project::where('id', $id)->first();
}


function loadingState($key, $title)
{
    $loadingSpinner = '
        <div wire:loading wire:target="' . $key . '" wire:key="' . $key . '"><i class="fa fa-spinner fa-spin" style="width: 100%;"></i></div> ' . $title . '
    ';

    return $loadingSpinner;
}
