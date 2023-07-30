<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Geocal PDF" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="https://geocalpdf.com/assets/images/favicon.png">

    <!-- App css -->
    <link href="https://geocalpdf.com/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://geocalpdf.com/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://geocalpdf.com/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="https://geocalpdf.com/assets/plugins/select/selectr.min.css" rel="stylesheet" type="text/css" />
    <!-- Select2 -->
    <link rel="stylesheet" href="https://geocalpdf.com/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="https://geocalpdf.com/assets/css/select2-bootstrap-5-theme.min.css" />
    <link href="https://geocalpdf.com/assets/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://geocalpdf.com/assets/css/select2-bootstrap-theme.min.css">

    {{-- Toaster --}}
    <link rel="stylesheet" href="https://geocalpdf.com/assets/css/toastr.min.css" />

    @stack('styles')
    @livewireStyles
</head>

<body id="body" class="dark-sidebar" data-editor="DecoupledDocumentEditor" data-revision-history="false">

    @livewire('layouts.inc.sidebar')
    @livewire('layouts.inc.navbar')
    <div class="page-wrapper">
        <div class="page-content-tab">

            {{ $slot }}

            @livewire('layouts.inc.footer')
        </div>
    </div>

    <!-- Javascript  -->
    <script src="https://geocalpdf.com/assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://geocalpdf.com/assets/plugins/chartjs/chart.js"></script>
    <script src="https://geocalpdf.com/assets/plugins/lightpicker/litepicker.js"></script>
    <script src="https://geocalpdf.com/assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="https://geocalpdf.com/assets/pages/projects-index.init.js"></script>
    <script src="https://geocalpdf.com/assets/plugins/select/selectr.min.js"></script>
    <!-- Select2 -->
    <script src="https://geocalpdf.com/assets/plugins/select2/js/select2.full.min.js"></script>

    <script src="https://geocalpdf.com/assets/js/select2.min.js"></script>
    {{-- sweet alert 2 --}}
    <script src="https://geocalpdf.com/assets/js/sweetalert2.js"></script>

    {{-- Toaster --}}
    <script src="https://geocalpdf.com/assets/js/toastr.min.js"></script>

    <!-- App js -->
    <script src="https://geocalpdf.com/assets/js/app.js"></script>

    <script>
        $(document).ready(function(){
            toastr.options = {
                "progressBar": true,
                "positionClass": "toast-bottom-left"
            };

            $('[data-toggle="tooltip"]').tooltip();
        });

        window.addEventListener('success', event => {
            toastr.success(event.detail.message);
        });
        window.addEventListener('warning', event => {
            toastr.warning(event.detail.message);
        });
        window.addEventListener('error', event => {
            toastr.error(event.detail.message);
        });
        
        @if(Session::has('success'))
            toastr.options =
                {
                    "progressBar" : true,
                    "positionClass": "toast-bottom-left"
                }
                toastr.success("{{ session('success");
        @endif


        //SWL
        window.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete !'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed')
                }
            })
        });

    </script>



    @stack('scripts')

    @livewireScripts
</body>

</html>