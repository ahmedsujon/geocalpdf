<?php

namespace App\Http\Controllers;

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
        $data->client_company_name = client($data->client_id)->company_name;

        $pdf = Pdf::loadView('pdf.commercial', compact('data'));
        return $pdf->stream('report.pdf');
    }

    public function templateSoilAggregate($id)
    {
        $data = SoilAggregate::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->user_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_company_name = client($data->client_id)->company_name;

        $pdf = Pdf::loadView('pdf.commercial', compact('data'));
        return $pdf->stream('asphalt-field-density-commercial-report.pdf');
    }

    public function cdotPDF($id)
    {
        $data = FieldDensityCdot::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_company_name = client($data->client_id)->company_name;

        $pdf = Pdf::loadView('pdf.cdot_form', compact('data'));
        return $pdf->stream('report.pdf');
    }

    public function plasticConcretePDF($id)
    {
        $data = PlasticConcrete::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->user_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
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
        $data->client_phone = client($data->client_id)->phone;
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
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
        $data->client_company_name = client($data->client_id)->company_name;
        $pdf = Pdf::loadView('pdf.inspection_concrete_ten', compact('data'));
        return $pdf->stream('inspection_concrete_report.pdf');
    }

}
