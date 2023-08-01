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
              <td style="padding: 4px 0px;">
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
                <h4 style="font-size: 14px; font-weight: 400">{{ $data->created_at->format('Y-m-d') }}</h4>
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
              <td style="padding: 4px 0px;">
                <h4 style="font-size: 14px; font-weight: 400">{{ $data->weather }}</h4>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <th style="padding: 10px 6px 8px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">COLORADO DEPARTMENT OF TRANSPORTATION
          </h3>
          <h2>NUCLEAR DENSITY TEST OF HMA CP 81</h2>
        </th>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
          <h4 style="font-size: 14px; font-weight: 400">Project No.</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Region</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Contract ID</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Project Location</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Form #43 No.</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Grading</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->project_number }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->region }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->contract_id }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->project_location }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->form_no }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->grading }}</h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Tester Name</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">Company Name or CDOT</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">Gauge ID</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ user($data->taster_id)->name }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_company_name }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->gauge_id }}</h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 13%;">
          <h4 style="font-size: 14px; font-weight: 400">Sample ID</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->sample_id }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">4A</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">4B</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">4C</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">4D</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">4E</h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse;">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">Test#</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_id }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">IA#</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->ia_id }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_e }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_f }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_g }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_h }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_i }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_data_j }}</h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse;">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%;">
          <h4 style="font-size: 14px; font-weight: 400">Sample ID (For IAT)</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->sample_id_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->sample_id_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->sample_id_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->sample_id_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->sample_id_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 13%;">
          <h4 style="font-size: 14px; font-weight: 400">Date of Test</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_date_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_date_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_date_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_date_d}}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_date_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 13%;">
          <h4 style="font-size: 14px; font-weight: 400">Standard Count</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->standard_count_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->standard_count_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->standard_count_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->standard_count_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->standard_count_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 13%;">
          <h4 style="font-size: 14px; font-weight: 400">Ave. Daily Rice</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->daily_rice_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->daily_rice_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->daily_rice_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->daily_rice_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->daily_rice_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 13%;">
          <h4 style="font-size: 14px; font-weight: 400">Station</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->station_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->station_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->station_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->station_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->station_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 13%;">
          <h4 style="font-size: 14px; font-weight: 400">Offset</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->offset_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->offset_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->offset_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->offset_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->offset_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 13%;">
          <h4 style="font-size: 14px; font-weight: 400">Course/Lift</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->course_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->course_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->course_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->course_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->course_e }}</h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Backscatter 4,</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">Wet Density #1</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_a_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_a_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_a_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_a_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_a_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">1 minute readings</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">Wet Density #2</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_b_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_b_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_b_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_b_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_b_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Turn Gauge</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">Wet Density #3</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_c_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_c_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_c_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_c_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_c_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">180°</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">Wet Density #4</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_d_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_d_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_d_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_d_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_density_d_e }}</h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Sum of Wet Densities</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_densities_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_densities_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_densities_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_densities_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 23%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->wet_densities_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Average Wet Density</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->average_wet_density_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->average_wet_density_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->average_wet_density_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->average_wet_density_d}}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->average_wet_density_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Correction Factor (#469) PCF</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->correction_factor_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->correction_factor_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->correction_factor_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->correction_factor_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->correction_factor_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Adjusted Wet Density</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->adjusted_wet_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->adjusted_wet_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->adjusted_wet_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->adjusted_wet_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->adjusted_wet_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Ave. Daily Rice X 62.4 (PCF)</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->ave_daily_rice_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->ave_daily_rice_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->ave_daily_rice_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->ave_daily_rice_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->ave_daily_rice_e }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">% Compaction</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 12%;">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_a }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_b }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_c }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_d }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 25%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_e }}</h4>
        </td>
      </tr>
    </table>
    <div style="page-break-before:always"></div>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%;">
          <h4 style="font-size: 14px; font-weight: 400">Tested by</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">Sampled by</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">Company Name or CDOT</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ user($data->created_by)->name }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->sampled_by }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_company_name }}</h4>
        </td>
      </tr>
    </table>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 30%; height: 150px;">
          <h4 style="font-size: 14px; font-weight: 400">Place stampe here:</h4>
        </td>
      </tr>
    </table>

    <table style="width: 100%; border-collapse: collapse; padding-top: 20px;">
      <tr>
        <td style="padding: 4px 6px">
          <p style="font-size: 14px; font-weight: 400; text-align: center">
            These test results apply only to the specific samples/location/materials noted and may not be representative
            of other areas or similar materials. This report may not be reproduced, except in full, without written
            authorization by Geocal, Inc.
          </p>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>