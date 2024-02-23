<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compressive Strength - Local Agency</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .td-padding-left {
            padding-left: 5px;
        }
    </style>
</head>

<body>
    <div style="
    padding: 15px 25px 25px 25px;">
        <div style="padding: 20px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 70%; text-align: left;">
                        <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo"
                            style="max-width: 100px" />
                    </td>
                    <td style="width: 30%; ">
                        <p style="font-size: 14px; text-align: right;">
                            {{ $data->office_address }}<br>
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <div
            style="margin-top: 2px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td style=" width: 60%; text-align: left; border-right: 3px solid #000;">
                            <p style="font-size: 14px; font-weight: 600;">
                                Client
                            </p>
                            <p style="font-size: 12px; padding-left: 40px; padding-bottom: 2px;">
                                {{ $data->client_company_name }}
                            </p>
                            <p style="font-size: 12px; padding-left: 40px; padding-bottom: 2px;">
                                {{ $data->client_address }}</p>
                            <p
                                style="font-size: 14px; text-transform: uppercase; text-align: center; font-weight: 600; padding-left: 40px; padding-top: 4px; padding-bottom: 4px; border-top: 3px  solid #000">
                                CONCRETE
                                TEST RESULTS SUMMARY</p>
                        </td>
                        <td style=" width: 50%; text-align: left; border-right: 0px solid #000;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="td-padding-left" style="border-bottom: 2px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 5px;">
                                            {{ $data->contactid }}
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $data->client_address }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-bottom: 2px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 5px;">
                                            Region
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $data->client_address }}
                                        </p>
                                    </td>
                                    <td class="td-padding-left"
                                        style="border-bottom: 2px solid #000; border-left: 2px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 5px;">
                                            Date Submitted
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ \Carbon\Carbon::parse($data->break_date_d)->format('m/d/Y') }}
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-padding-left" colspan="3" style="border-bottom: 2px solid #000;">
                                        <p style="font-size: 10px; padding-bottom: 5px;">
                                            Project No.
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $data->project_number }}
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-padding-left" colspan="3">
                                        <p style="font-size: 10px; padding-bottom: 5px;">
                                            Project location
                                        </p>
                                        <p style="font-size: 12px;">
                                            {{ $data->project_location }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div
            style=" margin-top: 5px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">

            <table style="width: 100%; border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td class="td-padding-left" style=" text-align: left; border-right: 3px solid #000;">
                            <p style="font-size: 10px;">
                                Item
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px;">
                                {{ $data->item }}
                            </p>
                        </td>
                        <td class="td-padding-left" style=" text-align: left; border-right: 2px solid #000;">
                            <p style="font-size: 10px;">
                                Class
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px;">
                                {{ $data->class_name }}
                            </p>
                        </td>
                        <td class="td-padding-left" style="text-align: left; border-right: 2px solid #000;">
                            <p style="font-size: 10px;">
                                Design mix no.
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px;">
                                {{ $data->design_mix_no }}
                            </p>
                        </td>
                        <td class="td-padding-left" style=" text-align: left; border-right: 2px solid #000;">
                            <p style="font-size: 10px;">
                                Batch plant
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px;">
                                {{ $data->batch_plant }}
                            </p>
                        </td>
                        <td class="td-padding-left" style=" text-align: left; border-right: 2px solid #000;">
                            <p style="font-size: 10px; ">
                                Supplier
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px;">
                                {{ $data->supplier }}
                            </p>
                        </td>
                    </tr>
                    <tr style="border-top: 2px solid #000;">
                        <td class="td-padding-left" style=" text-align: left; border-right: 3px solid #000;">
                            <p style="font-size: 10px;">
                                Structure
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px;">
                                {{ $data->structure }}
                            </p>
                        </td>
                        <td class="td-padding-left" style=" text-align: left; border-right: 2px solid #000;"
                            colspan="2">
                            <p style="font-size: 10px;">
                                Slump
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px; text-align: center;">
                                {{ $data->slump }} <span>inches maximum</span>
                            </p>
                        </td>
                        <td class="td-padding-left" style="text-align: left; border-right: 2px solid #000;">
                            <p style="font-size: 10px;">
                                % total air
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px; text-align: center;">
                                {{ $data->inches_max }} to {{ $data->inches_min }}
                            </p>
                        </td>
                        <td class="td-padding-left" style=" text-align: left; border-right: 2px solid #000;">
                            <p style="font-size: 10px;">
                                Compressive strength
                            </p>
                            <p style="font-size: 12px; padding-bottom: 2px; text-align: center;">
                                {{ $data->project_location }} psi
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div style=" margin-top: 0px;">

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <th
                        style="width: 18%; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Test # and Location
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Date Placed
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Ticket no.
                        </p>
                    </th>
                    <th style="border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;"
                        colspan="2">
                        <p style="font-size: 12px;">
                            Cu. Yd./Cu. M.
                        </p>
                        <p style="font-size: 10px;"><span
                                style="border-right: 2px solid #000; padding-right: 5px;">Batched</span>
                            <span style="padding-left: 5px;">Placed</span>
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Temp.
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Slump
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            % total air
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Unit mass
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Yield
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Calculated w/c ratio
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Cylinders cast F.S. no.
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            Set No.
                        </p>
                    </th>
                    <th
                        style="text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000;">
                        <p style="font-size: 12px;">
                            S. E.
                        </p>
                    </th>
                </tr>
                @if ($data->location_test_a)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_a)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_a }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_a }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_b)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_b)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_b }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_b }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_c)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_c)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_c }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_c }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_d)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_d)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_d }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_d }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_e)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_e)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_e }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_e }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_f)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_f)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_f }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_f }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_g)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_g)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_g }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_g }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_h)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_h)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_h }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_h }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_i)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_i)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_i }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_i }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_j)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_j)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_j }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_j }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_k)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_k)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_k }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_k }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_l)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_l)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_l }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_l }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_m)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_m)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_m }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_m }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_n)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_n)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_n }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_n }}
                            </p>
                        </td>
                    </tr>
                @endif

                @if ($data->location_test_o)
                    <tr>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 3px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->location_test_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ \Carbon\Carbon::parse($data->date_placed_o)->format('m/d/Y') }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->ticket_no_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->batched_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->placed_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->temp_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->slump_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->total_air_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->unit_mass_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->yeild_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->calculated_wc_ratio_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->cylinders_cast_fs_no_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 0px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->set_no_o }}
                            </p>
                        </td>
                        <td
                            style="padding: 3px 2px; text-align: center; border-left: 1px solid #000; border-top: 3px solid #000; border-bottom: 3px solid #000; border-right: 3px solid #000;">
                            <p style="font-size: 12px;">
                                {{ $data->se_o }}
                            </p>
                        </td>
                    </tr>
                @endif


            </table>
        </div>
        <div
            style="border-top: 0px solid #000; border-right: 0px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="text-align: left; border-right: 3px solid #000;">
                        <p style="font-size: 10px; padding-bottom: 20px;">
                            Action taken to document deviations from specifications
                            (including quantities with price reduction calculations
                            attached).
                        </p>
                        <p style="font-size: 12px;">
                            Air Plus / Air Minus added as needed to get air in spec.
                        </p>
                    </td>

                </tr>
            </table>

        </div>

        <div
            style="margin-top: 2px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="text-align: left; border-right: 3px solid #000;">
                        <p style="font-size: 10px; padding-bottom: 20px;">
                            Tester (print name)
                        </p>
                        <p style="font-size: 12px;">
                            Technician #1
                        </p>
                    </td>
                    <td style="text-align: left; border-right: 3px solid #000;">
                        <p style="font-size: 10px; padding-bottom: 20px;">
                            Title
                        </p>
                        <p style="font-size: 12px;">
                            Technician
                        </p>
                    </td>
                    <td style="text-align: left; border-right: 3px solid #000;">
                        <p style="font-size: 10px; padding-bottom: 20px;">
                            Approved by
                        </p>
                        <p style="font-size: 12px;">
                            Engineer #1
                        </p>
                    </td>
                    <td style="text-align: left; border-right: 3px solid #000;">
                        <p style="font-size: 10px; padding-bottom: 20px;">
                            Signature
                        </p>
                    </td>
                    <td style="text-align: left;">
                        <p style="font-size: 10px; padding-bottom: 20px;">
                            Title
                        </p>
                        <p style="font-size: 12px;">
                            Engr.
                        </p>
                    </td>
                </tr>
            </table>

        </div>

        <div style=" ">
            <table style="width: 100%; padding-top: 5px;">
                <tr>
                    <td style="text-align: left;">
                        <p style="font-size: 12px;">Distribution: original - Project
                            file</p>
                    </td>
                    <td style="text-align: center;">
                        <p style="font-size: 12px;">Previous editions are obsolete and
                            may not be used.</p>
                    </td>
                    <td style="text-align: right;">
                        <p style="font-size: 12px;">Form #156 4/14</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>


</body>

</html>
