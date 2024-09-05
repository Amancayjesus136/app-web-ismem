<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Ismem</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets3/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="assets3/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets3/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets3/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets3/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets3/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets3/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>
    @include('layouts.menu-sidebar')
    @yield('content')
    @include('layouts.footer')

    <!-- JAVASCRIPT -->
    <script src="assets3/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets3/libs/simplebar/simplebar.min.js"></script>
    <script src="assets3/libs/node-waves/waves.min.js"></script>
    <script src="assets3/libs/feather-icons/feather.min.js"></script>
    <script src="assets3/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets3/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets3/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets3/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets3/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets3/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets3/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets3/js/app.js"></script>
</body>

</html>
