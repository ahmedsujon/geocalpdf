<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commercial;
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
use App\Models\ProctorData;
use App\Models\Project;
use App\Models\SoilAggregate;
use App\Models\SoilAggregateMixData;
use App\Models\SoilAggregateTestResult;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function commercialPDF($id)
    {
        $data = Commercial::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->user_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;

        $pdf = Pdf::loadView('pdf.commercial', compact('data'));
        return $pdf->stream('asphalt-field-density-by-nuclear-method-commercial-report.pdf');
    }

    public function templateSoilAggregate($id)
    {
        $data = SoilAggregate::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->user_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;

        $pdf = Pdf::loadView('pdf.soil_aggregate', compact('data'));
        return $pdf->stream('field-density-soil-aggregate-report.pdf');
    }
    
    public function cdotPDF($id)
    {
        $data = FieldDensityCdot::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;

        $pdf = Pdf::loadView('pdf.cdot_form', compact('data'));
        return $pdf->stream('asphalt-field-density-by-nuclear-mMethod-cdot-report.pdf');
    }
 
    public function plasticConcretePDF($id)
    {
        $data = PlasticConcrete::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->user_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;

        $pdf = Pdf::loadView('pdf.plastic_concrete', compact('data'));
        return $pdf->stream('plastic_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetOne($id)
    {
        $data = InspectionConcrete::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_address = client($data->client_id)->address;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_company_name = client($data->client_id)->company_name;

        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
       

        $pdf = Pdf::loadView('pdf.inspection_concrete_one', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetTwo($id)
    {
        $data = InspectionConcreteSetTwo::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_two', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetThree($id)
    {
        $data = InspectionConcreteSetThree::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_three', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetFour($id)
    {
        $data = InspectionConcreteSetFour::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_four', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetFive($id)
    {
        $data = InspectionConcreteSetFive::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_five', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetSix($id)
    {
        $data = InspectionConcreteSetSix::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_six', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetSeven($id)
    {
        $data = InspectionConcreteSetSeven::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_seven', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetEight($id)
    {
        $data = InspectionConcreteSetEight::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_eight', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetNine($id)
    {
        $data = InspectionConcreteSetNine::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_nine', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function InspectionConcreteDataSetTen($id)
    {
        $data = InspectionConcreteSetTen::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_address = client($data->client_id)->address;
        $data->client_company_name = client($data->client_id)->company_name;
        $avarage_array = array();
        if ($data->age_a == 28) {
            $avarage_array[] = $data->measured_strength_a;
        }
        if ($data->age_b == 28) {
            $avarage_array[] = $data->measured_strength_b;
        }
        if ($data->age_c == 28) {
            $avarage_array[] = $data->measured_strength_c;
        }
        if ($data->age_d == 28) {
            $avarage_array[] = $data->measured_strength_d;
        }
        if ($data->age_e == 28) {
            $avarage_array[] = $data->measured_strength_e;
        }
        if ($data->age_f == 28) {
            $avarage_array[] = $data->measured_strength_f;
        }
        if ($data->age_g == 28) {
            $avarage_array[] = $data->measured_strength_g;
        }
        if ($data->age_h == 28) {
            $avarage_array[] = $data->measured_strength_h;
        }
        if ($data->age_i == 28) {
            $avarage_array[] = $data->measured_strength_i;
        }
        $data->avarage = round(array_sum($avarage_array) / count($avarage_array), -1);
        $pdf = Pdf::loadView('pdf.inspection_concrete_ten', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

    public function concreteFieldReport(Request $request)
    {
        $project_id = $request->id;
        $project = Project::findOrFail($project_id);
        $client = Client::findOrFail($project->client_id);
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
        $pdf = Pdf::loadView('pdf.concrete_field_report', compact('set_one', 'set_two', 'set_three', 'set_four', 'set_five', 'set_six', 'set_seven', 'set_eight', 'set_nine', 'set_ten', 'project', 'client'));
        return $pdf->stream('concrete_field_report.pdf');
    }
}
