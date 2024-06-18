@extends('layouts.ecommerce')

@section('title')
<title>Kontak Penjual</title>
@endsection

@section('content')
<div class="flex mb-8 mt-10 justify-center font-inter px-16" aria-label="Breadcrumb">
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
        <li class="inline-flex items-center">
            <a href="{{route('product.nego', ['id' => $product->id])}}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
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
            {{$product->judul}}
        </h1>
        <div class="flex justify-center mb-3">
            <img src="{{ asset('images/' . $product->image) }}" class="h-80" alt="{{ $product->judul }}">
        </div>
        <div class="mb-3">
            <div>
                <p class="text-xl font-semibold mb-3">{{$product->tahun}}</p>
                <h2 class="text-3xl font-bold mb-3">RP {{ number_format($product->harga, 0, ',', '.') }}</h2>
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
        </div>
        <div>
            <a href="{{route('product.checkout', ['id' => $product->id])}}">
                <button type="submit" class="py-2 px-4 bg-blue-old text-base font-semibold text-white-broke hover:bg-blue-900 focus:bg-blue-900">Ajukan Pembelian</button>
            </a>
        </div>
    </div>
    <div class="flex justify-center h-full pt-6">
        <div class="flex flex-col justify-between h-full w-3/4 border-4 border-gray-200 rounded-2xl">
            <div class="px-3">
                <div class="flex py-3 text-xl font-semibold items-center border-b-4 border-gray-200 mb-3">
                    <img src="{{url('/assets/user-icon.png')}}" alt="Photo Profile" class="w-12 rounded-full border-2 mr-2" />
                    {{$product->author->name}}
                </div>
                <div class="flex flex-col h-128 gap-3 flex-nowrap overflow-auto">
                    <div class="self-end max-w-72 font-semibold border-blue-300 bg-blue-200 p-3 rounded-s-xl rounded-se-xl">
                        Apakah ada yang bisa saya bantu?
                    </div>
                </div>
            </div>
            <div class="flex text-sm font-semibold px-3 mt-3">
                <input type="text" class="w-full border-0 bg-transparent grow focus:border-0 focus:outline-none focus:bg-transparent focus:ring-0" placeholder="Mulai Negosiasi...">
                <a class="shrink" target="_blank" href="https://wa.me/{{$product->kontak}}?text=Halo%2C%20saya%20ingin%20memulai%20negosiasi%20produk%20dibawah%20ini%3A%0A%0A{{$product->judul}}">
                    <button type="submit" class="p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection