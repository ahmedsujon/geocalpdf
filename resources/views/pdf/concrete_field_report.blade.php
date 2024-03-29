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

        <table style="width: 100%; border-collapse: collapse; padding-top: 3px; margin-bottom: 5px;">
            <tr>
                <td style="padding: 1px; border: 1px solid #000" colspan="2">
                    <h4 style="font-size: 14px; font-weight: 400">Specifications: Slump:  {{ $set_one->slump_min }} - {{ $set_one->slump_max }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000" colspan="2">
                    <h4 style="font-size: 14px; font-weight: 400">Air Content: {{ $set_one->air_min }} -
                        {{ $set_one->air_max }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400; text-align:center;">Strength:
                        {{ $set_one->required_strength }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000" colspan="2">
                    <h4 style="font-size: 14px; font-weight: 400">Temperature: {{ $set_one->concrete_temp_min }}
                        - {{ $set_one->concrete_temp_max }}</h4>
                </td>
            </tr>
        </table>

        <div style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_two)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">2
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_three)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">3
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_four)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">4
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_five)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">5
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_six)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">6
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_seven)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">7
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_eight)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">8
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_nine)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">9
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->cylinder_id }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_ten)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">10
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->batch_time }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->sample_time }}
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->unit_weight }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->relative_yield }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->water_cement_ratio }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->concrete_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->ambient_temp }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->cylinder_id }}
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
                <th style="border: 1px solid #000" width="10%">
                    <h3 style="font-size: 14px; font-weight: 700">Test No.</h3>
                </th>
                <th colspan="2" style="padding: 10px 6px 5px 6px; text-align: center; border: 1px solid #000" width="65%">
                    <h3 style="font-size: 14px; font-weight: 700">Location</h3>
                </th>
                <th style="padding: 10px 6px 5px 6px; text-align: center; border: 1px solid #000" width="25%">
                    <h3 style="font-size: 14px; font-weight: 700">Remark</h3>
                </th>
            </tr>
            @if ($set_one)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">1</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_one->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_one->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_one->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_two)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">2</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_two->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_two->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_two->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_three)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">3</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_three->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_three->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_three->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_four)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">4</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_four->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_four->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_four->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_five)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">5</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_five->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_five->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_five->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_six)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">6</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_six->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_six->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_six->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_seven)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">7</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_seven->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_seven->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_seven->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_eight)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">8</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_eight->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_eight->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_eight->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_nine)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">9</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_nine->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_nine->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_nine->remark }}</h4>
                    </td>
                </tr>
            @endif
            @if ($set_ten)
                <tr>
                    <td style="padding: 4px 6px; border: 1px solid #000; width: 50px">
                        <h4 style="font-size: 14px; font-weight: 400; text-align:center;">10</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_ten->type_of_structure }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_ten->specific_location }}</h4>
                    </td>
                    <td style="padding: 4px 6px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400">{{ $set_ten->remark }}</h4>
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
                @if ($set_one)
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
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_one->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_two)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">2
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_two->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_three)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">3
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_three->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_four)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">4
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_four->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_five)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">5
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_five->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_six)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">6
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_six->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_seven)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">7
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_seven->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_eight)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">8
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_eight->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_nine)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">9
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_nine->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
                @if ($set_ten)
                    <tr>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">10
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->supplier }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->mix_id }}
                            </h4>
                        </td>
                        <td style="border: 1px solid #000">
                            <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
                                {{ $set_ten->mix_design_strength }}
                            </h4>
                        </td>
                    </tr>
                @endif
            </table>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 5px; border: 1px solid #000; width: 70%;">
                    <h6>Notes</h6>
                    <h6 style="font-weight: 400;">1. Applicable ASTM/AASHTO standards unless otherwise indicated:
                        Sampling,
                        C172/R60</h6>
                    <h6 style="font-weight: 400;">Slump: C143/T119; Air Content: C231/T152; Temperature: C1064/T309;
                        Unit
                        Weight C138/T121</h6>
                </td>
                <td style="padding: 5px; border: 1px solid #000; width: 30%;">
                    <h6>Remark:</h6>
                    <h6 style="font-weight: 400;">{{ $set_one->remark }}</h6>
                </td>
            </tr>
        </table>

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 1px; border: 1px solid #000; width: 50%;">
                    <h6>Copies:</h6>
                    @foreach (json_decode($set_one->responsible_person) as $person)
                        <p style="font-size: 13px; font-width: 400; padding-left: 40px;">{{ user($person)->email }}
                        </p>
                    @endforeach
                </td>
                <td style="padding: 1px; border: 1px solid #000; width: 50%; padding-top: 5px;">
                    <h6 style="padding-bottom: 5px;">Field Observer: <span
                            style="border-bottom: 1px solid gray;">{{ $set_one->sampled_by }}</span></h6>
                    <h6>Reviewed By: <span style="border-bottom: 1px solid gray">
                            {{ user($set_one->created_by)->name }}</span></h6>
                </td>
            </tr>
        </table>

        <p style="padding-bottom: 30px; font-size: 12px; font-weight: 400; text-align: left">
            These test results apply only to the specific samples/location/materials noted and may not be
            representative
            of other areas or similar materials. This report may not be reproduced, except in full, without
            written
            authorization by Geocal, Inc.
        </p>
    </div>
</body>

</html>
