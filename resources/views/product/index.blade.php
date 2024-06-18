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
            <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
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
    <div class="flex justify-center">
        <img src="{{ asset('images/' . $product->image) }}" class="h-80" alt="{{ $product->judul }}">
    </div>
    <div class="flex flex-col justify-between">
        <div>
            <h1 class="text-3xl font-bold mb-3">
                {{$product->judul}}
            </h1>
            <p class="text-xl font-semibold mb-3">{{$product->tahun}}</p>
            <h2 class="text-3xl font-bold mb-3">RP {{ number_format($product->harga, 0, ',', '.') }}</h2>
            <div class="mb-3 border-y-4 border-gray-200">
                <h3 class="text-xl font-bold py-3">Penjual: <span class="font-semibold">{{$product->author->name}}</span></h3>
            </div>
            <div class="mb-2 text-base">
                <p class="font-bold mb-1">Merk: <span class="font-medium">{{$product->merk}}</span></p>
                <p class="font-bold mb-1">Model: <span class="font-medium">{{$product->model}}</span></p>
                <p class="font-bold mb-1">Jarak: <span class="font-medium">{{$product->jarak}} km</span></p>
            </div>
            <div class="mb-5 text-sm">
                <p class="font-bold">Deskripsi</p>
                <p class="font-medium">
                    {{$product->deskripsi}}
                </p>
            </div>
        </div>

        <div class="w-72 grid grid-cols-2 gap-2 mb-5">
            @if ($product->nego)
            <a href="" class="col-span-2 w-full p-1 rounded-lg shadow bg-red-500 text-center text-lg font-bold hover:bg-red-400">
                Negosisasi
            </a>
            @else
            <button class="col-span-2 w-full p-1 rounded-lg shadow bg-red-500 text-center text-lg font-bold" disabled>
                Nett
            </button>
            @endif
            <a href="" class="col-span-2 w-full p-1 rounded-lg shadow bg-blue-old text-center text-lg font-bold text-white hover:bg-blue-800">
                Beli
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
            <div class="w-full flex justify-around duration-700 ease-in-out" data-carousel-item>
                @foreach ($slideproduct as $row)
                <div class="bg-white-broke h-80 w-56 font-inter text-sm rounded-lg font-semibold hover:border-2 hover:border-blue-200 hover:shadow">
                    <a href="{{route('product.detail', ['id' => $row->id])}}">
                        <img class="object-cover w-full h-40" src="{{ asset('images/' . $row->image) }}" alt="{{$row->judul}}"/>
                        <div class="p-5">
                            <p>{{$row->judul}}</p>
                            <p class="justify-self-end">RP {{ number_format($row->harga, 0, ',', '.') }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="w-full flex justify-around duration-700 ease-in-out" data-carousel-item>
                @foreach ($sprod as $prod)
                <div class="bg-white-broke h-80 w-56 font-inter text-sm rounded-lg font-semibold hover:border-2 hover:border-blue-200 hover:shadow">
                    <a href="{{route('product.detail', ['id' => $prod->id])}}">
                        <img class="object-cover w-full h-40" src="{{ asset('images/' . $prod->image) }}" alt="{{$prod->judul}}" />
                        <div class="p-5">
                            <p>{{$prod->judul}}</p>
                            <p class="">RP {{ number_format($prod->harga, 0, ',', '.') }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
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