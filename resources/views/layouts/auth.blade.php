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
    <div class="w-screen h-screen bg-blueish font-inter flex justify-end items-center">
        <div class="w-2/5 h-3/4 bg-white-broke relative right-60">
            <div class="w-10/12 h-9/10 bg-login-image bg-cover absolute top-7 right-4/5 flex flex-col justify-center content-center">
                <h1 class="text-white-broke text-6xl opacity-70 text-center font-bold">MOTORBAGUS</h1>
                <p class="text-white-broke opacity-70 text-justify mx-8 text-sm mt-2 font-thin">
                    Selamat datang di MotorBagus.com, destinasi terbaik untuk jual beli motor di Indonesia! Temukan koleksi motor terbaik dari berbagai merek, baru atau bekas, dengan keamanan dan kemudahan terjamin. Mulai petualangan Anda di jalan raya dengan motor yang tepat, hanya di MotorBagus.com!
                </p>
            </div>

            <div class="h-full w-9/10 float-right">
                @yield('content')
            </div>

        </div>
    </div>
</body>

</html>