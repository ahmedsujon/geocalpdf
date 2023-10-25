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

                    <h4 style="font-size: 13px; font-weight: 400;">
                        Client: {{ $data->client_name }}
                    </h4>
                    <h4 style="font-size: 13px; font-weight: 400;">
                        Email: {{ $data->client_email }}
                    </h4>
                    <h4 style="font-size: 13px; font-weight: 400;">
                        Phone: {{ $data->client_phone }}
                    </h4>
                    <h4 style="font-size: 13px; font-weight: 400;">
                        Company Name: {{ $data->client_company_name }}
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
                    <h4 style="font-size: 13px; font-weight: 400;">
                        Date: {{ $data->created_at->format('m/d/Y') }}
                    </h4>
                    <h4 style="font-size: 13px; font-weight: 400;">
                        Project No: {{ $data->project_number }}
                    </h4>
                    <h4 style="font-size: 13px; font-weight: 400;">
                        Project Name: {{ $data->project_name }}
                    </h4>
                    <h4 style="font-size: 13px; font-weight: 400;">
                        Weather: {{ $data->weather }}
                    </h4>

                </td>
            </tr>
        </table>

        <table style="width: 100%; border-collapse: collapse; padding-top: 3px;">
            <tr>
                <td style="padding: 1px;">
                    <h3 style="font-size: 14px; font-weight: 500; text-align: center">PHYSICAL PROPERTIES OF PLASTIC CONCRETE</h3>
                </td>
            </tr>
        </table>

        <table style="width: 100%; border-collapse: collapse; padding-top: 5px;">
            <tr>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">Specifications: Slump:</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->specified_slump_min }}
                    </h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">
                        - {{ $data->specified_slump_max }}
                    </h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">Air Content</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->specified_air_min }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">- {{ $data->specified_air_max }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">Strength: {{ $data->required_strength }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">Temperature: </h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->conc_temp_min }}</h4>
                </td>
                <td style="padding: 1px; border: 1px solid #000">
                    <h4 style="font-size: 14px; font-weight: 400">- {{ $data->conc_temp_max }}</h4>
                </td>
            </tr>
        </table>


        <div
            style="margin-top: 5px; border-top: 2px solid #000; border-right: 2px solid #000; border-bottom: 1px solid #000; border-left: 2px solid #000;">
            <table style="width: 100%; border-collapse: collapse; border: none">
                <caption
                    style="text-align:left; font-size: 14px; text-transform: uppercase; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 0px solid #000; border-left: 1px solid #000;">
                    Test Results</caption>
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Test<br>No.</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Truck No.</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Ticket No.</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Time Batched</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Time Sampled</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Time Unload</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Slump<br>(inches)</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Air Content %</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Unit Weight<br>(pcf)</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Relative Yield</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">W/C<br>Ratio</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Concr Temp(°F)</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">Air Temp(°F)</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 13px; font-weight: 500; text-align: center">CYL<br>Set ID<br>Number
                        </h5>
                        </th>
                </tr>
                @if ($data->test_no_a)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->test_no_a }}</h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->truck_no_a }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->ticket_no_a }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->truck_dispatched_a }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->time_sample_taken_a }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->time_truck_finished_a }}</h6>
                    </td>
                    @if ($data->slump_a < $data->specified_slump_min || $data->slump_a > $data->specified_slump_max)
                        <td style="padding: 1px; border: 1px solid #000">
                            <h6 style="font-size: 14px; font-weight: 400; text-align: center; color:red;">
                                {{ $data->slump_a }}</h6>
                        </td>
                        @else
                        <td style="padding: 1px; border: 1px solid #000">
                            <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->slump_a }}
                            </h6>
                        </td>
                        @endif
                        @if ($data->air_cont_a < $data->specified_air_min || $data->air_cont_a >
                            $data->specified_air_max)
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center; color:red;">
                                    {{ $data->air_cont_a }}</h6>
                            </td>
                            @else
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->air_cont_a }}
                                </h6>
                            </td>
                            @endif
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->unit_wt_a }}</h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->relative_yield_a }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->wc_ratio_a }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->conc_temp_a }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->air_temp_a }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->cylinder_set_no_a }}
                                </h6>
                            </td>
                </tr>
                @endif
                @if ($data->test_no_b)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->test_no_b }}</h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->truck_no_b }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->ticket_no_b }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->truck_dispatched_b }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->time_sample_taken_b }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->time_truck_finished_b }}</h6>
                    </td>
                    @if ($data->slump_b < $data->specified_slump_min || $data->slump_b > $data->specified_slump_max)
                        <td style="padding: 1px; border: 1px solid #000">
                            <h6 style="font-size: 14px; font-weight: 400; text-align: center; color:red;">
                                {{ $data->slump_b }}</h6>
                        </td>
                        @else
                        <td style="padding: 1px; border: 1px solid #000">
                            <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->slump_a }}
                            </h6>
                        </td>
                        @endif
                        @if ($data->air_cont_b < $data->specified_air_min || $data->air_cont_b >
                            $data->specified_air_max)
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center; color:red;">
                                    {{ $data->air_cont_b }}</h6>
                            </td>
                            @else
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->air_cont_b }}
                                </h6>
                            </td>
                            @endif
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->unit_wt_b }}</h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->relative_yield_b }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->wc_ratio_b }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->conc_temp_b }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->air_temp_b }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->cylinder_set_no_b }}
                                </h6>
                            </td>
                </tr>
                @endif
                @if ($data->test_no_c)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->test_no_c }}</h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->truck_no_c }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->ticket_no_c }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->truck_dispatched_c }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->time_sample_taken_c }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->time_truck_finished_c }}</h6>
                    </td>
                    @if ($data->slump_c < $data->specified_slump_min || $data->slump_c > $data->specified_slump_max)
                        <td style="padding: 1px; border: 1px solid #000">
                            <h6 style="font-size: 14px; font-weight: 400; text-align: center; color:red;">
                                {{ $data->slump_c }}</h6>
                        </td>
                        @else
                        <td style="padding: 1px; border: 1px solid #000">
                            <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->slump_c }}
                            </h6>
                        </td>
                        @endif
                        @if ($data->air_cont_c < $data->specified_air_min || $data->air_cont_c >
                            $data->specified_air_max)
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center; color:red;">
                                    {{ $data->air_cont_c }}</h6>
                            </td>
                            @else
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->air_cont_c }}
                                </h6>
                            </td>
                            @endif
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->unit_wt_c }}</h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->relative_yield_c }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->wc_ratio_c }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->conc_temp_c }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->air_temp_c }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->cylinder_set_no_c }}
                                </h6>
                            </td>
                </tr>
                @endif
                @if ($data->test_no_d)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->test_no_d }}</h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->truck_no_d }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->ticket_no_d }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->truck_dispatched_d }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->time_sample_taken_d }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->time_truck_finished_d }}</h6>
                    </td>
                    @if ($data->slump_d < $data->specified_slump_min || $data->slump_d > $data->specified_slump_max)
                        <td style="padding: 1px; border: 1px solid #000">
                            <h6 style="font-size: 14px; font-weight: 400; text-align: center; color:red;">
                                {{ $data->slump_d }}</h6>
                        </td>
                        @else
                        <td style="padding: 1px; border: 1px solid #000">
                            <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                {{ $data->slump_d }}
                            </h6>
                        </td>
                        @endif
                        @if ($data->air_cont_d < $data->specified_air_min || $data->air_cont_d >
                            $data->specified_air_max)
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center; color:red;">
                                    {{ $data->air_cont_d }}</h6>
                            </td>
                            @else
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->air_cont_d }}
                                </h6>
                            </td>
                            @endif
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->unit_wt_d }}</h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->relative_yield_d }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->wc_ratio_d }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->conc_temp_d }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->air_temp_d }}
                                </h6>
                            </td>
                            <td style="padding: 1px; border: 1px solid #000">
                                <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                                    {{ $data->cylinder_set_no_d }}
                                </h6>
                            </td>
                </tr>
                @endif

            </table>
        </div>


        <div
            style="padding-top: 5px; padding-bottom: 15px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td>
                        <h4 style="font-size: 14px; font-weight: 400">
                            <b> General Location: </b> {{ $data->general_location }}
                        </h4>
                    </td>
                </tr>
            </table>
        </div>



        <div
            style="padding-top: 5px; border-top: 2px solid #000; border-right: 2px solid #000; border-bottom: 0px solid #000; border-left: 2px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center;">Test No.</h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center;">Location</h3>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h3 style="font-size: 14px; font-weight: 700; text-align: center;">Remarks</h3>
                        </th>
                </tr>
                @if ($data->test_no_a)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->test_no_a }}
                        </h4>
                    </td>

                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->location_a }}
                        </h4>
                    </td>

                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->remark }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($data->test_no_b)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->test_no_b }}
                        </h4>
                    </td>

                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->location_b }}
                        </h4>
                    </td>

                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->remark }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($data->test_no_c)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->test_no_c }}
                        </h4>
                    </td>

                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->location_c }}
                        </h4>
                    </td>

                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->remark }}
                        </h4>
                    </td>
                </tr>
                @endif
                @if ($data->test_no_d)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->test_no_d }}
                        </h4>
                    </td>

                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->location_d }}
                        </h4>
                    </td>

                    <td style="padding: 1px; border: 1px solid #000">
                        <h4 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->remark }}
                        </h4>
                    </td>
                </tr>
                @endif

            </table>
        </div>


        <div
            style="padding-top: 5px; border-top: 2px solid #000; border-right: 2px solid #000; border-bottom: 0px solid #000; border-left: 2px solid #000;">
            <table style="width: 100%; border-collapse: collapse;">
                <caption
                    style="text-align:left; font-size: 14px; text-transform: uppercase; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 1px solid #000; border-bottom: 2px solid #000; border-left: 1px solid #000;">
                    Mix Data</caption>
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 14px; font-weight: 500; text-align: center">Test No.</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 14px; font-weight: 500; text-align: center">Supplier</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 14px; font-weight: 500; text-align: center">Mix</h5>
                        </th>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h5 style="font-size: 14px; font-weight: 500; text-align: center">Design Strength(psi)</h5>
                        </th>
                </tr>
                @if ($data->test_no_a)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->test_no_a }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->mix_supplier }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->mix_id }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->design_strength }}</h6>
                    </td>
                </tr>
                @endif
                @if ($data->test_no_b)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->test_no_b }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->mix_supplier }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">{{ $data->mix_id }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->design_strength }}</h6>
                    </td>
                </tr>
                @endif
                @if ($data->test_no_c)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->test_no_c }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->mix_supplier }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->mix_id }}</h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->design_strength }}</h6>
                    </td>
                </tr>
                @endif
                @if ($data->test_no_d)
                <tr>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->test_no_d }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->mix_supplier }}
                        </h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->mix_id }}</h6>
                    </td>
                    <td style="padding: 1px; border: 1px solid #000">
                        <h6 style="font-size: 14px; font-weight: 400; text-align: center;">
                            {{ $data->design_strength }}</h6>
                    </td>
                </tr>
                @endif
            </table>
        </div>





        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 1px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse; padding: 10px 5px 20px 5px;">
                <caption
                    style="text-align:left; font-size: 14px; text-transform: uppercase; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 0px solid #000; border-bottom: 2px solid #000; border-left: 0px solid #000;">
                    Remark</caption>
                <tr>
                    <td>{{ $data->remark }}</td>
                </tr>
            </table>
        </div>

        <div
            style="padding-top: 5px; border-top: 1px solid #000; border-right: 3px solid #000; border-bottom: 0px solid #000; border-left: 3px solid #000;">
            <table style="width: 100%; border-collapse: collapse; padding: 5px;">
                <caption
                    style="text-align:left; font-size: 14px; text-transform: uppercase; font-weight: 500; padding: 0; letter-spacing: -1px; background-color: #689A3D; border-top: 2px solid #000; border-right: 0px solid #000; border-bottom: 2px solid #000; border-left: 0px solid #000;">
                    Notes:</caption>

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
                <td
                    style="width: 28%; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 20px;">
                    <h6 style="padding-bottom: 4px; font-weight: normal; 
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

                    <h6 style="padding-bottom: 4px; font-weight: normal; 
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
                    <h6 style="
            font-size: 14px;
            font-weight: normal;
            border-top: 1px solid black;
            padding-top: 2px;
            width: 160px;
          ">
                        Field Observer:
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



        <table style="width: 100%; border-collapse: collapse; padding-top: 10px;">
            <tr>
                <td>
                    <p style="font-size: 12px; font-style: italic; font-weight: 400; text-align: left">
                        These test results apply only to the specific samples/location/materials noted and may not be
                        representative of other areas or similar materials. This report may not be reproduced, except in
                        full, without written authorization by Geocal, Inc.
                    </p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>