@extends('layouts.ecommerce')

@section('title')
<title>MotorBagus</title>
@endsection

@section('content')
<div id="default-carousel" class="relative w-full" data-carousel="slide">

    <div class="relative h-72 overflow-hidden rounded-lg md:h-96">

        <div class="hidden duration-700 ease-in-out grid grid-cols-2 content-center h-full bg-white-broke mx-20" data-carousel-item>
            <div class="justify-self-center">
                <img src="{{url('/assets/motorshow.png')}}" class="h-80" alt="..." />

            </div>
            <div class="self-center">
                <div class="ml-12 w-96 text-navy">
                    <h1 class="text-2xl font-bold">Ducati Streetfighter V4</h1>
                    <p class="text-lg font-bold">Red with dark grey frame and black wheels,
                        16-litre aluminum tank,
                        208 HP.</p>
                    <br />
                    <a href="#" class="text-sm font-bold">Detail Product...</a>
                </div>
            </div>
        </div>

        <div class="hidden duration-700 ease-in-out grid grid-cols-2 content-center h-full bg-white-broke mx-20" data-carousel-item>
            <div class="justify-self-center">
                <img src="{{url('/assets/motorshow.png')}}" class="h-80" alt="..." />

            </div>
            <div class="self-center">
                <div class="ml-12 w-96 text-navy">
                    <h1 class="text-2xl font-bold">Ducati Streetfighter V4</h1>
                    <p class="text-lg font-bold">Red with dark grey frame and black wheels,
                        16-litre aluminum tank,
                        208 HP.</p>
                    <br />
                    <a href="#" class="text-sm font-bold">Detail Product...</a>
                </div>
            </div>
        </div>

        <div class="hidden duration-1000 ease-in-out grid grid-cols-2 content-center h-full bg-white-broke mx-20" data-carousel-item>
            <div class="justify-self-center">
                <img src="{{url('/assets/motorshow.png')}}" class="h-80" alt="..." />

            </div>
            <div class="self-center">
                <div class="ml-12 w-96 text-navy">
                    <h1 class="text-2xl font-bold">Ducati Streetfighter V4</h1>
                    <p class="text-lg font-bold">Red with dark grey frame and black wheels,
                        16-litre aluminum tank,
                        208 HP.</p>
                    <br />
                    <a href="#" class="text-sm font-bold">Detail Product...</a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full border bg-blue-200 focus:bg-blue-500" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full border bg-blue-200 focus:bg-blue-500" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full border bg-blue-200 focus:bg-blue-500" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>

    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full group-hover:bg-white/50 group-focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full group-hover:bg-white/50 group-focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="flex my-8 justify-center font-inter px-12" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="{{ url('/') }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Home
            </a>
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </li>
    </ol>
</div>

<div class="grid grid-cols-5 justify-center gap-12 px-16 mb-12">
    @for ($i = 0; $i < 15; $i++)
    <div class="bg-white-broke h-80 font-inter text-sm rounded-lg font-semibold hover:border-2 hover:border-blue-200 hover:shadow">
        <a href="">
            <img class="object-cover" src="{{url('/assets/motorlist.png')}}" alt="" />
            <div class="p-5 grid grid-cols-2">
                <p>Kawasaki Ninja 650</p>
                <p class="justify-self-end">165 Jt IDR</p>
            </div>
        </a>
    </div>
    @endfor
</div>
@endsection