<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FIELD DENSITY OF ASPHALT / BITUMINOUS by Nuclear Method
        ASTM D 2950 / AASHTO T355</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <div style="
        padding: 15px 25px 25px 25px;
      ">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 28%; text-align: left;">

                    <h4 style="font-size: 14px; font-weight: 700;">
                        Client
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        {{ $data->client_company_name }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        {{ $data->client_address }}
                    </h4>
                </td>
                <td style="width: 40%; text-align: center;">
                    <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo"
                        style="max-width: 100px" />
                    <h4 style="font-size: 13px; font-weight: 700; padding-top: 5px">
                        {{ $data->office_address }}
                    </h4>
                </td>
                <td style="width: 28%; text-align: left;">
                    <h4 style="font-size: 14px; font-weight: 500;">
                        Date Cast: <span
                            style="font-size: 14px; font-weight: 400;">{{ $data->created_at->format('m/d/Y') }}</span>
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 500;">
                        Project No: <span style="font-size: 14px; font-weight: 400;">{{ $data->project_number }}</span>
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 500;">
                        Project Name: <span style="font-size: 14px; font-weight: 400;">{{ $data->project_name }}</span>
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 500;">
                        Weather: <span style="font-size: 14px; font-weight: 400;">{{ $data->weather }}</span>
                    </h4>
                </td>
            </tr>
        </table>

        <div
            style="margin-top: 5px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse; border: none">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border: none">
                    TESTING DETAILS</caption>
                <tr>
                    <td style="width: 60%;">
                        <h4 style="font-size: 14px; font-weight: 400">Tested by:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->technician }}</h4>
                        <h4 style="font-size: 14px; font-weight: 400">Date Tested:
                            &nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($data->date)->format('m/d/Y') }}</h4>
                        <h4 style="font-size: 14px; font-weight: 400">Test Method:
                            &nbsp;&nbsp;&nbsp;&nbsp;{{ $data->test_method }}</h4>
                        <h4 style="font-size: 14px; font-weight: 400">Gauge Make: &nbsp;&nbsp; {{ $data->troxler }}</h4>
                        <h4 style="font-size: 14px; font-weight: 400">Gauge Model: &nbsp;&nbsp;{{ $data->model }}</h4>
                    </td>
                    <td style="width: 40%;">
                        <h4 style="font-size: 14px; font-weight: 400">Gauge SN:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{
                            $data->serial_no }}
                        </h4>
                        <h4 style="font-size: 14px; font-weight: 400">Standard Density Count:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->density_count }}</h4>
                        <h4 style="font-size: 14px; font-weight: 400">Standard Moisture Count:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->moisture_count }}</h4>

                        <h4 style="font-size: 14px; font-weight: 400">Test Mode:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{
                            $data->test_mode }}
                        </h4>

                        <h4 style="font-size: 14px; font-weight: 400">Compaction Requirements: &nbsp;&nbsp;
                            {{ $data->compaction_requirement_min }} to
                            {{ $data->compaction_requirement_max }} %</h4>
                    </td>

                </tr>

            </table>
        </div>

        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 0px solid #000; border-left: 2px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    MIX INFORMATION</caption>
                <tr style="text-align: center">
                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Mix ID</h3>
                    </th>
                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Supplier</h3>
                    </th>
                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Plant</h3>
                    </th>
                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Mix Type </h3>
                    </th>
                    <th style="padding: 5px 6px 5px 6px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Max Density, (lb/ft<sup>3</sup>)</h3>
                    </th>
                </tr>
                @if ($data->mix_a_id)
                <tr style="text-align: center">
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_a_id }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->supplier_a }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->plant_a }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_type_a }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theoretical_density_a }}</h4>
                    </td>
                </tr>
                @endif
                @if ($data->mix_b_id)
                <tr style="text-align: center">
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_b_id }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->supplier_b }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->plant_b }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_type_b }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theoretical_density_b }}</h4>
                    </td>
                </tr>
                @endif
                @if ($data->mix_c_id)
                <tr style="text-align: center">
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_c_id }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->supplier_c }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->plant_c }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_type_c }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theoretical_density_c }}</h4>
                    </td>
                </tr>
                @endif
                @if ($data->mix_d_id)
                <tr style="text-align: center">
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_d_id }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->supplier_d }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->plant_d }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_type_d }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theoretical_density_d }}</h4>
                    </td>
                </tr>
                @endif
                @if ($data->mix_e_id)
                <tr style="text-align: center">
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_e_id }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->supplier_e }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->plant_e }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->mix_type_e }}
                        </h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theoretical_density_e }}</h4>
                    </td>
                </tr>
                @endif
            </table>
        </div>


        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 0px solid #000; border-left: 2px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    TEST RESULTS</caption>
                <tr>
                    <th width="5%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Test No.</h3>
                    </th>
                    <th width="15%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Mix ID</h3>
                    </th>
                    <th width="10%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Test Count Period</h3>
                    </th>
                    <th width="10%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Material <br> (Base, <br> Surface, <br> Bit Agg)</h3>
                    </th>
                    <th width="5%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Lift</h3>
                    </th>
                    <th width="10%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Layer Thickness (in)</h3>
                    </th>
                    <th width="10%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Maximum <br> Theo. <br> Density (pcf)</h3>
                    </th>
                    <th width="10%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">In Situ <br> Density (lb/ft<sup>3</sup>)</h3>
                    </th>
                    <th width="15%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">% Relative Compaction</h3>
                    </th>
                    <th width="10%" style="border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 500">Pass / Fail</h3>
                    </th>
                </tr>
                @if ($data->result_mix_id_a)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_a }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->result_mix_id_a }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->count_period_a }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->material_a }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->lift_a }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->layer_thickness_a }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theory_density_a }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->field_wet_density_a }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4
                            style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement_max < $data->relative_compaction_a || $data->compaction_requirement_min > $data->relative_compaction_a) color: red; @endif">
                            {{ $data->relative_compaction_a }}</h4>
                    </td>
                    @if ($data->pass_fail_a == 'Pass')
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->pass_fail_a }}
                        </h4>
                    </td>
                    @else
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center; color: red">{{
                            $data->pass_fail_a }}
                        </h4>
                    </td>
                    @endif
                </tr>
                @endif
                @if ($data->result_mix_id_b)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_b }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->result_mix_id_b }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->count_period_b }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->material_b }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->lift_b }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->layer_thickness_b }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theory_density_b }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->field_wet_density_b }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4
                            style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement_max < $data->relative_compaction_b || $data->compaction_requirement_min > $data->relative_compaction_b) color: red; @endif">
                            {{ $data->relative_compaction_b }}</h4>
                    </td>
                    @if ($data->pass_fail_b == 'Pass')
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->pass_fail_b }}
                        </h4>
                    </td>
                    @else
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center; color:red;">{{
                            $data->pass_fail_b }}
                        </h4>
                    </td>
                    @endif
                </tr>
                @endif
                @if ($data->result_mix_id_c)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_c }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->result_mix_id_c }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->count_period_c }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->material_c }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->lift_c }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->layer_thickness_c }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theory_density_c }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->field_wet_density_c }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4
                            style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement_max < $data->relative_compaction_c || $data->compaction_requirement_min > $data->relative_compaction_c) color: red; @endif">
                            {{ $data->relative_compaction_c }}</h4>
                    </td>
                    @if ($data->pass_fail_c == 'Pass')
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->pass_fail_c }}
                        </h4>
                    </td>
                    @else

                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center; color:red;">{{
                            $data->pass_fail_c }}
                        </h4>
                    </td>
                    @endif
                </tr>
                @endif
                @if ($data->result_mix_id_d)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_d }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->result_mix_id_d }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->count_period_d }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->material_d }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->lift_d }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->layer_thickness_d }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theory_density_d }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->field_wet_density_d }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4
                            style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement_max < $data->relative_compaction_d || $data->compaction_requirement_min > $data->relative_compaction_d) color: red; @endif">
                            {{ $data->relative_compaction_d }}</h4>
                    </td>
                    @if ($data->pass_fail_d == 'Pass')
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->pass_fail_d }}
                        </h4>
                    </td>
                    @else

                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center; color:red;">{{
                            $data->pass_fail_d }}
                        </h4>
                    </td>
                    @endif
                </tr>
                @endif
                @if ($data->result_mix_id_e)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_e }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->result_mix_id_e }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->count_period_e }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->material_e }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->lift_e }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->layer_thickness_e }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theory_density_e }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->field_wet_density_e }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4
                            style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement_max < $data->relative_compaction_e || $data->compaction_requirement_min > $data->relative_compaction_e) color: red; @endif">
                            {{ $data->relative_compaction_e }}</h4>
                    </td>
                    @if ($data->pass_fail_e == 'Pass')
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->pass_fail_e }}
                        </h4>
                    </td>
                    @else
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center; color:red;">{{
                            $data->pass_fail_e }}
                        </h4>
                    </td>
                    @endif
                </tr>
                @endif
                @if ($data->result_mix_id_f)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_f }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->result_mix_id_f }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->count_period_f }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->material_f }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->lift_f }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->layer_thickness_f }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->max_theory_density_f }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $data->field_wet_density_f }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4
                            style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement_max < $data->relative_compaction_f || $data->compaction_requirement_min > $data->relative_compaction_f) color: red; @endif">
                            {{ $data->relative_compaction_f }}</h4>
                    </td>
                    @if ($data->pass_fail_f == 'Pass')
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->pass_fail_f }}
                        </h4>
                    </td>
                    @else
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center; color:red;">{{
                            $data->pass_fail_f }}
                        </h4>
                    </td>
                    @endif
                </tr>
                @endif
            </table>
        </div>
        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 2px solid #000; border-left: 1px solid #000;">
                    LOCATION</caption>
                <tr>
                    <td>
                        <h4 style="padding: 1px; font-size: 14px; font-weight: 400">
                            <b> General Location: </b> {{ $data->general_location }}
                        </h4>
                    </td>
                </tr>
            </table>
        </div>

        <table
            style="width: 100%; border-collapse: collapse; border-top: 0px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <tr>
                <th style="padding: 10px 6px 5px 6px; border: 1px solid #000">
                    <h3 style="font-size: 14px; font-weight: 700">Test No.</h3>
                </th>
                <th style="padding: 10px 6px 5px 6px; text-align: left; border: 1px solid #000">
                    <h3 style="font-size: 14px; font-weight: 700">Location</h3>
                </th>
            </tr>
            @if ($data->test_no_a)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_a }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_a }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_no_b)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_b }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_b }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_no_c)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_c }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_c }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_no_d)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_d }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_d }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_no_e)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_no_e }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_e }}</h4>
                </td>
            </tr>
            @endif
        </table>

        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 0px solid #000; border-bottom: 0px solid #000; border-left: 0px solid #000;">
                    COMMENTS</caption>
                <tr>
                    <td style="padding: 5px">
                        <p style="font-size: 14px; font-weight: 400;">{{ $data->remark }}</p>
                    </td>
                </tr>
            </table>
        </div>

        <table
            style="width: 100%; padding-bottom: 10px; border-collapse: collapse; border-top: 0px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000">
            <tr>
                <td
                    style="width: 28%; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 20px;">
                    <h6 style="padding-bottom: 4px; font-weight: normal;
                font-size: 14px;
                font-weight: normal;">
                        @if ($data->report_status == 'Full Time Observation')
                        <span style="padding: 1px 5px; border-bottom: 2px solid #000;"></span>
                        <span style="padding-left: 25px;">Full Time Observation</span>
                        @else
                        <span
                            style="padding: 1px 5px; border-bottom: 2px solid #000; border-top: 2px solid #000;">X</span>
                        <span>Full Time Observation</span>
                        @endif
                    </h6>
                    <h6 style="padding-bottom: 4px; font-weight: normal;
                font-size: 14px;
                font-weight: normal;">
                        @if ($data->report_status == 'Part Time Observation')
                        <span style="padding: 1px 5px; border-bottom: 2px solid #000;"></span>
                        <span style="padding-left: 25px;">Part Time Observation</span>
                        @else
                        <span
                            style="padding: 1px 5px; border-bottom: 2px solid #000; border-top: 2px solid #000;">X</span>
                        <span>Part Time Observation</span>
                        @endif
                    </h6>
                </td>

                <td style="width: 32%; padding-top: 10px; padding-bottom: 20px;">
                    <h6 style="
                    font-size: 14px;
                    font-weight: normal;">
                        {{ user($data->user_id)->name }}</h6>
                    <h6 style="
                font-size: 14px;
                font-weight: normal;
                border-top: 1px solid black;
                padding-top: 2px;
                width: 160px;
              ">
                        Materials Technician:
                    </h6>
                </td>
                <td
                    style="width: 40%; padding-top: 10px; padding-left: 10px; padding-right: 20px; padding-bottom: 20px;">
                    <h6 style="
                    font-size: 14px;
                    font-weight: normal;">
                        {{ user($data->created_by)->name }}</h6>
                    <h6 style="
                font-size: 14px;
                font-weight: normal;
                border-top: 1px solid black;
                padding-top: 2px;
              ">
                        Reviewed By
                    </h6>
                </td>
            </tr>
        </table>
        <p style="padding-bottom: 30px; font-size: 12px; font-style: italic; font-weight: 400; text-align: left;">
            These test results apply only to the specific samples/location/materials noted and may not be
            representative
            of other areas or similar materials. This report may not be reproduced, except in full, without
            written
            authorization by Geocal, Inc.
        </p>
    </div>
</body>

</html>
