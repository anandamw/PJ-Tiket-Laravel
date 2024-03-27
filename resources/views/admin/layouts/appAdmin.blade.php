<!DOCTYPE html>
<html lang="zxx">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/apexcharts.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/prism.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/rangeslider.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/sweetalert.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/quill.snow.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">

    <link rel="icon" type="image/png" href="{{ asset('') }}assets/images/favicon.png">

    <title>Dasboard</title>
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">C</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">N</span>
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">M</span>
                <span class="d-inline-block">A</span>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')

    @include('admin.layouts.side')


    @yield('content')



    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('') }}assets/js/dragdrop.js"></script>
    <script src="{{ asset('') }}assets/js/rangeslider.min.js"></script>
    <script src="{{ asset('') }}assets/js/sweetalert.js"></script>
    <script src="{{ asset('') }}assets/js/quill.min.js"></script>
    <script src="{{ asset('') }}assets/js/data-table.js"></script>
    <script src="{{ asset('') }}assets/js/prism.js"></script>
    <script src="{{ asset('') }}assets/js/clipboard.min.js"></script>
    <script src="{{ asset('') }}assets/js/feather.min.js"></script>
    <script src="{{ asset('') }}assets/js/simplebar.min.js"></script>
    <script src="{{ asset('') }}assets/js/apexcharts.min.js"></script>
    <script src="{{ asset('') }}assets/js/custom/lms-courses.js"></script>
    <script src="{{ asset('') }}assets/js/custom/custom.js"></script>
</body>

</html>
