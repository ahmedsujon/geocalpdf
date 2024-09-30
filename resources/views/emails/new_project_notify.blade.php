<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Project Assign</title>
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
    <p>Hello</p>
    <p>You have been assigned to the project <strong>{{ $name }}</strong> located at
        <strong>{{ $location }}</strong>.
    </p>
    <p>Project Number: {{ $project_number }}</p>
    <br>
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
