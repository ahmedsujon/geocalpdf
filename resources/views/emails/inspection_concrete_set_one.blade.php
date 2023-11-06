<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Document management</title>
    <style>
        .button {
            border: none;
            color: white;
            padding: 12px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
        }

        .button1 {
            border: 2px solid #111111;
            color: #111111;
        }
    </style>
</head>

<body>
    <h1>Files Information</h1>
    <p>Report Of Field Inspection Of Concrete – Single Mix (Data Set 1) has been created.</p>
    <p>Please check the attachment report for your next action.</p> <br>

    @if ($id)
        <a class="button button1" href="{{ route('inspection.concrete.generate.one', ['id' => $id]) }}">Concrete Test
            Report</a>
    @endif
    <br>
    @if ($permission == 0)
        @if ($id)
            <a class="button button1" href="{{ route('concrete.field.report.generate', ['id' => $project_id]) }}">Concrete
                Field Report</a>
        @endif
    @endif

    <br><br>
    <p>Thank you...!!</p>
    <p>{{ $name }}</p>
    @if ($role_id = 1)
        <p>Super Administrator</p>
    @elseif($role_id = 2)
        {
        <p>Project Engineer</p>
        }
    @elseif($role_id = 3)
        {
        <p>Clerk</p>
        }
    @elseif($role_id = 4)
        {
        <p>Supervisor</p>
        }
        <p>Filed Technician</p>
    @endif

</body>

</html>
