<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/animate.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/flaticon.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/odometer.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/nice-select.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/jquery.animatedheadline.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets_user/css/main.css" />

    <link rel="shortcut icon" href="{{ asset('') }}assets_user/images/favicon.png" type="image/x-icon" />

    <title>Home </title>
</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->


    @include('user.layouts.header')





    @yield('content')








    <script src="{{ asset('') }}assets_user/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/plugins.js"></script>
    <script src="{{ asset('') }}assets_user/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/heandline.js"></script>
    <script src="{{ asset('') }}assets_user/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/magnific-popup.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/wow.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/countdown.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/odometer.min.js"></script>
    <script src="{{ asset('') }}assets_user/js/viewport.jquery.js"></script>
    <script src="{{ asset('') }}assets_user/js/nice-select.js"></script>
    <script src="{{ asset('') }}assets_user/js/main.js"></script>
</body>

</html>
