<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laravel')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('node_modules/flowbite/dist/flowbite.min.css') }}" rel="stylesheet">
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.min.js') }}"></script>
</head>

<body>
    <div id="app">
        <!-- Page Heading -->
        @include('layouts.guest.header')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Page Footer -->
        @include('layouts.guest.footer')

    </div>
    <!-- Scripts -->
</body>

</html>
