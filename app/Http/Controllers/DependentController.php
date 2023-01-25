<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DependentController extends Controller
{
    // public function getCustomers(Request $request)
    // {
    //     $output = '';

    //     $file_id = $request->get('file_id');
    //     $value = $request->get('value');
    //     $dependent = $request->get('dependent');

    //     // DB::statement("SET SQL_MODE=''");

    //     if ($value == 'sentToClient') {
    //         $getCustomer = PFile::where('id', $file_id)->first()->client_id;

    //         // $data = Customer::where('id', $getCustomer)->first();
    //         $data = SubCustomer::where('company_id', $getCustomer)->get();
    //     } else if ($value == 'sentToTech'){
    //         $projectID = PFile::where('id', $file_id)->first()->project_id;

    //         $data = User::whereHas(
    //             'roles',
    //             function ($q) {
    //                 $q->where('name', 'user');
    //             }
    //         )
    //         ->whereIn('id', function ($query) use ($projectID) {
    //             $query->select('user_id')
    //                 ->from('project_user')
    //                 ->where('project_user.project_id', $projectID);
    //         })->get();
    //     } else if ($value == 'sentToSupervisor'){
    //         $projectID = PFile::where('id', $file_id)->first()->project_id;

    //         $data = User::whereHas(
    //             'roles',
    //             function ($q) {
    //                 $q->where('name', 'supervisor');
    //             }
    //         )
    //         ->whereIn('id', function ($query) use ($projectID) {
    //             $query->select('user_id')
    //                 ->from('project_user')
    //                 ->where('project_user.project_id', $projectID);
    //         })->get();
    //     }

    //     else if ($value == 'sentToClerk'){
    //         $projectID = PFile::where('id', $file_id)->first()->project_id;

    //         $data = User::whereHas(
    //             'roles',
    //             function ($q) {
    //                 $q->where('name', 'clerk');
    //             }
    //         )
    //         ->whereIn('id', function ($query) use ($projectID) {
    //             $query->select('user_id')
    //                 ->from('project_user')
    //                 ->where('project_user.project_id', $projectID);
    //         })->get();
    //     }
    //     else if ($value == 'sentToPE'){
    //         $projectID = PFile::where('id', $file_id)->first()->project_id;

    //         $data = User::whereHas(
    //             'roles',
    //             function ($q) {
    //                 $q->where('name', 'projectengineer');
    //             }
    //         )
    //         ->whereIn('id', function ($query) use ($projectID) {
    //             $query->select('user_id')
    //                 ->from('project_user')
    //                 ->where('project_user.project_id', $projectID);
    //         })->get();
    //     }
        
    //     foreach ($data as $row) {
    //         $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
    //     }

    //     echo $output;
    // }

    public function getResponsible(Request $request)
    {
        $output = '';

        $file_id = $request->get('file_id');
        $dependent = $request->get('dependent');

        DB::statement("SET SQL_MODE=''");

        $data = User::whereIn('id', function ($query) use ($file_id) {
                $query->select('user_id')
                    ->from('project_user')
                    ->where('project_user.project_id', $file_id);
            })->get();
            
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . ' </option>';
        }

        echo $output;
    }
}
