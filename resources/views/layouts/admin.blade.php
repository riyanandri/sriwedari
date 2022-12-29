<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bibit Sriwedari') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendor/ionicons201/css/ionicons.min.css') }}"> --}}

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/owl.carousel/dist/assets/owl.theme.default.min.css') }}">

    @stack('css')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin//css/components.css') }}">
    @livewireStyles
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            @include('layouts.admin.navbar')
            @include('layouts.admin.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            @include('layouts.admin.footer')
        </div>
    </div>

    <link href="{{ asset('assets/js/bootstrap.bundle.min.js') }}">
    <link href="{{ asset('assets/js/jquery-3.6.0.min.js') }}">

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/stisla.js') }}"></script>

    @stack('js')

    <!-- JS Libraies -->
    <script src="{{ asset('admin/vendor/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/vendor/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/js/page/modules-ion-icons.js') }}"></script> --}}

    <!-- Template JS File -->
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/js/page/index.js') }}"></script>
    @livewireScripts
</body>
</html>
