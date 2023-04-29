<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Title</title>
</head>
<body>
    <h1>{{ $subject }}</h1>

    @if ($field_density_commercial_id)
        <a href="{{ route('invoice.generate',['id'=>$field_density_commercial_id]) }}">Download</a>
    @endif
</body>
</html>
