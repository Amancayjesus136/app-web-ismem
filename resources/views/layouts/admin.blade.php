<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Ismem</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link href="{{ asset('assets3/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets3/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets3/js/layout.js') }}"></script>
    <link href="{{ asset('assets3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets3/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets3/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets3/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
</head>

<body>
    @livewireScripts
    @include('layouts.menu-sidebar')
    @yield('content')
    @include('layouts.footer')

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets3/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets3/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets3/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets3/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets3/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets3/js/plugins.js') }}"></script>

    <script src="{{ asset('assets3/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets3/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets3/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('assets3/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets3/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <script src="{{ asset('assets3/libs/dragula/dragula.min.j') }}s"></script>
    <script src="{{ asset('assets3/libs/dom-autoscroller/dom-autoscroller.min.js') }}"></script>
    <script src="{{ asset('assets3/js/pages/todo.init.js') }}"></script>

    <script src="{{ asset('assets3/js/app.js') }}"></script>
</body>

</html>
