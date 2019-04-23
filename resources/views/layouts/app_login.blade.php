<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>Tasklist Supero</title>
    <link href="{{ ('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ ('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ ('assets/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <style>
        html {
            background: #032f62;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <section id="wrapper">
        @yield('content')
    </section>
    <script src="{{ ('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ ('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ ('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ ('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ ('assets/js/waves.js') }}"></script>
    <script src="{{ ('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ ('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ ('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ ('assets/js/custom.min.js') }}"></script>
</body>

</html>