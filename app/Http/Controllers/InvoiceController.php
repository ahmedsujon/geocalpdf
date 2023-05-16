<?php

namespace App\Http\Controllers;

use App\Models\CommercialTestResult;
use App\Models\FieldDensityCdot;
use App\Models\FieldDensityCommercial;
use App\Models\ProctorData;
use App\Models\TemplateOne;
use App\Models\TemplateOneData;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
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
        return $pdf->stream('test_result.pdf');
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
        return $pdf->stream('test_result.pdf');
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
        return $pdf->stream('test_result.pdf');
    }
}
