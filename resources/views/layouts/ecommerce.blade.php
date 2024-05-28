<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('module.header')

    <div class="bg-white">
    @yield('content')
    </div>

    @include('module.footer')
</body>

</html>