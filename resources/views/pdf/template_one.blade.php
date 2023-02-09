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
        padding: 50px;
      ">
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td>
                    <table style="width: 100%; border-collapse: collapse">
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                                    Client:
                                </h4>
                            </td>
                            <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_name }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                                    Company:
                                </h4>
                            </td>
                            <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_company_name }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                                    Email:
                                </h4>
                            </td>
                            <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_email }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                                    Phone:
                                </h4>
                            </td>
                            <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_phone }}</h4>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 10px 10px 20px 30px; text-align: center">
                    <div>
                        <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo" style="max-width: 100px" />
                        <h4 style="font-size: 16px; font-weight: 700; padding-top: 5px">
                            7290 South Fraser Street
                        </h4>
                        <h4 style="font-size: 16px; font-weight: 700; padding-top: 5px">
                            Centennial, CO 80112
                        </h4>
                        <h4 style="font-size: 16px; font-weight: 700; padding-top: 5px">
                            PHYSICAL PROPERTIES OF PLASTIC CONCRETE
                        </h4>
                    </div>
                </td>
                <td>
                    <table style="width: 100%; border-collapse: collapse">
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                                    Date:
                                </h4>
                            </td>
                            <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->created_at }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                                    Project No:
                                </h4>
                            </td>
                            <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->project_number }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                                    Project Name:
                                </h4>
                            </td>
                            <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->project_name }}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 6px">
                                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                                    Weather:
                                </h4>
                            </td>
                            <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                                <h4 style="font-size: 14px; font-weight: 400">{{ $data->weather }}</h4>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse; padding-top: 25px;">
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Specifications: Slump:</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                        {{ $data->specified_slump_min }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">
                       - {{ $data->specified_slump_max }}
                    </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Air Content</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->specified_air_min }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">- {{ $data->specified_air_max }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Strength: {{ $data->required_strength }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">Temperature: </h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $data->conc_temp_min }}</h4>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">- {{ $data->conc_temp_max }}</h4>
                </td>
            </tr>
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
                    <h5 style="font-size: 13px; font-weight: 500">Test<br>No.</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Truck No.</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Ticket No.</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Time Batched</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Time Sampled</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Time Unload</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Slump<br>(inches)</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Air Content %</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Unit Weight<br>(pcf)</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Relative Yield</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">W/C<br>Ratio</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Concr Temp(°F)</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">Air Temp(°F)</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 13px; font-weight: 500">CYL<br>Set ID<br>Number</h5>
                </th>
            </tr>
            @foreach ($data->template_one_infos as $template)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->test_no }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->truck_no }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->ticket_no }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->truck_dispatched }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->time_sample_taken }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->time_truck_finished }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->slump }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->air_cont }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->unit_wt }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->relative_yield }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->wc_ratio }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->conc_temp }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->air_temp }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->cylinder_set_no }}</h6>
                </td>
            </tr>
            @endforeach
        </table>
        <br />
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td style="padding: 5px 4px">
                    <h4 style="font-size: 14px; font-weight: 400">
                        <b> General Location: </b> {{ $data->general_location }}
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
                    <h3 style="font-size: 14px; font-weight: 700">Remarks</h3>
                </th>
            </tr>
            @foreach ($data->template_one_infos as $template)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $template->test_no }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h4 style="font-size: 14px; font-weight: 400">{{ $template->location }}</h4>
                </td>

                <td style="padding: 4px 6px; border: 1px solid lightgray; width: 90px">
                    <h4 style="font-size: 14px; font-weight: 400">Remark</h4>
                </td>
            </tr>
            @endforeach
        </table>
        {{-- <div class="page-break"></div> --}}
        <table style="width: 100%; border-collapse: collapse; padding-top: 25px;">
            <tr>
                <td style="padding: 5px 4px; background-color: #92d050">
                    <h4 style="font-size: 14px; font-weight: 600">Mix Data</h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 14px; font-weight: 500">Test No.</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 14px; font-weight: 500">Supplier</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 14px; font-weight: 500">Mix</h5>
                </th>
                <th style="padding: 5px 2px; border: 1px solid lightgray">
                    <h5 style="font-size: 14px; font-weight: 500">Design Strength(psi)</h5>
                </th>
            </tr>
            @foreach ($data->template_one_infos as $template)
            <tr>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">{{ $template->test_no }}</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">null</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">null</h6>
                </td>
                <td style="padding: 4px 6px; border: 1px solid lightgray">
                    <h6 style="font-size: 14px; font-weight: 400">null</h6>
                </td>
            </tr>
            @endforeach
        </table>
        <br />
        <table style="width: 100%; border-collapse: collapse">
            <tr style="vertical-align: top">
                <td style="padding: 4px 6px; width: 90px">
                    <h4 style="font-size: 14px; font-weight: 400">Comments:</h4>
                </td>
                <td style="padding: 4px 6px; width: 200px">
                    <ol style="padding: 0; margin: 0">
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Base
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Subbase
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Subgrade
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Improved Subgrade
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Surface
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Fill
                        </li>
                    </ol>
                </td>
                <td style="padding: 4px 6px">
                    <ol type="A" style="padding: 0; margin: 0">
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Test results comply with specifications
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Compaction percentage does not comply with specifications
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Retest of previous test
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Moisture in excess of specifications
                        </li>
                        <li style="font-size: 14px; font-weight: 400; padding-bottom: 5px">
                            Moisture below specifications
                        </li>
                    </ol>
                </td>
            </tr>
        </table>
        <br />
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
                    <h5>{{ $data->technician }}</h5>
                    <h4 style="
                font-size: 14px;
                font-weight: 400;
                border-top: 1px solid black;
                padding-top: 2px;
              ">
                        Field Representative
                    </h4>
                </td>
            </tr>
        </table>
        <table style="width: 100%; border-collapse: collapse">
            <tr>
                <td style="padding: 4px 6px">
                    <p style="font-size: 14px; font-weight: 400; text-align: center">
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