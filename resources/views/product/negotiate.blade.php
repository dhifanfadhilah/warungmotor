@extends('layouts.ecommerce')

@section('title')
<title>Kontak Penjual</title>
@endsection

@section('content')
<div class="flex mb-8 mt-4 justify-center font-inter px-16" aria-label="Breadcrumb">
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
            <a href="{{ url('/product') }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Beli Motor
            </a>
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a href="{{ url('/tukar-tambah') }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Kontak Penjual
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

<div class="grid grid-cols-2 py-8 px-16 gap-12 bg-white-broke mb-12">
    <div class="flex flex-col">
        <h1 class="text-3xl font-bold mb-6">
            Ducati Streetfighter V4
        </h1>
        <div class="self-center" id="default-tab-content">
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
        <div class="mb-3">
            <p class="text-sm font-semibold my-3">2022</p>
            <h2 class="text-3xl font-bold mb-3">IDR 330.499.000</h2>
            <div class="mb-3 text-sm">
                <p class="font-bold">Deskripsi</p>
                <p class="font-medium w-5/6">
                    Ducati Streetfighter V4 tahun 2022, 650 cc, jarak tempuh 500+ KM, pajak aman, surat komplit, lokasi Bandung, Jawa Barat
                </p>
            </div>
        </div>
        <div>
            <form action="">
                @csrf
                <button type="submit" class="py-2 px-4 bg-blue-old text-base font-semibold text-white-broke hover:bg-blue-900 focus:bg-blue-900">Ajukan Pembelian</button>
            </form>
        </div>
    </div>
    <div class="flex justify-center h-full pt-6">
        <div class="flex flex-col justify-between h-full w-3/4 border-4 border-gray-200 rounded-2xl">
            <div class="px-3">
                <div class="flex py-3 text-xl font-semibold items-center border-b-4 border-gray-200 mb-3">
                    <img src="{{url('/assets/user-icon.png')}}" alt="Photo Profile" class="w-12 rounded-full border-2 mr-2" />
                    Seller
                </div>
                <div class="flex flex-col h-128 gap-3 flex-nowrap overflow-auto">
                    <div class="self-end max-w-72 border-blue-300 bg-blue-200 p-3 rounded-s-xl rounded-se-xl">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui cumque numquam reprehenderit ex aliquam laborum odio nisi! Atque distinctio quisquam consequuntur repellendus sapiente, deleniti laborum rem sequi eum velit.
                    </div>
                    <div class="self-start max-w-72 border-gray-300 bg-gray-200 p-3 rounded-e-xl rounded-tl-xl">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui cumque numquam reprehenderit ex aliquam laborum odio nisi! Atque distinctio quisquam consequuntur repellendus sapiente, deleniti laborum rem sequi eum velit.
                    </div>
                </div>
            </div>
            <div class="text-sm font-semibold px-3 mt-3">
                <form action="" class="flex border-t-4 border-gray-200">
                    @csrf
                    <input type="text" class="border-0 bg-transparent grow focus:border-0 focus:outline-none focus:bg-transparent focus:ring-0" placeholder="Apa yang ingin anda tanyakan?">
                    <button type="submit" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection