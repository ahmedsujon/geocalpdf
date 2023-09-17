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
        padding: 15px 25px 25px 25px;
      ">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>

                <td style="width: 28%; text-align: left;">

                    <h4 style="font-size: 14px; font-weight: 400;">
                        Client: {{ $set_one->client_name }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Email: {{ $set_one->client_email }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Phone: {{ $set_one->client_phone }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Company Name: {{ $set_one->client_company_name }}
                    </h4>
                </td>
                <td style="width: 40%; text-align: center;">
                    <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo"
                        style="max-width: 100px" />
                    <h4 style="font-size: 13px; font-weight: 700; padding-top: 5px">
                        {{ $set_one->office_address }}
                    </h4>
                </td>
                <td style="width: 28%; text-align: left;">
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Date: {{ $set_one->created_at->format('Y-m-d') }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Project No: {{ $project->project_number }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Project Name: {{ $project->project_name }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Weather: {{ $set_one->weather }}
                    </h4>
                </td>
            </tr>
        </table>

        <table style="width: 100%; border-collapse: collapse; padding-top: 25px; margin-bottom: 5px;">
            <h4 style="font-size: 13px; font-weight: 700; text-align:center;">PHYSICAL PROPERTIES OF PLASTIC CONCRETE
            </h4>
            <tr>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">Specifications: Slump:</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $set_one->specified_slump_min }}
                    </h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">
                        - {{ $set_one->specified_slump_max }}
                    </h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">Air Content</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $set_one->specified_air_min }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">- {{ $set_one->specified_air_max }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">Strength: {{ $set_one->required_strength }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">Temperature: </h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $set_one->conc_temp_min }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">- {{ $set_one->conc_temp_max }}</h4>
                </td>
            </tr>
        </table>

        <div style="padding-top: 5px;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    TEST RESULTS</caption>
                <tr>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">TEST NO.</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">TRUCK NO.</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">TICKET NO.</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">TIME BATCHED</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">TIME SAMPLED</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">TIME UNLOAD</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">SLUMP (inches)</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">AIR CONTENT %</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">UNIT WEIGHT (pcf)</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">RELATIVE YIELD</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">W/C RATIO</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">CONCR TEMP(°F)</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">AIR TEMP(°F)</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">CYL SET ID NUMBER</h3>
                    </th>
                </tr>
                @if ($set_one)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_one->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_one->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_one->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_one->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_one->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_one->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_one->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_one->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_one->relative_yield }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_one->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_one->concrete_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_one->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_one->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_two)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_two->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_two->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_two->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_two->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_two->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_two->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_two->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_two->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_two->relative_yield }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_two->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_two->concrete_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_two->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_two->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_three)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_three->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_three->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_three->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_three->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_three->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_three->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_three->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_three->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_three->relative_yield
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_three->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_three->concrete_temp
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_three->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_three->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_four)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_four->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_four->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_four->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_four->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_four->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_four->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_four->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_four->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_four->relative_yield
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_four->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_four->concrete_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_four->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_four->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_five)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_five->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_five->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_five->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_five->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_five->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_five->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_five->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_five->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_five->relative_yield
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_five->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_five->concrete_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_five->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_five->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_six)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_six->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_six->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_six->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_six->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_six->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_six->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_six->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_six->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_six->relative_yield }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_six->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_six->concrete_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_six->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_six->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_seven)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_seven->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_seven->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_seven->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_seven->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_seven->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_seven->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_seven->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_seven->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_seven->relative_yield
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_seven->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_seven->concrete_temp
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_seven->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_seven->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_eight)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_eight->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_eight->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_eight->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_eight->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_eight->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_eight->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_eight->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_eight->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_eight->relative_yield
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_eight->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_eight->concrete_temp
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_eight->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_eight->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_nine)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_nine->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_nine->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_nine->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_nine->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_nine->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_nine->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_nine->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_nine->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_nine->relative_yield
                            }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_nine->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_nine->concrete_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_nine->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_nine->cylinder_id }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($set_ten)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_ten->truck_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_ten->ticket_no }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_ten->batch_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_ten->sample_time }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_ten->ttf_unloading }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_ten->slump }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_ten->air_content }}</h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_ten->unit_weight }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_ten->relative_yield }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_ten->water_cement_ratio }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_ten->concrete_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_ten->ambient_temp }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $set_ten->cylinder_id }}
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
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 2px solid #000; border-left: 1px solid #000;">
                    LOCATION & REMARK </caption>
                <tr>
                    <td>
                        <h4 style="padding: 1px; font-size: 14px; font-weight: 400">
                            <b> General Location: </b> {{ $set_one->general_location }}
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
                    <h3 style="font-size: 14px; font-weight: 700">Type of Structure:</h3>
                </th>
                <th style="padding: 10px 6px 5px 6px; text-align: left; border: 1px solid #000">
                    <h3 style="font-size: 14px; font-weight: 700">Location</h3>
                </th>
                <th style="padding: 10px 6px 5px 6px; text-align: left; border: 1px solid #000">
                    <h3 style="font-size: 14px; font-weight: 700">Remark</h3>
                </th>
            </tr>
            @if ($set_one->truck_no != null)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $set_one->type_of_structure }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $set_one->general_location }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $set_one->remark }}</h4>
                </td>
            </tr>
            @endif
        </table>


        <div style="padding-top: 5px;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    MIX DATA</caption>
                <tr>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">TEST NO.</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">Supplier</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">Mix</h3>
                    </th>
                    <th style="border: 1px solid #000">
                        <h3 style="font-size: 12px; font-weight: 400">Design Strength (psi)</h3>
                    </th>
                </tr>
                @if ($set_one->truck_no != null)
                <tr>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_one->supplier }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                            {{ $set_one->mix_id }}
                        </h4>
                    </td>
                    <td style="border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{
                            $set_one->mix_design_strength }}
                        </h4>
                    </td>
                </tr>
                @endif
            </table>
        </div>
        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse; padding: 5px;">
                <caption
                    style="text-align:left; font-size: 14px; text-transform: uppercase; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 0px solid #000; border-bottom: 2px solid #000; border-left: 0px solid #000;">
                    Nodes:</caption>

                <tr>
                    <td style="font-size: 14px;">1. Applicable ASTM/AASHTO standards unless otherwise indicated:
                        Sampling,
                        C172/R60</td>
                </tr>
                <tr>
                    <td style="font-size: 14px;">Slump: C143/T119; Air Content: C231/T152; Temperature: C1064/T309;
                        Unit
                        Weight C138/T121</td>
                </tr>
            </table>
        </div>

        <table
            style="width: 100%; border-collapse: collapse; border-top: 0px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000">
            <tr>
                <td style="width: 32%; padding-top: 10px; padding-bottom: 20px;">
                    <h6 style="
                font-size: 14px;
                font-weight: normal;">
                        {{ user($set_one->created_by)->name }}</h6>
                    <h6 style="
            font-size: 14px;
            font-weight: normal;
            border-top: 1px solid black;
            padding-top: 2px;
            width: 160px;
          ">
                        Field Representative:
                    </h6>
                </td>
                <td
                    style="width: 40%; padding-top: 10px; padding-left: 10px; padding-right: 20px; padding-bottom: 20px;">
                    <h6 style="
                font-size: 14px;
                font-weight: normal;">
                        {{ user($set_one->created_by)->name }}</h6>
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

        <p style="padding-bottom: 30px; font-size: 13px; font-weight: 400; text-align: left">
            These test results apply only to the specific samples/location/materials noted and may not be
            representative
            of other areas or similar materials. This report may not be reproduced, except in full, without
            written
            authorization by Geocal, Inc.
        </p>
    </div>
</body>

</html>