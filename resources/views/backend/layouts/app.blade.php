<!DOCTYPE html>
<html lang="en" data-sidebar-color="light" data-topbar-color="light" data-sidebar-view="default">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">

    <!-- Head Js -->
    <script src="{{ asset('assets/js/head.js') }}"></script>
</head>

<body>

    <div class="app-wrapper">

         <!-- Sidebar -->
        @include('backend.layouts.sidebar')

        <!-- Start Page Content here -->
        <div class="app-content">

            <!-- Top Bar -->
            {{-- @include('backend.layouts.topbar', ['title' => 'Dashboard']) --}}

            @yield('content')

            @include('backend.layouts.footer')

        </div>
        <!-- End Page content -->

        <!-- Right Menu -->
        @include('backend.layouts.right-menu')

    </div>

    <!-- Plugin Js -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/preline/preline.js') }}"></script>

    <!-- App Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Translate Js -->
    <script src="{{ asset('assets/js/translate.js') }}"></script>

    <!-- Apexcharts js -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Knob charts js -->
    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Morris Js-->
    <script src="assets/libs/morris.js/morris.min.js"></script>

    <!-- Raphael Js-->
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard Project Page js -->
    <script src="assets/js/pages/dashboard.js"></script>

    <!-- Script Js (Umar Custom JS Code) -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
