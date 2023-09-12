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
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div style="
        padding: 20px 40px 40px 40px;
      ">
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td>
                    <table style="width: 100%; border-collapse: collapse">
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400;">
                                    Client:
                                </h4>
                            </td>
                            <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_name }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400;">
                                    Email:
                                </h4>
                            </td>
                            <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_email }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400;">
                                    Phone:
                                </h4>
                            </td>
                            <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_phone }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400;">
                                    Company Name:
                                </h4>
                            </td>
                            <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_company_name }}</h4>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0px 5px 20px 5px; text-align: center;">
                    <div>
                        <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo"
                            style="max-width: 100px" />
                        <h4 style="font-size: 16px; font-weight: 700; padding-top: 5px">
                            {{ $data->office_address }}
                        </h4>
                    </div>
                </td>

                <td>
                    <table style="width: 100%; border-collapse: collapse">
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400;">
                                    Date:
                                </h4>
                            </td>
                            <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->created_at->format('Y-m-d') }}
                                </h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400;">
                                    Project No:
                                </h4>
                            </td>
                            <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->project_number }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400;">
                                    Project Name:
                                </h4>
                            </td>
                            <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->project_name }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400;">
                                    Weather
                                </h4>
                            </td>
                            <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->weather }}</h4>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <h4 style="text-align: center; padding-top: 10px;">Field Density of Soil Aggregate by Nuclear Method</h4>
        <table style="width: 100%; border-collapse: collapse; padding-top: 10px;">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">TESTING DETAILS</h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Tested by:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->technician }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Test Mode: </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_mode }}</h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Date Tested:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->date }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Standard Density Count:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->density_count }}</h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Test Method:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->main_test_method }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Moisture Standard Count:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->moisture_count }}</h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Gauge Make:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        @if ($data->troxler=='Yes')
                        Troxler
                        @else
                        Other
                        @endif
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Compaction Requirement</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_requirement }}</h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Gauge Model:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->model }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Moisture Requirements:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">-{{ $data->requirment_minus }} to + {{
                        $data->requirment_plus }}
                    </h4>
                </td>
            </tr>

        </table>
        <br />
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">
                        Proctor Information
                    </h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Proctor ID</h3>
                </th>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">
                        Material Description
                    </h3>
                </th>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Method</h3>
                </th>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">MDD (pcf)</h3>
                </th>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">OMC %</h3>
                </th>
            </tr>
            @if ($data->proctor_id_a)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->proctor_id_a }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->description_a }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_method_a }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->max_dry_density_a }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->optimum_moisture_a }}
                    </h4>
                </td>
            </tr>
            @endif
            @if ($data->proctor_id_b)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->proctor_id_b }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->description_b }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_method_b }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->max_dry_density_b }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->optimum_moisture_b }}
                    </h4>
                </td>
            </tr>
            @endif
            @if ($data->proctor_id_c)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->proctor_id_c }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->description_c }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_method_c }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->max_dry_density_c }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->optimum_moisture_c }}
                    </h4>
                </td>
            </tr>
            @endif
            @if ($data->proctor_id_d)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->proctor_id_d }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->description_a }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_method_d }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->max_dry_density_d }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->optimum_moisture_d }}
                    </h4>
                </td>
            </tr>
            @endif
            @if ($data->proctor_id_e)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->proctor_id_e }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->description_e }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_method_e }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->max_dry_density_e }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->optimum_moisture_e }}
                    </h4>
                </td>
            </tr>
            @endif
        </table>
        <br />
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">Test Results</h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Test No.</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Proctor ID</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Probe Depth (in)</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Wet Density (pcf)</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Dry Density, pcf</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">
                        Moisture Content %
                    </h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Compaction %</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Compaction Spec</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Results</h3>
                </th>
            </tr>
            @if ($data->test_num_a )
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_a }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                        {{ $data->result_proctor_id_a }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_a }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->wet_density_a }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->dry_density_a }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->moisture_content_a }}
                    </h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4
                        style="font-size: 14px; font-weight: 400; text-align:center; @if($data->compaction_requirement > $data->percent_comp_a) color: red; @endif">
                        {{ $data->percent_comp_a }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->compaction_requirement
                        }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_a }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_num_b )
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_b }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                        {{ $data->result_proctor_id_b }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_b }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->wet_density_b }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->dry_density_b }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->moisture_content_b }}
                    </h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4
                        style="font-size: 14px; font-weight: 400; text-align:center; @if($data->compaction_requirement > $data->percent_comp_b) color: red; @endif">
                        {{ $data->percent_comp_b }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->compaction_requirement
                        }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_b }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_num_c )
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_c }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                        {{ $data->result_proctor_id_c }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_c }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->wet_density_c }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->dry_density_c }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->moisture_content_c }}
                    </h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4
                        style="font-size: 14px; font-weight: 400; text-align:center; @if($data->compaction_requirement > $data->percent_comp_c) color: red; @endif">
                        {{ $data->percent_comp_c }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->compaction_requirement
                        }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_c }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_num_d )
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_d }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                        {{ $data->result_proctor_id_d }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_d }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->wet_density_d }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->dry_density_d }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->moisture_content_d }}
                    </h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4
                        style="font-size: 14px; font-weight: 400; text-align:center; @if($data->compaction_requirement > $data->percent_comp_d) color: red; @endif">
                        {{ $data->percent_comp_d }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->compaction_requirement
                        }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_d }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_num_e )
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_e }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                        {{ $data->result_proctor_id_e }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_e }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->wet_density_e }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->dry_density_e }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->moisture_content_e }}
                    </h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4
                        style="font-size: 14px; font-weight: 400; text-align:center; @if($data->compaction_requirement > $data->percent_comp_e) color: red; @endif">
                        {{ $data->percent_comp_e }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->compaction_requirement
                        }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_e }}</h4>
                </td>
            </tr>
            @endif
            @if ($data->test_num_f )
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_num_f }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                        {{ $data->result_proctor_id_f }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->test_dept_f }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->wet_density_f }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->dry_density_f }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->moisture_content_f }}
                    </h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4
                        style="font-size: 14px; font-weight: 400; text-align:center; @if($data->compaction_requirement > $data->percent_comp_f) color: red; @endif">
                        {{ $data->percent_comp_f }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->compaction_requirement
                        }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->comments_f }}</h4>
                </td>
            </tr>
            @endif
        </table>
        <table style="width: 100%; border-collapse: collapse; padding-top: 30px;">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">Location</h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 4px">
                    <h4 style="font-size: 14px; font-weight: 400">
                        <b> General Location: </b> {{ $data->general_info }}
                    </h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Test No.</h3>
                </th>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Location</h3>
                </th>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Material</h3>
                </th>
                <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Elev/Lift of Test</h3>
                </th>
            </tr>
            @if ($data->test_num_a)
               <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_num_a }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_a }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->material_a }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 90px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->elev_test_a }}</h4>
                </td>
            </tr>  
            @endif
            @if ($data->test_num_b)
               <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_num_b }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_b }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->material_b }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 90px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->elev_test_b }}</h4>
                </td>
            </tr>  
            @endif
            @if ($data->test_num_c)
            <tr>
             <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
                 <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_num_c }}</h4>
             </td>

             <td style="padding: 4px 6px; border: 1px solid lightgray">
                 <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_c }}</h4>
             </td>

             <td style="padding: 4px 6px; border: 1px solid lightgray">
                 <h4 style="font-size: 14px; font-weight: 400">{{ $data->material_c }}</h4>
             </td>

             <td style="padding: 4px 6px; border: 1px solid lightgray; width: 90px">
                 <h4 style="font-size: 14px; font-weight: 400">{{ $data->elev_test_c }}</h4>
             </td>
         </tr>  
         @endif
         @if ($data->test_num_d)
               <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_num_d }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_d }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->material_d }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 90px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->elev_test_d }}</h4>
                </td>
            </tr>  
            @endif
            @if ($data->test_num_e)
            <tr>
             <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
                 <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_num_e }}</h4>
             </td>

             <td style="padding: 4px 6px; border: 1px solid lightgray">
                 <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_e }}</h4>
             </td>

             <td style="padding: 4px 6px; border: 1px solid lightgray">
                 <h4 style="font-size: 14px; font-weight: 400">{{ $data->material_e }}</h4>
             </td>

             <td style="padding: 4px 6px; border: 1px solid lightgray; width: 90px">
                 <h4 style="font-size: 14px; font-weight: 400">{{ $data->elev_test_e }}</h4>
             </td>
         </tr>  
         @endif
            @if ($data->test_num_f)
               <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_num_f }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->location_f }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->material_f }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 90px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->elev_test_f }}</h4>
                </td>
            </tr>  
            @endif
        </table>
        <br />

        <table style="width: 100%; border-collapse: collapse; padding-bottom: 20px;">
            <tr>
                <td>Comments:</td>
                <td style="padding: 4px 6px">
                    <ol type="1" style="font-size: 14px; font-weight: 400; text-align: left">
                        <li>Base</li>
                        <li>Subbase</li>
                        <li>Subgrade</li>
                        <li>Improved Subgrade</li>
                        <li>Surface</li>
                        <li>Fill</li>
                    </ol>
                </td>
                <td style="padding: 4px 6px">
                    <ol type="A" style="font-size: 14px; font-weight: 400; text-align: left">
                        <li>Test results comply with specifications</li>
                        <li>Compaction percentage does not comply with specifications</li>
                        <li>Retest of previous test</li>
                        <li>Moisture in excess of specifications</li>
                        <li>Moisture below specifications</li>
                    </ol>
                </td>
            </tr>
        </table>

        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td>
                    <h5>{{ $data->observation }}</h5>
                    <h4 style="
                font-size: 14px;
                font-weight: 400;
                border-top: 1px solid black;
                padding-top: 2px;
                width: 160px;
              ">
                        Observation
                    </h4>
                </td>
                <td>
                    <h5>{{ $data->technician }}</h5>
                    <h4 style="
                font-size: 14px;
                font-weight: 400;
                border-top: 1px solid black;
                padding-top: 2px;
                width: 160px;
              ">
                        Field Representative
                    </h4>
                </td>
                <td>
                    <h5>{{ user($data->created_by)->name }}</h5>
                    <h4 style="
                font-size: 14px;
                font-weight: 400;
                border-top: 1px solid black;
                padding-top: 2px;
              ">
                        Reviewed By
                    </h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse; padding-top: 20px;">
            <tr>
                <td style="padding: 4px 6px">
                    <p style="font-size: 14px; font-weight: 400; text-align: center">
                        These test results apply only to the specific samples/location/materials noted and may not be
                        representative
                        of other areas or similar materials. This report may not be reproduced, except in full, without
                        written
                        authorization by Geocal, Inc.
                    </p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>