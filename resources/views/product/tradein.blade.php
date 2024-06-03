@extends('layouts.ecommerce')

@section('title')
<title>Tukar Tambah</title>
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
            <a href="{{ url('/product') }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Beli Motor
            </a>
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a href="{{ url('/tukar-tambah') }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Trade In
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
        <div>
            <p class="text-sm font-semibold my-3">2022</p>
            <h2 class="text-3xl font-bold mb-3">IDR 330.499.000</h2>
            <div class="mb-3 text-sm">
                <p class="font-bold">Deskripsi</p>
                <p class="font-medium w-5/6">
                    Ducati Streetfighter V4 tahun 2022, 650 cc, jarak tempuh 500+ KM, pajak aman, surat komplit, lokasi Bandung, Jawa Barat
                </p>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center pb-12">
        <form action="POST" class="w-4/5">
            <h1 class="text-3xl font-bold text-center mb-6">Form Tukar Tambah</h1>
            <input type="text" id="product-name" class="w-full rounded-lg bg-gray-200 text-base font-semibold mb-3" value="Ducatti Streetfighter V4" disabled>
            <h2 class="text-xl font-bold text-left my-3">Motor yang akan dijual:</h2>
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div>
                    <label for="merek" class="text-base font-bold">Merek Motor</label>
                    <input type="text" id="merek" name="merek" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                </div>
                <div>
                    <label for="tipe" class="text-base font-bold">Tipe / Model</label>
                    <input type="text" id="tipe" name="tipe" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                </div>
                <div>
                    <label for="tahun" class="text-base font-bold">Tahun Produksi</label>
                    <input type="text" id="tahun" name="tahun" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                </div>
                <div>
                    <label for="jarak" class="text-base font-bold">Jarak Tempuh</label>
                    <input type="text" id="jarak" name="jarak" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                </div>
            </div>
            <div class="flex gap-3 items-center mb-3">
                <p class="text-base font-bold">Unggah beberapa foto</p>
                <label for="foto" class="text-base font-bold rounded-lg bg-gray-200 py-1 px-2 border border-gray-300 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <span class="ml-2">Pilih File</span>
                </label>
                <input type="file" id="foto" name="foto" class="hidden">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="text-base font-bold">Keterangan</label><br>
                <textarea name="keterangan" id="keterangan" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1"></textarea>
            </div>
            <div class="mb-3">
                <h2 class="text-xl font-bold text-left my-3">Informasi Kontak</h2>
                <div class="mb-3">
                    <label for="nama" class="text-base font-bold">Nama Lengkap</label><br>
                    <input type="text" id="nama" name="nama" class="text-base font-semibold w-2/3 rounded-lg bg-gray-200 mt-1">
                </div>
                <div class="mb-3">
                    <label for="notelp" class="text-base font-bold">No. Telpon</label><br>
                    <input type="text" id="notelp" name="notelp" class="text-base font-semibold w-2/3 rounded-lg bg-gray-200 mt-1">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="text-base font-bold">Alamat</label><br>
                    <input type="text" id="alamat" name="alamat" class="text-base font-semibold w-2/3 rounded-lg bg-gray-200 mt-1">
                </div>
            </div>
            <button type="submit" class="py-2 px-5 my-3 rounded-lg bg-blue-old text-base font-semibold text-white-broke">
                Ajukan Tukar Tambah
            </button>
        </form>
    </div>
</div>
@endsection