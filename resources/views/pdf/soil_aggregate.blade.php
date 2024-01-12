<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

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
                    <h4 style="font-size: 13px; font-weight: 700; padding-top: 5px">CONCRETE TEST REPORT</h4>
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
                </td>
            </tr>
        </table>
        <div
            style="margin-top: 5px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse; border: none">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 0px solid #000; border-left: 1px solid #000;">
                    TESTING DETAILS</caption>
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Tested by:</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">
                            {{ $data->technician }}
                        </h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Test Mode: </h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_mode }}</h4>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Date Tested:</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">
                            {{ $data->date }}
                        </h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Standard Density Count:</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->density_count }}</h4>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Test Method:</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">
                            {{ $data->main_test_method }}
                        </h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Moisture Standard Count:</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->moisture_count }}</h4>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Gauge Make:</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">
                            @if ($data->troxler == 'Yes')
                                Troxler
                            @else
                                Other
                            @endif
                        </h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Compaction Requirement</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_requirement }}</h4>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Gauge Model:</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">
                            {{ $data->model }}
                        </h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">Moisture Requirements:</h4>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">-{{ $data->requirement_minus }} to +
                            {{ $data->requirement_plus }}
                        </h4>
                    </td>
                </tr>

            </table>
        </div>

        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; text-transform: uppercase; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    Proctor Information</caption>
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">Proctor ID</h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">
                            Material Description
                        </h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">Method</h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">MDD (pcf)</h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">OMC %</h3>
                        </th>
                </tr>
                @if ($data->proctor_id_a)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->proctor_id_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->description_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->test_method_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->max_dry_density_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->optimum_moisture_a }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->proctor_id_b)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->proctor_id_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->description_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->test_method_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->max_dry_density_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->optimum_moisture_b }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->proctor_id_c)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->proctor_id_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->description_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->test_method_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->max_dry_density_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->optimum_moisture_c }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->proctor_id_d)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->proctor_id_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->description_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->test_method_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->max_dry_density_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->optimum_moisture_d }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->proctor_id_e)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->proctor_id_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->description_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->test_method_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->max_dry_density_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->optimum_moisture_e }}
                            </h4>
                        </td>
                    </tr>
                @endif
            </table>
        </div>

        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; text-transform: uppercase; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    Test Results</caption>
                <tr>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">Test No.</h3>
                    </th>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">Proctor ID</h3>
                    </th>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">Probe Depth (in)</h3>
                    </th>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">Wet Density (pcf)</h3>
                    </th>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">Dry Density, pcf</h3>
                    </th>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">
                            Moisture Content %
                        </h3>
                    </th>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">Compaction %</h3>
                    </th>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">Compaction Spec</h3>
                    </th>
                    <th style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700">Results</h3>
                    </th>
                </tr>
                @if ($data->test_num_a)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->result_proctor_id_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->wet_density_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->dry_density_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->moisture_content_a }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4
                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement > $data->percent_comp_a) color: red; @endif">
                                {{ $data->percent_comp_a }}</h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->compaction_requirement }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_a }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_b)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->result_proctor_id_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->wet_density_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->dry_density_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->moisture_content_b }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4
                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement > $data->percent_comp_b) color: red; @endif">
                                {{ $data->percent_comp_b }}</h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->compaction_requirement }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_b }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_c)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->result_proctor_id_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->wet_density_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->dry_density_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->moisture_content_c }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4
                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement > $data->percent_comp_c) color: red; @endif">
                                {{ $data->percent_comp_c }}</h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->compaction_requirement }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_c }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_d)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->result_proctor_id_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->wet_density_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->dry_density_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->moisture_content_d }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4
                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement > $data->percent_comp_d) color: red; @endif">
                                {{ $data->percent_comp_d }}</h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->compaction_requirement }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_d }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_e)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->result_proctor_id_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->wet_density_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->dry_density_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->moisture_content_e }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4
                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement > $data->percent_comp_e) color: red; @endif">
                                {{ $data->percent_comp_e }}</h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->compaction_requirement }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_e }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_f)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->result_proctor_id_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->wet_density_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->dry_density_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->moisture_content_f }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4
                                style="font-size: 14px; font-weight: 400; text-align:center; @if ($data->compaction_requirement > $data->percent_comp_f) color: red; @endif">
                                {{ $data->percent_comp_f }}</h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->compaction_requirement }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_f }}
                            </h4>
                        </td>
                    </tr>
                @endif
            </table>

        </div>




        <div
            style="padding-top: 5px; border-top: 2px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">

            <table style="width: 100%; padding-top: 5px; border-collapse: collapse; border-bottom: 1px solid #000">
                <caption
                    style="text-align:left; font-size: 14px; text-transform: uppercase; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 0px solid #000; border-left: 1px solid #000;">
                    Location</caption>
                <tr>
                    <td style="padding: 10px 5px;">
                        <h4 style="font-size: 14px; font-weight: 400">
                            <b> General Location: </b> {{ $data->general_info }}
                        </h4>
                    </td>
                </tr>
            </table>
        </div>


        <div
            style="border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 2px solid #000; border-left: 3px solid #000;">

            <table style="width: 100%; border-collapse: collapse; border-bottom: 1px solid #000">
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">Test No.</h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">Location</h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">Material</h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center">Elev/Lift of Test</h3>
                        </th>
                </tr>
                @if ($data->test_num_a || $data->result_proctor_id_a || $data->test_dept_a)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->test_num_a }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->location_a }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->material_a }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->elev_test_a }}</h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_b)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->test_num_b }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->location_b }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->material_b }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->elev_test_b }}</h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_c)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->test_num_c }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->location_c }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->material_c }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->elev_test_c }}</h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_d)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->test_num_d }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->location_d }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->material_d }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->elev_test_d }}</h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_e)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->test_num_e }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->location_e }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->material_e }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->elev_test_e }}</h4>
                        </td>
                    </tr>
                @endif
                @if ($data->test_num_f)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->test_num_f }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->location_f }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">{{ $data->material_f }}
                            </h4>
                        </td>

                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center">
                                {{ $data->elev_test_f }}</h4>
                        </td>
                    </tr>
                @endif
            </table>
        </div>



        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 0px solid #000; border-bottom: 0px solid #000; border-left: 0px solid #000;">
                    COMMENTS</caption>
                <tr>
                    <td></td>
                    <td style="padding: 4px 30px">
                        <ol type="1"
                            style="margin: 0; padding: 0; font-size: 13px; font-weight: 400; text-align: left">
                            <li>Base</li>
                            <li>Subbase</li>
                            <li>Subgrade</li>
                            <li>Improved Subgrade</li>
                            <li>Surface</li>
                            <li>Fill</li>
                        </ol>
                    </td>
                    <td style="padding: 4px 30px">
                        <ol type="1"
                            style="margin: 0; padding: 0; font-size: 13px; font-weight: 400; text-align: left">
                            <li>Test results comply with specifications</li>
                            <li>Compaction percentage does not comply with specifications</li>
                            <li>Retest of previous test</li>
                            <li>Moisture in excess of specifications</li>
                            <li>Moisture below specifications</li>
                        </ol>
                    </td>
                </tr>
            </table>
        </div>

        <table
            style="width: 100%; border-collapse: collapse; border-top: 0px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000">
            <tr>
                <td
                    style="width: 28%; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 20px;">
                    <h6
                        style="padding-bottom: 4px; font-weight: normal; 
                font-size: 14px;
                font-weight: normal;">
                        @if ($data->observation == 'Part Time Observation')
                            <span style="padding: 1px 5px; border-bottom: 2px solid #000;"></span>
                            <span style="padding-left: 25px;">Part Time Observation</span>
                        @else
                            <span
                                style="padding: 1px 5px; border-bottom: 2px solid #000; border-top: 2px solid #000;">X</span>
                            <span>Part Time Observation</span>
                        @endif
                    </h6>

                    <h6
                        style="padding-bottom: 4px; font-weight: normal; 
                font-size: 14px;
                font-weight: normal;">
                        @if ($data->observation == 'Full Time Observation')
                            <span style="padding: 1px 5px; border-bottom: 2px solid #000;"></span>
                            <span style="padding-left: 25px;">Full Time Observation</span>
                        @else
                            <span
                                style="padding: 1px 5px; border-bottom: 2px solid #000; border-top: 2px solid #000;">X</span>
                            <span>Full Time Observation</span>
                        @endif
                    </h6>
                </td>

                <td style="width: 32%; padding-top: 10px; padding-bottom: 20px;">
                    <h6 style="
                    font-size: 14px;
                    font-weight: normal;">
                        {{ user($data->user_id)->name }}</h6>
                    <h6
                        style="
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
                    <h6
                        style="
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





        <table style="width: 100%; border-collapse: collapse; ">
            <tr>
                <td>
                    <p
                        style="padding-top: 10px; padding-bottom: 30px; font-size: 13px; font-weight: 400; text-align: left">
                        These test results apply only to the specific samples/location/materials noted and may not
                        be
                        representative
                        of other areas or similar materials. This report may not be reproduced, except in full,
                        without
                        written
                        authorization by Geocal, Inc.
                    </p>
                </td>
            </tr>
        </table>


    </div>
</body>

</html>
