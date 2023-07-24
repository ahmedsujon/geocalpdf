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
              <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                <h4 style="font-size: 14px; font-weight: 400">{{ $data->client_company_name }}</h4>
              </td>
            </tr>
          </table>
        </td>
        <td style="padding: 0px 5px 20px 5px; text-align: center;">
          <div>
            <img src="https://i0.wp.com/geocal.us/wp-content/uploads/2019/05/logo-new.png" alt="logo" style="max-width: 100px" />
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
              <td style="padding: 4px 0px; border-bottom: 1px solid lightgray">
                <h4 style="font-size: 14px; font-weight: 400">{{ $data->weather }}</h4>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

    <h4 style="text-align: center; padding-top: 10px;">Asphalt Field Density by Nuclear Method - Commercial</h4>
    <table style="width: 100%; border-collapse: collapse; padding-top: 10px;">
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
          <h4 style="font-size: 14px; font-weight: 400">Gauge SN:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->serial_no }}</h4>
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
            {{ $data->test_method }}
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
          <h4 style="font-size: 14px; font-weight: 400">Gauge Make:</h4>
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
          <h4 style="font-size: 14px; font-weight: 400">Test Mode:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->test_mode }}</h4>
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
          <h4 style="font-size: 14px; font-weight: 400">Compaction Requirements:</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $data->compaction_requirement_min }} to {{ $data->compaction_requirement_max }}
          </h4>
        </td>
      </tr>

    </table>
    <br />
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <td style="padding: 5px 4px; background-color: #92d050">
          <h4 style="font-size: 14px; font-weight: 600">
            MIX INFORMATION																												
          </h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Mix ID</h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">
            Supplier
          </h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Plant</h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Mix Type	</h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Max Theoretical Density, (lb/ft3)</h3>
        </th>
        <th style="padding: 20px 6px 5px 6px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Max Theoretical SpecificGravity</h3>
        </th>
      </tr>
      @foreach ($data->proctor_infos as $proctor_info)
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->mix_id }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">
            {{ $proctor_info->supplier }}
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->plant }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->mix_type }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->max_theoretical_density }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $proctor_info->max_theoretical_specific_gravity }}</h4>
        </td>
      </tr>
      @endforeach
    </table>
    <br />
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <td style="padding: 5px 4px; background-color: #92d050">
          <h4 style="font-size: 14px; font-weight: 600">TEST RESULTS</h4>
        </td>
      </tr>
    </table>
    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Test No.</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Mix ID</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Test Count Period</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Material (Base, Surface, Bit Agg Mix)</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Lift</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Layer Thickness (in)</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Maximum Theo. Density (pcf)</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">In Situ Density (lb/ft3)</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">% Relative Compaction</h3>
        </th>
        <th style="padding: 5px 2px; border: 1px solid lightgray">
          <h3 style="font-size: 14px; font-weight: 700">Pass / Fail</h3>
        </th>
      </tr>
      @foreach ($data->test_results as $test_result)
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->test_no }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">
            {{ $test_result->result_mix_id }}
          </h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->count_period }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->material }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->lift }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->layer_thickness }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->max_theory_density }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->field_wet_density }}</h4>
        </td>
        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center; @if($data->compaction_requirement_max < $test_result->relative_compaction) color: red; @endif">{{ $test_result->relative_compaction }}</h4>
        </td>


        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400; text-align:center;">{{ $test_result->pass_fail }}</h4>
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
      </tr>
      @foreach ($data->test_results as $test_result)
      <tr>
        <td style="padding: 4px 6px; border: 1px solid lightgray; width: 50px">
          <h4 style="font-size: 14px; font-weight: 400">{{ $test_result->test_no }}</h4>
        </td>

        <td style="padding: 4px 6px; border: 1px solid lightgray">
          <h4 style="font-size: 14px; font-weight: 400">{{ $test_result->location }}</h4>
        </td>
      </tr>
      @endforeach
    </table>
    <br />

    <table style="width: 100%; border-collapse: collapse">
      <tr>
        <td>
          <h5>{{ $data->report_status }}</h5>
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
          <h5>{{ user($data->user_id)->name }}</h5>
          <h4 style="
                font-size: 14px;
                font-weight: 400;
                border-top: 1px solid black;
                padding-top: 2px;
                width: 160px;
              ">
            Materials Technician:
          </h4>
        </td>
        <td>
          <h5>{{ user($data->created_by)->name }}</h5>
          <h4 style="
                font-size: 14px;
                font-weight: 400;
                border-top: 1px solid black;
                padding-top: 2px;
              ">
            Reviewed By
          </h4>
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