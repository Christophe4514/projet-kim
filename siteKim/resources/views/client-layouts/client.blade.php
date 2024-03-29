<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>congodrone service | Services LiDAR pour drones en RDC et solutions
        intelligentes pour drone | @yield('title')</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="{{ asset('front-end/images/logo01.png') }}">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('front-end/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('front-end/plugins/fontawesome/css/all.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('front-end/plugins/animate-css/animate.css') }}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('front-end/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/plugins/slick/slick-theme.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('front-end/plugins/colorbox/colorbox.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">

</head>

<body>
    <div class="body-inner">

        @yield('header')

        @yield('content')

        @yield('footer')

        <!-- Javascript Files
    ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="{{ asset('front-end/plugins/jQuery/jquery.min.js') }}"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{ asset('front-end/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
        <!-- Slick Carousel -->
        <script src="{{ asset('front-end/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('front-end/plugins/slick/slick-animation.min.js') }}"></script>
        <!-- Color box -->
        <script src="{{ asset('front-end/plugins/colorbox/jquery.colorbox.js') }}"></script>
        <!-- shuffle -->
        <script src="{{ asset('front-end/plugins/shuffle/shuffle.min.js') }}" defer></script>


        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <!-- Google Map Plugin-->
        <script src="{{ asset('front-end/plugins/google-map/map.js') }}" defer></script>

        <!-- Template custom -->
        <script src="{{ asset('front-end/js/script.js') }}"></script>

    </div>
    <!-- Body inner end -->
</body>

</html>
