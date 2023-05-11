<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DependentController extends Controller
{
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
