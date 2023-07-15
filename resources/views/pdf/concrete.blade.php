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
                                    Date Cast:
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

        <h4 style="text-align: center; padding-top: 10px;">CONCRETE TEST REPORT</h4>
        <table style="width: 100%; border-collapse: collapse; padding-top: 10px;">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">MIX DATA</h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Supplier:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->supplier }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Technician: </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->technician }}</h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Plant:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->plant }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Mix Identification:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->mix_id }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Specified Strength (psi):</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->mix_design_strength }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
        </table>
        <br />
        <table style="width: 100%; border-collapse: collapse; padding-top: 10px;">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">SAMPLE DATA</h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Date Sampled:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->created_at->format('Y-m-d') }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Date Received in Lab: </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->created_at->format('Y-m-d') }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">General Location:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->general_location }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Specific Location:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->specific_location }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Measured</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Specified</h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Truck No.:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->truck_no }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Slump (in):</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->slump }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->slump_min }} - {{ $data->slump_max }} </h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Truck No.:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->truck_no }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Air Temp (°F):</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->ambient_temp }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Sample By:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->sampled_by }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Conc Temp (°F):</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->concrete_temp }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->concrete_temp_min }} - {{
                        $data->concrete_temp_max }} </h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Weather:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->weather }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Air Content (%):</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->air_content }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->air_min }} - {{ $data->air_max }} </h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Time Batched:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->batch_time }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Unit Weight (pcf):</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->unit_weight }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Time Sampled:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->sample_time }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Relative Yield:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->relative_yield }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Time Unloaded:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->ttf_unloading }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">W/C Ratio:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->water_cement_ratio }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Time in Truck: (min):</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">null</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Batch Size:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">null</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">CY Placed:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">null</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Water Added (gal):</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->water_added }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400"></h4>
                </td>
            </tr>
        </table>
        <br />
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">COMPRESSIVE STRENGTH OF CONCRETE CYLINDERS</h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Cyl Set ID#</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Specimen ID</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Date Tested</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Age (days)</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Diameter (in)</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Avg Length (in)</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Area (in2)</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Type of Cap</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Load (lb)</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Fracture Type</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">Lab Tech</h3>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h3 style="font-size: 14px; font-weight: 700">CompressiveStrength (psi)</h3>
                </th>
            </tr>
            @foreach ($data->concrete_infos as $concrete_info)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->cylinder_id }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $concrete_info->cylinder_id }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $concrete_info->test_date }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $concrete_info->age }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $concrete_info->diameter }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                        $concrete_info->avg_length }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $concrete_info->area_cyl }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $concrete_info->type_cap }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $concrete_info->max_load }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $concrete_info->type_fracture
                        }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                        $concrete_info->person_performing }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                        $concrete_info->measured_strength }}
                    </h4>
                </td>
            </tr>
            @endforeach

        </table>
        <table style="width: 100%; border-collapse: collapse; padding-top: 30px;">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">NOTES/REMARKS</h4>
                </td>
            </tr>
        </table>
        <br />

        <table style="width: 100%; border-collapse: collapse; padding-bottom: 20px;">
            <tr>
                <td>Fracture Types:</td>
                <td style="padding: 4px 6px">
                    <ol type="1" style="font-size: 14px; font-weight: 400; text-align: left">
                        <li>Cone both ends</li>
                        <li>Cone one end</li>
                        <li>Columnar cracking/no cones</li>
                        <li>Diagonal Fracture</li>
                        <li>Side fracture at top or bottom</li>
                        <li>Side fractures at top or bottom with pointed</li>
                    </ol>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse; padding-bottom: 20px;">
            <tr>
                <td>
                    <p>Concrete sample in accordance with ASTM C172 and/or AASHTO R60</p>
                    <p>Compressive Strength determined in accordance with ASTM C-39 and/or AASHTO T-22 </p>
                    <p>Capping: U = Unbonded (ASTM C1231); B = Bonded (ASTM C617); G = Ground </p>
                </td>
            </tr>
        </table>

        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td>
                    <h4>
                        Comments:
                    </h4>
                    <h5>{{ $data->remark }}</h5>
                </td>
                <td></td>
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