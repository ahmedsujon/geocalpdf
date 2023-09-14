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
                        Client: {{ $data->client_name }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Email: {{ $data->client_email }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Phone: {{ $data->client_phone }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Company Name: {{ $data->client_company_name }}
                    </h4>
                </td>
                {{-- <td style="width: 40%; text-align: center;">
                    <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo"
                        style="max-width: 100px" />
                    <h4 style="font-size: 13px; font-weight: 700; padding-top: 5px">
                        {{ $data->office_address }}
                    </h4>
                </td> --}}
                <td style="width: 28%; text-align: left;">
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Date: {{ $data->created_at->format('Y-m-d') }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Project No: {{ $project->project_number }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Project Name: {{ $project->project_name }}
                    </h4>
                    <h4 style="font-size: 14px; font-weight: 400;">
                        Weather: {{ $data->weather }}
                    </h4>

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
