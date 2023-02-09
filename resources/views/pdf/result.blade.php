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
            <tr>
              <td style="padding: 4px 6px">
                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                  Company Name:
                </h4>
              </td>
              <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_company_name }}</h4>
              </td>
            </tr>
          </table>
        </td>
        <td style="padding: 10px 10px 20px 30px; text-align: center">
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
                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                  Date:
                </h4>
              </td>
              <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                <h4 style="font-size: 14px; font-weight: 400">{{ $data->created_at->format('Y-m-d') }}</h4>
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
                <h4 style="font-size: 14px; font-weight: 400; text-align: right"></h4>
              </td>
              <td style="padding: 4px 6px; border-bottom: 1px solid lightgray">
                <h4 style="font-size: 14px; font-weight: 400"></h4>
              </td>
            </tr>
            <tr>
              <td style="padding: 4px 6px">
                <h4 style="font-size: 14px; font-weight: 400; text-align: right">
                  Weather
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
        <td style="padding: 5px 4px; background-color: #92d050">
          <h4 style="font-size: 14px; font-weight: 600">TESTING DETAILS</h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Tested by:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">
            {{ $data->technician }}
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Test Mode: </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_mode }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Date Tested:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">
            {{ $data->date }}
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Standard Density Count:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->density_count }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Test Method:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">
            {{ $data->main_test_method }}
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Moisture Standard Count:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->moisture_count }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Gauge Marke:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">
            @if ($data->troxler=='Yes')
            Troxler
            @else
            Other
            @endif
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Min. Compaction Requirements</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_requirement }}</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Gauge Model:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">
            {{ $data->model }}
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">Moisture Requirements:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">-{{ $data->requirment_minus }} to {{ $data->requirment_plus }}
          </h4>
        </td>
      </tr>

    </table>
    <br />
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <td style="padding: 5px 4px; background-color: #92d050">
          <h4 style="font-size: 14px; font-weight: 600">
            Proctor Information
          </h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Proctor ID</h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">
            Material Description
          </h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Method</h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">MDD (pcf)</h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">OMC %</h3>
        </th>
      </tr>
      @foreach ($data->proctor_infos as $proctor_info)
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->proctor_id }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">
            {{ $proctor_info->description }}
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->test_method }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->max_dry_density }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->optimum_moisture }}</h4>
        </td>
      </tr>
      @endforeach
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
          <h3 style="font-size: 14px; font-weight: 700">Test No.</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Proctor ID</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Probe Depth (in)</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Wet Density (pcf)</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Dry Density, pcf</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">
            Moisture Content %
          </h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Compaction %</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Compaction Spec</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Results</h3>
        </th>
      </tr>
      @foreach ($data->test_results as $test_result)
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->test_num }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
            {{ $test_result->result_proctor_id }}
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->test_dept }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->wet_density }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->dry_density }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->moisture_content }}</h4>
        </td>
        
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center; @if($data->compaction_requirement > $test_result->percent_comp) color: red; @endif">{{ $test_result->percent_comp }}</h4>
        </td>

        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $data->compaction_requirement }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->comments }}</h4>
        </td>
      </tr>
      @endforeach
    </table>
    <table style="width: 100%; border-collapse: collapse; padding-top: 30px;">
      <tr>
        <td style="padding: 5px 4px; background-color: #92d050">
          <h4 style="font-size: 14px; font-weight: 600">Location</h4>
        </td>
      </tr>
      <tr>
        <td style="padding: 5px 4px">
          <h4 style="font-size: 14px; font-weight: 400">
            <b> General Location: </b> {{ $data->general_info }}
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
          <h3 style="font-size: 14px; font-weight: 700">Material</h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Elev/Lift of Test</h3>
        </th>
      </tr>
      @foreach ($data->test_results as $test_result)
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
          <h4 style="font-size: 14px; font-weight: 400">{{ $test_result->test_num }}</h4>
        </td>

        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $test_result->location }}</h4>
        </td>
        
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $test_result->material }}</h4>
        </td>

        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 90px">
          <h4 style="font-size: 14px; font-weight: 400">{{ $test_result->elev_test }}</h4>
        </td>
      </tr>
      @endforeach
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