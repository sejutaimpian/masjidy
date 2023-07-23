<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Masjid Baiturrahim</title>
    <link rel="shortcut icon" href="assets/logo-masjid.png" type="image/x-icon">

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased">
    @include('layouts.home.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.home.footer')
</body>

</html>