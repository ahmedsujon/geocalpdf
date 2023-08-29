<?php

namespace App\Http\Controllers;

use App\Models\CommercialTestResult;
use App\Models\Concrete;
use App\Models\ConcreteData;
use App\Models\FieldDensityCdot;
use App\Models\FieldDensityCommercial;
use App\Models\InspectionConcrete;
use App\Models\ProctorData;
use App\Models\SoilAggregate;
use App\Models\SoilAggregateMixData;
use App\Models\SoilAggregateTestResult;
use App\Models\TemplateOne;
use App\Models\TemplateOneData;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    // it's represent asphalt-field-density-commercial-report
    public function templateSoilAggregate($id)
    {
        $data = SoilAggregate::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->user_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_company_name = client($data->client_id)->company_name;

        $data->proctor_infos = SoilAggregateMixData::where('soil_aggregate_id', $data->id)->get();
        $data->test_results = SoilAggregateTestResult::where('soil_aggregate_id', $data->id)->get();

        $pdf = Pdf::loadView('pdf.commercial', compact('data'));
        return $pdf->stream('asphalt-field-density-commercial-report.pdf');
    }

    public function commercialPDF($id)
    {
        $data = FieldDensityCommercial::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->user_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_company_name = client($data->client_id)->company_name;

        $data->proctor_infos = ProctorData::where('field_density_commercial_id', $data->id)->get();
        $data->test_results = CommercialTestResult::where('field_density_commercial_id', $data->id)->get();

        $pdf = Pdf::loadView('pdf.result', compact('data'));
        return $pdf->stream('report.pdf');
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

    public function templateOnePDF($id)
    {
        $data = TemplateOne::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->user_id)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_company_name = client($data->client_id)->company_name;

        $data->template_one_infos = TemplateOneData::where('template_one_id', $data->id)->get();

        $pdf = Pdf::loadView('pdf.template_one', compact('data'));
        return $pdf->stream('report.pdf');
    }

    public function templateInspectionConcrete($id)
    {
        $data = InspectionConcrete::findOrFail($id);
        $data->project_name = project($data->project_id)->name;
        $data->technician = user($data->created_by)->name;
        $data->client_name = client($data->client_id)->name;
        $data->client_email = client($data->client_id)->email;
        $data->client_phone = client($data->client_id)->phone;
        $data->client_company_name = client($data->client_id)->company_name;
        $pdf = Pdf::loadView('pdf.inspection_concrete', compact('data'));
        return $pdf->stream('report.pdf');
    }

}
