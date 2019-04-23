<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Darlei Fernando Zillmer">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/clockpicker/dist/jquery-clockpicker.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<body class="fix-header card-no-border logo-center">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        @include('layouts.menu')
        @yield('content')
    </div>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('assets/js/waves.js')}}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js')}}"></script>
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
    <script>
    function aviso(){
        alert('Indispinível na beta!');
    }
    </script>
</body>
</html>
