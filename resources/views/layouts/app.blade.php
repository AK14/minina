<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <title>Минина</title>--}}
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @vite(['resources/css/pub.css', 'resources/js/app.js'])
</head>

    <body >
    <!-- ======= Hero Section ======= -->
    @include('.layouts.header.hero')
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        @include('.layouts.header.header')
    </header>
    <!-- End Header -->

    <!-- ======= Main Section ======= -->
    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('.layouts.footer.top')
        @include('.layouts.footer.bottom')
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    </body>

</html>
