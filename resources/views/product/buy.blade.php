@extends('layouts.ecommerce')

@section('title')
<title>Pembelian</title>
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
            <a href="{{route('product.checkout', ['id' => $product->id])}}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Pembelian
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

<div class="grid grid-cols-2 py-8 px-16 gap-12 bg-white-broke mb-8">
    <div class="">
        <h1 class="text-3xl font-bold mb-6">Pembelian</h1>
        <form action="" method="POST" id="form-pembayaran">
            @csrf
            <div class="my-3">
                <h2 class="text-xl font-bold mb-2">Informasi Kontak</h2>
                <div class="mb-3">
                    <label for="nama" class="text-base font-bold">Nama Lengkap</label><br>
                    <input type="text" id="nama" name="nama" class="text-sm font-semibold w-3/4 rounded-lg bg-gray-200 mt-1" value="{{$user->name}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="text-base font-bold">Email</label><br>
                    <input type="text" id="email" name="email" class="text-sm font-semibold w-3/4 rounded-lg bg-gray-200 mt-1" value="{{$user->email}}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="text-base font-bold">Alamat</label><br>
                    <input type="text" id="alamat" name="alamat" class="text-sm font-semibold w-3/4 rounded-lg bg-gray-200 mt-1">
                </div>
            </div>
            <div class="mt-6 w-3/4">
                <h2 class="text-xl font-bold mb-2">Metode Pengiriman</h2>
                <ul class="grid grid-cols-3 w-full gap-3">
                    <li>
                        <input type="radio" id="kargo" name="pengiriman" value="kargo" class="hidden peer" required>
                        <div class="rounded-lg p-3 cursor-pointer peer-checked:bg-gray-200 hover:bg-gray-200 peer-checked:border peer-checke:border-gray-500">
                            <label for="kargo">
                                <div class="text-sm font-semibold mb-2">Kargo</div>
                                <img src="{{ url('/assets/kargo.jpeg') }}" alt="">
                            </label>
                        </div>
                    </li>
                    <li>
                        <input type="radio" id="pos" name="pengiriman" value="pos" class="hidden peer">
                        <div class="rounded-lg p-3 cursor-pointer peer-checked:bg-gray-200 hover:bg-gray-200 peer-checked:border peer-checke:border-gray-500">
                            <label for="pos">
                                <div class="text-sm font-semibold mb-2">Pos</div>
                                <img src="{{ url('/assets/pos.jpeg') }}" alt="">
                            </label>
                        </div>
                    </li>
                    <li>
                        <input type="radio" id="towing" name="pengiriman" value="towing" class="hidden peer">
                        <div class="rounded-lg p-3 cursor-pointer peer-checked:bg-gray-200 hover:bg-gray-200 peer-checked:border peer-checke:border-gray-500">
                            <label for="towing">
                                <div class="text-sm font-semibold mb-2">Towing</div>
                                <img src="{{ url('/assets/towing.jpeg') }}" alt="">
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mt-3 w-3/4">
                <h2 class="text-xl font-bold mb-2">Metode Pembayaran</h2>
                <ul class="grid grid-cols-3 w-full gap-3 w-3/4">
                    <li>
                        <input type="radio" id="bca" name="pembayaran" value="bca" class="hidden peer" required>
                        <div class="rounded-lg p-3 cursor-pointer peer-checked:bg-gray-200 hover:bg-gray-200 peer-checked:border peer-checke:border-gray-500">
                            <label for="bca">
                                <img src="{{ url('/assets/bca.png') }}" alt="">
                            </label>
                        </div>
                    </li>
                    <li>
                        <input type="radio" id="bri" name="pembayaran" value="bri" class="hidden peer">
                        <div class="rounded-lg p-3 cursor-pointer peer-checked:bg-gray-200 hover:bg-gray-200 peer-checked:border peer-checke:border-gray-500">
                            <label for="bri">
                                <img src="{{ url('/assets/bri.png') }}" alt="">
                            </label>
                        </div>
                    </li>
                    <li>
                        <input type="radio" id="mandiri" name="pembayaran" value="mandiri" class="hidden peer">
                        <div class="rounded-lg p-3 cursor-pointer peer-checked:bg-gray-200 hover:bg-gray-200 peer-checked:border peer-checke:border-gray-500">
                            <label for="mandiri">
                                <img src="{{ url('/assets/mandiri.png') }}" alt="">
                            </label>
                        </div>
                    </li>
                    <li>
                        <input type="radio" id="visa" name="pembayaran" value="visa" class="hidden peer">
                        <div class="rounded-lg p-3 cursor-pointer peer-checked:bg-gray-200 hover:bg-gray-200 peer-checked:border peer-checke:border-gray-500">
                            <label for="visa">
                                <img src="{{ url('/assets/visa.png') }}" alt="">
                            </label>
                        </div>
                    </li>
                    <li>
                        <input type="radio" id="mastercard" name="pembayaran" value="mastercard" class="hidden peer">
                        <div class="rounded-lg p-3 cursor-pointer peer-checked:bg-gray-200 hover:bg-gray-200 peer-checked:border peer-checke:border-gray-500">
                            <label for="mastercard">
                                <img src="{{ url('/assets/mastercard.png') }}" alt="">
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    <div class="h-full pb-12">
        <h1 class="text-3xl font-bold mb-6">Detail Pesanan</h1>
        <div class="gap-8 border-4 border-gray-200 p-6 flex flex-col justify-between">
            <div class="grid grid-cols-2 gap-2 border-b-4 border-gray-200">
                <img src="{{ asset('images/' . $product->image) }}" class="mb-3" alt="">
                <div>
                    <h2 class="text-2xl font-bold">{{$product->judul}}</h2>
                    <p class="text-xl font-semibold">RP {{ number_format($product->harga, 0, ',', '.') }}</p>
                </div>
            </div>
            <div class="">
                <div class="text-3xl font-bold mb-2">Total {{ number_format($product->harga, 0, ',', '.') }}</div>
                <form action="{{ route('checkout-process') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="harga" value="{{ $product->harga }}">

                    <button type="submit" class="py-2 px-12 rounded-lg shadow bg-blue-old text-center text-lg font-bold text-white hover:bg-blue-900">Bayar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection