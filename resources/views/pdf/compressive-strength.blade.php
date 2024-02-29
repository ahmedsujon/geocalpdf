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
        padding: 15px 25px 25px 25px;
      ">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 20%; text-align: left;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="vertical-align: top;">
                                <h4 style="font-size: 14px; font-weight: 700;">
                                    Client:
                                </h4>
                            </td>
                            <td>
                                <p style="font-size: 12px;">
                                    {{ $data->client_company_name }}<br>
                                    {{ $data->client_address }}<br>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 60%; text-align: center;">
                    <img src="https://geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo"
                        style="max-width: 100px" />
                </td>
                <td style="width: 20%;">
                    <p style="font-size: 12px; text-align: right;">
                        {{ $data->office_address }}
                    </p>
                    <p style="font-size: 12px; text-align: center; padding-top: 10px;">FS# = (Contract
                        ID-Seq.#)</p>
                </td>
            </tr>
        </table>

        <div
            style="margin-top: 5px; border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000; border-left: 3px solid #000;">

            <table style="width: 100%; border-collapse: collapse;">

                <tr>
                    <td style="width: 45%; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 600; text-align: center">Concrete
                            Cylinders Compressive Strength C39<br>Cubes Compressive
                            Strength C109</h4>
                        <p style="padding-top: 10px; font-size: 12px; text-align: center">Additional
                            methods C1064, T119, T121, T152</p>
                    </td>

                    <td
                        style="width: 55%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 4px solid #000;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td class="td-padding-left" style="width: 36%; border-right: 1px solid #000">
                                    <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Contract
                                            ID</span><br>
                                        {{ $data->contractid }}</p>
                                </td>
                                <td class="td-padding-left" style="width: 20%; border-right: 1px solid #000">
                                    <p style="font-size: 12px; text-align: left"><span
                                            style="font-size: 8px;">Region</span><br>
                                        {{ $data->region }}</p>
                                </td>
                                <td class="td-padding-left" style="width: 44%; ">
                                    <p style="font-size: 14px; text-align: left">{{ $data->contract_id_seq }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="td-padding-left"
                                    style="border-top: 1px solid #000; border-right: 0px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;"
                                    colspan="3">
                                    <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Project
                                            Number</span><br>
                                        {{ $data->project_number }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="td-padding-left"
                                    style="border-top: 1px solid #000; border-right: 0px solid #000; border-bottom: 0px solid #000; border-left: 0px solid #000;"
                                    colspan="3">
                                    <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Project
                                            Location</span><br>
                                        {{ $data->project_location }}</p>
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>

            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td class="td-padding-left"
                        style="width: 45%;  border-top: 3px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Concrete
                                Supplier:</span><br>
                            {{ $data->concrete_supplier }}</p>
                    </td>

                    <td class="td-padding-left"
                        style="width: 20%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: left">CDOT Mix # <br>{{ $data->cdot_mix }}</p>
                    </td>
                    <td class="td-padding-left"
                        style="width: 11%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: left">Item # <br>{{ $data->item }}</p>
                    </td>
                    <td class="td-padding-left"
                        style="width: 24%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: left">Description: <br>{{ $data->description }}</p>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td class="td-padding-left"
                        style="width: 100%;  border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <h3
                            style="font-size: 16px; text-align: left; font-weight: 700; text-transform: uppercase; text-align: center">
                            SAMPLE
                            LOCATION AND FIELD TEST RESULTS</h3>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td class="td-padding-left"
                        style="width: 45%;  border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Placed at (Str. No.
                                or
                                station/lane/portion)</span><br>
                            {{ $data->placed_at }}</p>
                    </td>

                    <td class="td-padding-left"
                        style="width: 17.6%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                        <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Material placed in
                                Line Item
                                #'s </span><br>
                            {{ $data->material_placed_in_line_item }}
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Batch Ticket #
                            </span><br>
                            {{ $data->batch_ticket }}</p>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td class="td-padding-left"
                        style="width: 20%;  border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left"><span style="font-size: 10px;">Field Tester
                                Name</span><br>
                            {{ $data->field_tester_name }}</p>
                    </td>

                    <td
                        style="width: 9%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span
                                style="font-size: 10px; text-align: center display: block">Entrained
                                Air</span><br>
                            {{ $data->entrained_air }}
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style="width: 9.5%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span
                                style="font-size: 10px; text-align: center; display: block; padding-bottom: 4px;">Slump</span>
                            {{ $data->slump }}</p>
                    </td>
                    <td class="td-padding-left"
                        style="width: 15%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span
                                style="font-size: 10px; text-align: center; display: block; padding-bottom: 4px;">Concrete
                                Temperature</span>
                            {{ $data->concrete_temperature }}</p>
                    </td>
                    <td class="td-padding-left"
                        style="width: 15%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span
                                style="font-size: 10px; text-align: center; display: block; padding-bottom: 4px;">Unit
                                Weight</span>
                            {{ $data->unit_weight }}</p>
                    </td>
                    <td class="td-padding-left"
                        style="width: 7%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span
                                style="font-size: 10px; text-align: center; display: block; padding-bottom: 4px;">Yield</span>
                            {{ $data->yield }}</p>
                    </td>
                    <td class="td-padding-left"
                        style="width: 10%; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span
                                style="font-size: 10px; text-align: center; display: block; padding-bottom: 4px;">W/C
                                Ratio</span>
                            {{ $data->wc_ratio }}</p>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td
                        style="width: 100%;  border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <h3 style="font-size: 16px; font-weight: 700; text-transform: uppercase; text-align: center">
                            Specimen
                            Data</h3>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td class="td-padding-left"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                style="font-size: 8px; text-align: center; width: 100%; display: block; padding-bottom: 4px;">Specimen
                                for:</span>
                            @if ($data->specimen_for == 'Design Adequacy')
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Design
                                    Adequacy <span
                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                <span style="width: 100%; display: block;">Field Cure
                                    <span style="padding: 1px 4px; margin-left: 48px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            @else
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Design
                                    Adequacy <span
                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                                <span style="width: 100%; display: block;">Field Cure
                                    <span
                                        style="padding: 1px 5px; margin-left: 48px; border: 2px solid #000;">X</span></span>
                            @endif
                        </p>
                    </td>

                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span style="font-size: 8px;">Mold
                                Date</span><br>
                            <span
                                style="text-align: center; display: block;  font-size: 14px;">{{ $data->mold_date }}</span>
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span style="font-size: 8px;">Time</span><br>
                            <span
                                style="text-align: center; display: block;  font-size: 14px;">{{ date('h:i A', strtotime($data->time)) }}</span>
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: center"><span style="font-size: 8px;">Hours Initial
                                cure
                                in
                                molds</span>
                            <span
                                style="text-align: center; display: block;  font-size: 14px;">{{ $data->hours_initial_cure_in_molds }}</span>
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                style="font-size: 8px; width: 100%; display: block; padding-bottom: 4px;">Initial
                                cure temperature</span>
                            @if ($data->initial_cure_temperature == '(60-80°F)')
                                <span style="width: 100%; display: block; padding-bottom: 6px;">(60-80°F)
                                    <span
                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                <span style="width: 100%; display: block;">(68-78°F)
                                    <span style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            @else
                                <span style="width: 100%; display: block; padding-bottom: 6px;">(60-80°F)
                                    <span style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                                <span style="width: 100%; display: block;">(68-78°F)
                                    <span
                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                            @endif
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                style="font-size: 8px; display: block; padding-bottom: 4px;">Final Cure
                                Method</span>
                            @if ($data->final_cure_method == 'Water at 73.5°')
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Water
                                    at 73.5° <span
                                        style="padding: 1px 5px; margin-left: 58px; border: 2px solid #000;">X</span></span>
                                <span style="width: 100%; display: block;">Moist Room
                                    Cure 73.5° <span
                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            @else
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Water
                                    at 73.5° <span
                                        style="padding: 1px 4px; margin-left: 58px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                                <span style="width: 100%; display: block;">Moist Room
                                    Cure 73.5° <span
                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                            @endif
                        </p>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td class="td-padding-left"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                style="font-size: 8px; text-align: center; width: 100%; display: block;">Location
                                Stored in Field:</span><br>
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px;">{{ $data->location_stored_in_field }}</span>
                        </p>
                    </td>

                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 0px solid #000;">
                        <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Manner of
                                Protection:</span><br>
                            <span style="display: block;  font-size: 14px;">{{ $data->manner_of_protection }}</span>
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Maintained moist
                                and
                                temperature by:</span><br>
                            <span
                                style="display: block;  font-size: 14px;">{{ $data->maintained_moist_and_temperature_by }}</span>
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style="border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
                        <p style="font-size: 12px; text-align: left"><span style="font-size: 8px;">Date/Time Molds
                                Removed</span><br>
                            <span
                                style="display: block;  font-size: 14px;">{{ date('n/j/y g:i A', strtotime($data->date_time_molds_removed)) }}</span>
                        </p>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td class="td-padding-left"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                style="font-size: 8px; text-align: left;">Field
                                Comments:</span><br>
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px;">{{ $data->field_comments }}</span>
                        </p>
                    </td>

                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse; border-top: 3px solid #000;">
                <tr>
                    <td
                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 8px; text-align: center;">Mark each
                            specimen with Field Sheet # and Break Date</p>
                    </td>
                    <td
                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 8px; text-align: center;">Set
                            No.</p>
                    </td>
                    <td
                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 8px; text-align: center;">Conc.
                            Class</p>
                    </td>
                    <td
                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 8px; text-align: center;">28 Day
                            Break Date</p>
                    </td>
                    <td
                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 8px; text-align: center;">Number of
                            Specimens</p>
                    </td>
                    <td
                        style="padding: 3px; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 8px; text-align: center;">For Cast
                            specimens, report cast by</p>
                    </td>
                </tr>
                <tr>
                    <td
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; "><span
                                style="font-size: 8px; text-align: left;">Sample
                                ID</span><br>
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $data->sample_id }}</span>
                        </p>
                    </td>
                    <td
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; ">
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $data->set_no }}</span>
                        </p>
                    </td>
                    <td
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; ">
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $data->conc_class }}</span>
                        </p>
                    </td>
                    <td
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; ">
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ date('n/j/y', strtotime($data->day_break_date)) }}</span>
                        </p>
                    </td>
                    <td
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; ">
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $data->number_of_specimens }}</span>
                        </p>
                    </td>
                    <td
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; ">
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">{{ $data->for_cast_specimens }}</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="td-padding-left"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;">
                            <span style="width: 100%; display: block; padding-bottom: 6px;">Date
                                Submitted to Lab
                                <br>{{ date('n/j/y', strtotime($data->date_submitted_to_lab)) }}</span>
                        </p>
                    </td>
                    <td
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;">
                            <span style="padding-bottom: 6px; text-align: left">Specimens tested at:</span>
                        </p>
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr class="td-padding-left">
                                @if ($data->specimens_tested_at == 'Central Lab')
                                    <td>
                                        <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Central
                                                Lab<span
                                                    style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                        </p>
                                        <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block;">Region Lab<span
                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                    </td>
                                    <td>
                                        <p style="font-size: 10px; text-align: left;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Consultant
                                                Lab<span
                                                    style="padding: 1px 4px; margin-left: 14px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>

                                        <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block;">CDOT Field Lab<span
                                                    style="padding: 1px 4px; margin-left: 9px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                    </td>
                                @elseif ($data->specimens_tested_at == 'Consultant Lab')
                                    <td>
                                        <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Central
                                                Lab<span
                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                        <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block;">Region Lab<span
                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                    </td>
                                    <td>
                                        <p style="font-size: 10px; text-align: left;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Consultant
                                                Lab<span
                                                    style="padding: 1px 5px; margin-left: 14px; border: 2px solid #000;">X</span></span>
                                        </p>

                                        <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block;">CDOT Field Lab<span
                                                    style="padding: 1px 4px; margin-left: 9px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                    </td>
                                @elseif ($data->specimens_tested_at == 'Region Lab')
                                    <td>
                                        <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Central
                                                Lab<span
                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                        <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block;">Region Lab<span
                                                    style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                                        </p>
                                    </td>
                                    <td>
                                        <p style="font-size: 10px; text-align: left;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Consultant
                                                Lab<span
                                                    style="padding: 1px 4px; margin-left: 14px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>

                                        <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block;">CDOT Field Lab<span
                                                    style="padding: 1px 4px; margin-left: 9px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                    </td>
                                @else
                                    <td>
                                        <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Central
                                                Lab<span
                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                        <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block;">Region Lab<span
                                                    style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                    </td>
                                    <td>
                                        <p style="font-size: 10px; text-align: left;">
                                            <span style="width: 100%; display: block; padding-bottom: 6px;">Consultant
                                                Lab<span
                                                    style="padding: 1px 4px; margin-left: 14px; border: 2px solid #000;">&nbsp;
                                                    &nbsp;</span></span>
                                        </p>
                                        <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                            <span style="width: 100%; display: block;">CDOT Field Lab<span
                                                    style="padding: 1px 5px; margin-left: 9px; border: 2px solid #000;">X</span></span>
                                        </p>
                                    </td>
                                @endif
                            </tr>
                        </table>
                    </td>
                    <td colspan="4"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; line-height: 20px; text-align: left;">
                            <span
                                style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">Required
                                Strength <span
                                    style="padding-left: 40px; padding-right: 40px; border-bottom: 1px solid #000;">{{ $data->required_strength }}</span>
                                psi.<br> 28 Day Average Compressive Strength
                                @if ($data->day_average_compressive_strength)
                                    <span
                                        style="padding-left: 30px; padding-right: 30px; border-bottom: 1px solid #000;">{{ $data->day_average_compressive_strength }}</span>psi
                            </span>
                        @else
                            <span
                                style="padding-left: 30px; padding-right: 30px; border-bottom: 1px solid #000;">&nbsp;
                                &nbsp;</span>psi</span>
                            @endif
                        </p>
                    </td>
                </tr>

                <tr>
                    <td
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-bottom: 4px;">
                            <span style="width: 100%; display: block; padding-bottom: 6px; text-align: center;">Type of
                                specimen submitted</span>
                        </p>
                    </td>
                    <td class="td-padding-left"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        @if ($data->type_of_specimen_submitted == '4 X 8')
                            <p style="font-size: 10px; text-align: left; padding-top: 5px; ">
                                <span style="padding-bottom: 6px;">Cylinders <span
                                        style="padding: 1px 5px; margin-left: 10px; margin-right: 2px; border: 2px solid #000;">X</span>
                                    4 X 8</span>
                                <span
                                    style="padding: 1px 5px; margin-left: 10px; margin-right: 10px; border: 2px solid #000;">
                                    &nbsp; </span> 6 X 12</span>
                            </p>
                        @else
                            <p style="font-size: 10px; text-align: left; padding-top: 5px; ">
                                <span style="padding-bottom: 6px;">Cylinders <span
                                        style="padding: 1px 5px; margin-left: 10px; margin-right: 2px; border: 2px solid #000;">
                                        &nbsp; </span>
                                    4 X 8</span>
                                <span
                                    style="padding: 1px 5px; margin-left: 10px; margin-right: 10px; border: 2px solid #000;">X</span>
                                6 X 12</span>
                            </p>
                        @endif
                    </td>
                    <td class="td-padding-left" colspan="3"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: left; padding-top: 5px; ">
                            <span style="padding-bottom: 6px;">Cubes
                                @if ($data->cubes == '2 X 2')
                                    <span
                                        style="padding: 1px 5px; margin-left: 20px; margin-right: 10px; border: 2px solid #000;">
                                        X </span> 2 X 2
                            </span>
                        @else
                            <span
                                style="padding: 1px 5px; margin-left: 20px; margin-right: 10px; border: 2px solid #000;">
                                &nbsp; </span> 2 X 2</span>
                            @endif
                        </p>
                    </td>
                    <td colspan="2"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; line-height: 20px; text-align: left;">
                            <span style="width: 100%; display: block; padding-bottom: 6px;">Other:
                                <span
                                    style="padding-left: 30px; padding-right: 30px; border-bottom: 3px solid #000;">{{ $data->other }}</span></span>
                        </p>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <td
                    style="width: 25%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    <p style="font-size: 12px; text-align: center; padding: 25px;">
                        <span style="display: block; padding-bottom: 6px; text-align: center;">Represented
                            Quantity</span>
                    </p>
                </td>
                <td class="td-padding-left"
                    style="width: 25%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    <p style="font-size: 12px; text-align: left; padding-top: 5px; ">
                        @if ($data->represented_quantity == 'Cubic Yards')
                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Cubic
                                    Yards<span
                                        style="padding: 1px 5px; margin-left: 20px; border: 2px solid #000;">X</span></span>
                            </p>
                            <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                <span style="width: 100%; display: block;">Lineal Feet<span
                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            </p>
                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Square Yards<span
                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            </p>
                        @elseif ($data->represented_quantity == 'Lineal Feet')
                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Cubic
                                    Yards<span
                                        style="padding: 1px 4px; margin-left: 20px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            </p>
                            <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                <span style="width: 100%; display: block;">Lineal Feet<span
                                        style="padding: 1px 5px; margin-left: 25px; border: 2px solid #000;">X</span></span>
                            </p>
                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Square Yards<span
                                        style="padding: 1px 4px; margin-left: 13px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            </p>
                        @else
                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Cubic
                                    Yards<span
                                        style="padding: 1px 4px; margin-left: 15px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            </p>
                            <p style="font-size: 10px; text-align: left; padding-bottom: 4px;">
                                <span style="width: 100%; display: block;">Lineal Feet<span
                                        style="padding: 1px 4px; margin-left: 10px; border: 2px solid #000;">&nbsp;
                                        &nbsp;</span></span>
                            </p>
                            <p style="font-size: 10px; text-align: left; padding-top: 5px;">
                                <span style="width: 100%; display: block; padding-bottom: 6px;">Square Yards<span
                                        style="padding: 1px 5px; margin-left: 10px; border: 2px solid #000;">X</span></span>
                            </p>
                        @endif
                    </p>
                </td>
                <td
                    style="width: 15%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    <p style="font-size: 12px; text-align: center; padding-top: 5px;">
                        <span style=" width: 100%; display: block; padding-bottom: 6px;">Previous Qty
                            <span
                                style=" width: 100%; display: block; font-size: 14px; text-align: center; padding-top: 6px;">{{ $data->previous_qty }}
                            </span>
                        </span>
                    </p>
                </td>
                <td
                    style="width: 15%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    <p style="font-size: 12px; text-align: center; padding-top: 5px;">
                        <span style=" width: 100%; display: block; padding-bottom: 6px;">This Sheet
                            <span
                                style=" width: 100%; display: block; font-size: 14px; text-align: center; padding-top: 6px;">{{ $data->this_sheet }}
                            </span>
                        </span>
                    </p>
                </td>
                <td
                    style="width: 20%; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                    <p style="font-size: 12px; text-align: center; padding-top: 5px;">
                        <span style=" width: 100%; display: block; padding-bottom: 6px;">Total to Date
                            <span
                                style=" width: 100%; display: block; font-size: 14px; text-align: center; padding-top: 6px;">{{ $data->total_to_date }}
                            </span>
                        </span>
                    </p>
                </td>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td colspan="6"
                        style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center; padding-top: 4px; ">
                            <span style=" width: 100%; display: block; padding-bottom: 4px;">Cylinder Compressive
                                Strength Results </span>
                        </p>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <th
                        style="width: 8%; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">Specimen</p>
                    </th>
                    <th
                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">Break Date</p>
                    </th>
                    <th
                        style="width: 8%; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">Age</p>
                    </th>
                    <th colspan="2"
                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">Diameter 1 & 2</p>
                    </th>
                    <th
                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">Area</p>
                    </th>
                    <th
                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">Maximum Load</p>
                    </th>
                    <th
                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">PSI</p>
                    </th>
                    <th
                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">Break Type</p>
                    </th>
                    <th
                        style="border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                        <p style="font-size: 12px; text-align: center">% Aggregate Fractured</p>
                    </th>
                </tr>
                @if ($data->age_a)
                    <tr>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">1</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">
                                {{ \Carbon\Carbon::parse($data->break_date_a)->format('m/d/Y') }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->age_a }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_one_a }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_two_a }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->area_a }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->maximum_load_a }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->psi_a }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->break_type_a }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->aggregate_fractured_a }}</p>
                        </td>
                    </tr>
                @endif

                @if ($data->age_b)
                    <tr>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">2</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">
                                {{ \Carbon\Carbon::parse($data->break_date_b)->format('m/d/Y') }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->age_b }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_one_b }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_two_b }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->area_b }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->maximum_load_b }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->psi_b }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->break_type_b }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->aggregate_fractured_b }}</p>
                        </td>
                    </tr>
                @endif

                @if ($data->age_c)
                    <tr>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">3</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">
                                {{ \Carbon\Carbon::parse($data->break_date_c)->format('m/d/Y') }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->age_c }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_one_c }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_two_c }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->area_c }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->maximum_load_c }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->psi_c }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->break_type_c }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->aggregate_fractured_c }}</p>
                        </td>
                    </tr>
                @endif

                @if ($data->age_d)
                    <tr>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">4</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">
                                {{ \Carbon\Carbon::parse($data->break_date_d)->format('m/d/Y') }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->age_d }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_one_d }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_two_d }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->area_d }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->maximum_load_d }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->psi_d }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->break_type_d }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->aggregate_fractured_d }}</p>
                        </td>
                    </tr>
                @endif

                @if ($data->age_e)
                    <tr>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">5</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">
                                {{ \Carbon\Carbon::parse($data->break_date_e)->format('m/d/Y') }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->age_e }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_one_e }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_two_e }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->area_e }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->maximum_load_e }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->psi_e }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->break_type_e }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->aggregate_fractured_e }}</p>
                        </td>
                    </tr>
                @endif

                @if ($data->age_f)
                    <tr>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">6</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">
                                {{ \Carbon\Carbon::parse($data->break_date_f)->format('m/d/Y') }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->age_f }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_one_f }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_two_f }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->area_f }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->maximum_load_f }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->psi_f }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->break_type_f }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->aggregate_fractured_f }}</p>
                        </td>
                    </tr>
                @endif

                @if ($data->age_g)
                    <tr>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center; color: #23B0F1;">7</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">
                                {{ \Carbon\Carbon::parse($data->break_date_g)->format('m/d/Y') }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->age_g }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_one_g }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->diameter_two_g }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->area_g }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->maximum_load_g }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->psi_g }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->break_type_g }}</p>
                        </td>
                        <td
                            style="padding: 5px 0; border-top: 1px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: center;">{{ $data->aggregate_fractured_g }}</p>
                        </td>
                    </tr>
                @endif

            </table>
            <table style="width: 100%; border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td
                            style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: left; padding-bottom: 50px;"><span
                                    style="font-size: 8px; text-align: left;">Lab Comments:</span><br>
                                <span
                                    style="width: 100%; display: block; padding-bottom: 6px;">{{ $data->lab_comments }}</span>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 100%; border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td class="td-padding-left"
                            style=" width: 70%;  border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                    style="font-size: 8px; text-align: left;">Submitted By:
                                    {{ $data->submitted_by }}</span>
                            </p>
                        </td>
                        <td class="td-padding-left"
                            style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                    style="font-size: 8px; text-align: left;">Approved By:
                                    {{ $data->approved_by }}</span>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 100%; border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td class="td-padding-left"
                            style=" width: 60%; border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                    style="font-size: 8px; text-align: left;">Email: {{ $data->email }}</span>
                            </p>
                        </td>
                        <td
                            style=" border-top: 3px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-left: 1px solid #000;">
                            <p style="font-size: 12px; text-align: left; padding-bottom: 4px;"><span
                                    style="font-size: 8px; text-align: left;"></span>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
