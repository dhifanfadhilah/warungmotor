@extends('layouts.ecommerce')

@section('title')
<title>Product</title>
@endsection

@section('content')
<div class="flex my-8 justify-center font-inter px-16" aria-label="Breadcrumb">
    <ol class="inline-flex flex-grow items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="{{ url('/') }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Home
            </a>
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a href="" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Beli Motor
            </a>
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </li>
    </ol>

    <form class="max-w-md mx-auto flex-shrink flex" method="POST" action="">
        @csrf
        <input type="search" id="default-search" class="w-full p-1 text-sm text-blue-old bg-transparent border-0 border-b-2 border-blue-old font-medium appearance-none focus:outline-none focus:ring-0" placeholder="Search Product..." @keyword.enter="event.preventDefault();
                                        this.closest('form').submit();" />
        <svg class="w-5 h-5 mt-2 ml-1 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
        </svg>
    </form>
</div>

<div class="grid grid-cols-2 py-8 px-16 gap-12 bg-white-broke">
    <div class="flex flex-col">
        <div class="flex self-start w-full p-3">
            <ul class="flex flex-nowrap justify-start" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist" data-tabs-active-classes="bg-gray-200 border-2 border-blue-500">
                <li class="px-2 h-24" role="presentation">
                    <button class="h-full hover:bg-gray-200" autofocus id="image1-tab" data-tabs-target="#image1" type="button" role="tab" aria-controls="image1" aria-selected="false">
                        <img src="{{url('/assets/motorshow.png')}}" alt="" class="h-full object-cover">
                    </button>
                </li>
                <li class="px-2 h-24" role="presentation">
                    <button class="h-full hover:bg-gray-200" id="image2-tab" data-tabs-target="#image2" type="button" role="tab" aria-controls="image2" aria-selected="false">
                        <img src="{{url('/assets/detailprod1.jpeg')}}" alt="" class="h-full object-cover">
                    </button>
                </li>
                <li class="px-2 h-24" role="presentation">
                    <button class="h-full hover:bg-gray-200" id="image3-tab" data-tabs-target="#image3" type="button" role="tab" aria-controls="image3" aria-selected="false">
                        <img src="{{url('/assets/detailprod2.jpeg')}}" alt="" class="h-full object-cover">
                    </button>
                </li>
                <li class="px-2 h-24" role="presentation">
                    <button class="h-full hover:bg-gray-200" id="image4-tab" data-tabs-target="#image4" type="button" role="tab" aria-controls="image4" aria-selected="false">
                        <img src="{{url('/assets/detailprod3.jpeg')}}" alt="" class="h-full object-cover">
                    </button>
                </li>
            </ul>
        </div>
        <div class="order-first self-center" id="default-tab-content">
            <div class="hidden" id="image1" role="tabpanel" aria-labelledby="image1-tab">
                <img src="{{url('/assets/motorshow.png')}}" alt="" class="h-64">
            </div>
            <div class="hidden" id="image2" role="tabpanel" aria-labelledby="image2-tab">
                <img src="{{url('/assets/detailprod1.jpeg')}}" alt="" class="h-64">
            </div>
            <div class="hidden" id="image3" role="tabpanel" aria-labelledby="image3-tab">
                <img src="{{url('/assets/detailprod2.jpeg')}}" alt="" class="h-64">
            </div>
            <div class="hidden" id="image4" role="tabpanel" aria-labelledby="image4-tab">
                <img src="{{url('/assets/detailprod3.jpeg')}}" alt="" class="h-64">
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-between">
        <div>
            <h1 class="text-3xl font-bold mb-3">
                Ducati Streetfighter V4
            </h1>
            <p class="text-sm font-semibold mb-3">2022</p>
            <h2 class="text-3xl font-bold mb-3">IDR 330.499.000</h2>
            <div class="mb-3 text-sm">
                <p class="font-bold">Deskripsi</p>
                <p class="font-medium">
                    Ducati Streetfighter V4 tahun 2022, 650 cc, jarak tempuh 500+ KM, pajak aman, surat komplit, lokasi Bandung, Jawa Barat
                </p>
            </div>
        </div>

        <div class="w-72 grid grid-cols-2 gap-2 mb-5">
            <a href="" class="col-span-2 w-ful p-1 rounded-lg shadow bg-red-500 text-center text-lg font-bold hover:bg-red-400">
                Kontak Penjual
            </a>
            <a href="" class="w-full p-1 rounded-lg shadow bg-blue-old text-center text-lg font-bold text-white hover:bg-blue-800">
                Beli
            </a>
            <a href="" class="w-full p-1 rounded-lg shadow bg-blue-old text-center text-lg font-bold text-white hover:bg-blue-800">
                Trade In
            </a>
        </div>
    </div>
</div>

<div class="px-16 mt-6 mb-4">
    <h1 class="text-lg font-semibold">Cek Motor Lainnya</h1>
    <div class="flex mt-6 h-96" id="controls-carousel" data-carousel="static">
        <div class="w-2/12 flex items-center">
            <div class="w-full text-right">
                <button class="p-3 rounded-full bg-white border border-gray-100 shadow mr-5" data-carousel-prev>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full overflow-hidden relative">
            @for ($i = 0; $i < 5; $i++)
            <div class="w-full flex justify-around duration-700 ease-in-out" data-carousel-item>
                <div class="bg-white-broke h-80 w-56 font-inter text-sm rounded-lg font-semibold hover:border-2 hover:border-blue-200 hover:shadow">
                    <a href="">
                        <img class="object-cover w-full" src="{{url('/assets/motorlist.png')}}" alt="" />
                        <div class="p-5 grid grid-cols-2">
                            <p>Kawasaki Ninja 650</p>
                            <p class="justify-self-end">165 Jt IDR</p>
                        </div>
                    </a>
                </div>
                <div class="bg-white-broke h-80 w-56 font-inter text-sm rounded-lg font-semibold hover:border-2 hover:border-blue-200 hover:shadow">
                    <a href="">
                        <img class="object-cover w-full" src="{{url('/assets/motorlist.png')}}" alt="" />
                        <div class="p-5 grid grid-cols-2">
                            <p>Kawasaki Ninja 650</p>
                            <p class="justify-self-end">165 Jt IDR</p>
                        </div>
                    </a>
                </div>
                <div class="bg-white-broke h-80 w-56 font-inter text-sm rounded-lg font-semibold hover:border-2 hover:border-blue-200 hover:shadow">
                    <a href="">
                        <img class="object-cover w-full" src="{{url('/assets/motorlist.png')}}" alt="" />
                        <div class="p-5 grid grid-cols-2">
                            <p>Kawasaki Ninja 650</p>
                            <p class="justify-self-end">165 Jt IDR</p>
                        </div>
                    </a>
                </div>
            </div>
            @endfor
        </div>
        <div class="w-2/12 flex items-center">
            <div class="w-full text-left">
                <button class="p-3 rounded-full bg-white border border-gray-100 shadow ml-5" data-carousel-next>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection