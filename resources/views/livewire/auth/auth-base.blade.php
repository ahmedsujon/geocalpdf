<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>GeocalPDF - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Geocal PDF" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    @livewireStyles
</head>

<body id="body" class="auth-page"
    style="background-image: url('{{ asset('assets/images/login-bg.png') }}'); background-size: cover; background-position: center center;">

    {{ $slot }}

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @livewireScripts
</body>

</html>
