<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Tasklist Supero</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ ('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ ('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ ('assets/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Inicia Wrapper Principal -->
    <!-- ============================================================== -->
    <section id="wrapper">
        @yield('content')
    </section>
    <!-- ============================================================== -->
    <!-- Finaliza Wrapper Principal -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Jquery -->
    <!-- ============================================================== -->
    <script src="{{ ('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ ('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ ('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ ('assets/js/jquery.slimscroll.js') }}"></script>
    <!-- Efeitos Wave -->
    <script src="{{ ('assets/js/waves.js') }}"></script>
    <!-- sidebar Menu -->
    <script src="{{ ('assets/js/sidebarmenu.js') }}"></script>
    <!-- stickey kit -->
    <script src="{{ ('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ ('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ ('assets/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ ('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

</html>