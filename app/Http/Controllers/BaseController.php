<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function getSupervisor(Request $request)
    {
        $output = '<option value="">Assign Supervisor</option>';

        $project_id = $request->get('project_id');

        $data = Project::where('id', $project_id)->first()->responsible_supervisor;

        foreach (json_decode($data) as $row) {
            $output .= '<option value="' . $row . '">' . user($row)->name . '</option>';
        }

        echo $output;
    }
}
