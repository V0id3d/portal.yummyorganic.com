<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yummy Organic's B2B Login">
    <meta name="keywords" content="login, signin">

    <title>{{ config('app.name', 'The Vortex') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="/assets/css/core.min.css" rel="stylesheet">
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <link href="/assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" href="/assets/img/favicon.png">
</head>

<body>


<div class="row no-gutters min-h-fullscreen bg-white">
    <div class="col-md-6 col-lg-7 col-xl-8 d-none d-md-block bg-img" style="background-image: url('/assets/img/auth2.jpg')" data-overlay="5">


    </div>



    <div class="col-md-6 col-lg-5 col-xl-4 align-self-center">
        <div class="px-80 py-30">
            @yield('content')

        </div>
    </div>
</div>




<!-- Scripts -->
<script src="/assets/js/core.min.js"></script>
<script src="/assets/js/app.min.js"></script>
<script src="/assets/js/script.min.js"></script>

</body>

</html>