<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Document management</title>
</head>
<body>
    <h1>{{ $subject }}</h1>
    @if ($id)
        <a href="{{ route('cdot.form.generate',['id'=>$id]) }}">Download</a>
    @endif
</body>
</html>
