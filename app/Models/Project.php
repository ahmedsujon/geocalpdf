<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    // protected $casts = [
    //     'responsible_supervisor' => 'array',
    //     'responsible_supervisor' => 'array',
    //     'responsible_supervisor' => 'array',
    // ];
}
