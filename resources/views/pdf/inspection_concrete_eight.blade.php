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
        
        <table style="width: 100%; border-collapse: collapse; padding-bottom: 5px;">
            <tr>
                <td style="width: 28%; text-align: left;">
                    <h4 style="font-size: 14px; font-weight: 700;">
                        Client
                    </h4>
                    <h4 style="font-size: 12px; font-weight: 400;">
                        {{ $client->company_name }}
                    </h4>
                    <h4 style="font-size: 12px; font-weight: 400;">
                        {{ $client->address }}
                    </h4>
                </td>
                <td style="width: 40%; text-align: center;">
                    <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo"
                        style="max-width: 100px" />
                    <h4 style="font-size: 13px; font-weight: 700; padding-top: 5px">
                        {{ $set_one->office_address }}
                    </h4>
                    <h6 style="text-align:center;  padding-top: 25px">PHYSICAL PROPERTIES OF PLASTIC CONCRETE</h6>
                </td>
                <td style="width: 28%; text-align: left;">
                    <h4 style="font-size: 14px; font-weight: 500;">
                        Date: <span style="font-weight: 400; font-size: 12px;">{{ $set_one->created_at->format('m/d/Y') }}</span>
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 500;">
                        Project No: <span style="font-weight: 400; font-size: 12px;">{{ $project->project_number }}</span>
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 500;">
                        Project Name: <span style="font-weight: 400; font-size: 12px;">{{ $project->name }}</span>
                    </h4>
                </td>
            </tr>
        </table>

        <div
            style="margin-top: 5px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse; border: none">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 0px solid #000; border-left: 1px solid #000;">
                    MIX DATA</caption>
                <table style="width: 100%; border-collapse: collapse">
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Supplier:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">
                                {{ $data->supplier }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Technician: </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">{{ $data->technician }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Plant:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">
                                {{ $data->plant }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Mix Identification:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">
                                {{ $data->mix_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Specified Strength (psi):</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">
                                {{ $data->mix_design_strength }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                </table>
        </div>

        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    SAMPLE DATA</caption>

                <table style="width: 100%; border-collapse: collapse">
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Date Sampled:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->created_at->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Date Received in Lab: </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{
                                $data->created_at->format('m/d/Y') }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">General Location:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->general_location }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Specific Location:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000" colspan="2">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->specific_location }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">Measured</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">Specified</h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Truck No.:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->truck_no }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Slump (in) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (C143/T119)</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->slump }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->slump_min }} -
                                {{ $data->slump_max }}
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Ticket No.:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->ticket_no }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Air Temp (°F):</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->ambient_temp }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Sample By:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->sampled_by }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Conc Temp (°F) &nbsp; &nbsp; (C1064/T309)</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->concrete_temp
                                }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{
                                $data->concrete_temp_min }} -
                                {{ $data->concrete_temp_max }} </h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Weather:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->weather }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Air Content (%) &nbsp; &nbsp; &nbsp; (C231/T152)</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->air_content }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->air_min }} - {{
                                $data->air_max }}
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Time Batched:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ date('h:i a', strtotime($data->batch_time)) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Unit Weight (pcf) &nbsp; &nbsp; (C138/T121)</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->unit_weight }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Time Sampled:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ date('h:i a', strtotime($data->sample_time)) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Relative Yield:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->relative_yield
                                }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Time Unloaded:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ date('h:i a', strtotime($data->ttf_unloading)) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">W/C Ratio:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{
                                $data->water_cement_ratio }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    @php
                    $startTimestamp = strtotime($data->batch_time);
                    $endTimestamp = strtotime($data->ttf_unloading);
                    $timeDifferenceInMinutes = round(($endTimestamp - $startTimestamp) / 60);
                    @endphp
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Time in Truck: (min):</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{
                                $timeDifferenceInMinutes }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Batch Size:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{
                                $data->yards_at_sampling }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">CY Placed:</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{
                                $data->total_yard_placement }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400">Water Added (gal):</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->water_added }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400"></h4>
                        </td>
                    </tr>
                </table>
        </div>

        <div
            style="padding-top: 5px; border-top: 2px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 2px solid #000; border-left: 1px solid #000;">
                    COMPRESSIVE STRENGTH OF CONCRETE CYLINDERS</caption>

                <table style="width: 100%; border-collapse: collapse">
                    <tr>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Cyl Set ID#</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Specimen ID</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Date Tested</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Age (days)</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Diameter (in)</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Avg Length (in)</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Area (in2)</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Type of Cap</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Load (lb)</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Fracture Type</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Lab Tech</h3>
                        </th>
                        <th style="padding: 1px; border: 1px solid #000">
                            <h3 style="font-size: 14px; font-weight: 500">Compressive Strength (psi)</h3>
                        </th>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">A
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_a)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->diameter_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_a }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->area_cyl_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->type_cap_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ number_format($data->max_load_a) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_a }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_a) }}
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">B
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_b)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->diameter_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_a }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->area_cyl_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->type_cap_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ number_format($data->max_load_b) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_b }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_b) }}
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">C
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_c)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->diameter_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_c }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->area_cyl_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->type_cap_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ number_format($data->max_load_c) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_c }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_c) }}
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">D
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_d)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->diameter_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_d }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->area_cyl_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->type_cap_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ number_format($data->max_load_d) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_d }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_d) }}
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">E
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_e)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->diameter_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_e }}</h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->area_cyl_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->type_cap_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ number_format($data->max_load_e) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_e }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_e) }}
                            </h4>
                        </td>
                    </tr>
                    @if ($data->age_g)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">F
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_f)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->diameter_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->area_cyl_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_cap_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->max_load_f) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_f }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_f) }}
                            </h4>
                        </td>
                    </tr>
                    @endif
                    @if ($data->age_g)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">G
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_g)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_g }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->diameter_g }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_g }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->area_cyl_g }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_cap_g }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->max_load_g) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_g }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_g }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_g) }}
                            </h4>
                        </td>
                    </tr>
                    @endif
                    @if ($data->age_h)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">H
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_h)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_h }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->diameter_h }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_h }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->area_cyl_h }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_cap_h }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->max_load_h) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_h }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_h }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_h) }}
                            </h4>
                        </td>
                    </tr>
                    @endif
                    @if ($data->age_i)
                    <tr>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->cylinder_id }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">I
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400;">
                                {{ \Carbon\Carbon::parse($data->test_date_i)->format('m/d/Y') }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->age_i }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->diameter_i }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->avg_length_i }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->area_cyl_i }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_cap_i }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->max_load_i) }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->type_fracture_i }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->person_performing_i }}
                            </h4>
                        </td>
                        <td style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ number_format($data->measured_strength_i) }}
                            </h4>
                        </td>
                    </tr>
                    @endif

                    <tr>
                        <td colspan="9" style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:right;">Average 28 Day Compressive
                                Strength
                                (psi)</h4>
                        </td>
                        <td colspan="3" style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->avarage }}
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:right;">Required 28 Day Strength
                                (psi)
                            </h4>
                        </td>
                        <td colspan="3" style="padding: 1px; border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $data->required_strength }}
                            </h4>
                        </td>
                    </tr>
                </table>
        </div>

        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 2px solid #000; border-left: 1px solid #000;">
                    NOTES/REMARKS</caption>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">Fracture Types:</h4>
                        </td>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">1-Cone both ends;</h4>
                        </td>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">2-Cone one end;</h4>
                        </td>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">3-Columnar cracking/no
                                cones;</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;"></h4>
                        </td>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">4-Diagonal Fracture;</h4>
                        </td>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">5-Side fracture at top or
                                bottom;
                            </h4>
                        </td>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">6-Side fractures at top or
                                bottom with pointed end</h4>
                        </td>
                    </tr>
                </table>

        </div>

        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">

                <table style="width: 100%; border-collapse: collapse; padding-top: 5px; padding-bottom: 5px;">
                    <tr>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">Concrete sample in
                                accordance with
                                ASTM C172 and/or AASHTO R60</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">Compressive Strength
                                determined in
                                accordance with ASTM C-39 and/or AASHTO T-22</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="font-size: 14px; font-weight: 400; text-align:left;">Capping: U = Unbonded (ASTM
                                C1231);
                                B = Bonded (ASTM C617); G = Ground</h4>
                        </td>
                    </tr>
                </table>
        </div>


        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">

            <table style="width: 100%; padding-top: 5px; border-collapse: collapse; border-bottom: 1px solid #000">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 0px solid #000; border-bottom: 0px solid #000; border-left: 0px solid #000;">
                    COMMENTS</caption>
                <tr>
                    <td style="padding: 10px 5px; font-size: 15px; font-weight: 500;">
                        <h5>{{ $data->remark }}</h5>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 1px; border: 1px solid #000; width: 50%;">
                        <h5>Copies:</h5>
                        @if ($data->send_to_client == 1)
                            @foreach (json_decode($data->responsible_person) as $person)
                                <p style="font-size: 13px; font-width: 400; padding-left: 40px;">
                                    {{ subClient($person)->email }}</p>
                            @endforeach
                        @else
                            @foreach (json_decode($data->responsible_person) as $person)
                                <p style="font-size: 13px; font-width: 400; padding-left: 40px;">
                                    {{ user($person)->email }}</p>
                            @endforeach
                        @endif
                    </td>
                    <td style="padding: 1px; border: 1px solid #000; width: 50%;">
                        <h6 style="font-width: 400;">Reviewed By: {{ user($data->created_by)->name }}</h6>
                    </td>
                </tr>
            </table>

        </div>
        <p style="padding-top: 10px; padding-bottom: 30px; font-size: 12px; font-weight: 400; text-align: left">
            These test results apply only to the specific samples/location/materials noted and may not be
            representative
            of other areas or similar materials. This report may not be reproduced, except in full, without
            written
            authorization by Geocal, Inc.
        </p>
    </div>
</body>

</html>