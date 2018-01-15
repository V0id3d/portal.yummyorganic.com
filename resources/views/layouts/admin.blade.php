<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yummy Organic B2B">
    <meta name="keywords" content="layouts">

    <title>{{ config('app.name', 'The Vortex') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="/assets/css/core.min.css" rel="stylesheet">
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <link href="/assets/css/style.min.css" rel="stylesheet">
    @yield('custom-styles')

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" href="/assets/img/favicon.png">
</head>

<body>

<!-- Preloader -->
<div class="preloader">
    <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
    </div>
</div>



<!-- Sidebar -->
@include ('layouts.partials.admin._sidebar')
<!-- END Sidebar -->



<!-- Topbar -->
@include ('layouts.partials.admin._topbar')
<!-- END Topbar -->





<!-- Main container -->
<main class="main-container">
    @yield("main-content")

    <!-- Footer -->
    @include('layouts.partials.admin._footer')
    <!-- END Footer -->

</main>
<!-- END Main container -->



<!-- Global quickview -->
<div id="qv-global" class="quickview" data-url="/assets/data/quickview-global.html">
    <div class="spinner-linear">
        <div class="line"></div>
    </div>
</div>
<!-- END Global quickview -->



<!-- Scripts -->
<script src="/assets/js/core.min.js"></script>
<script src="/assets/js/app.min.js"></script>
<script src="/assets/js/script.min.js"></script>
@yield('custom-javascript')

</body>
</html>
