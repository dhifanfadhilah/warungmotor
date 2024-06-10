@extends('layouts.ecommerce')

@section('title')
<title>Dashboard Seller</title>
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
            <a href="{{ url('/seller-dashboard') }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
                Halaman penjual
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

<div class="py-8 px-16 bg-white-broke mb-6">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
    <table class="w-full text-center table-auto border-2 border-gray-200 mb-3">
        <thead class="text-base font-semibold bg-blueish text-white-broke">
            <tr>
                <th scope="col" class="p-2 border-2 border-gray-200">No</th>
                <th scope="col" class="p-2 border-2 border-gray-200">Pengiklanan</th>
                <th scope="col" class="p-2 border-2 border-gray-200">Penjualan</th>
                <th scope="col" class="p-2 border-2 border-gray-200">Judul Iklan</th>
                <th scope="col" class="p-2 border-2 border-gray-200">Merek</th>
                <th scope="col" class="p-2 border-2 border-gray-200">Tahun</th>
                <th scope="col" class="p-2 border-2 border-gray-200">Jarak Tempuh</th>
                <th scope="col" class="p-2 border-2 border-gray-200">Harga Jual</th>
                <th scope="col" class="p-2 border-2 border-gray-200">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i < 11; $i++) <tr class="text-sm">
                <th scope="row" class="p-2 bg-blueish text-white-broke border-2 border-gray-200">{{$i}}</th>
                <td class="p-2 border-2 border-gray-200"></td>
                <td class="p-2 border-2 border-gray-200"></td>
                <td class="p-2 border-2 border-gray-200"></td>
                <td class="p-2 border-2 border-gray-200"></td>
                <td class="p-2 border-2 border-gray-200"></td>
                <td class="p-2 border-2 border-gray-200"></td>
                <td class="p-2 border-2 border-gray-200"></td>
                <td class="p-2 border-2 border-gray-200"></td>
                </tr>
                @endfor
        </tbody>
    </table>
    <div class="flex justify-end gap-4 text-base font-semibold text-white-broke">
        <button type="button" class="py-2 px-3 bg-blueish w-24 rounded-lg">Edit</button>
        <button type="button" class="py-2 px-3 bg-blueish w-24 rounded-lg">Hapus</button>
    </div>
</div>

<div class="grid grid-cols-2 pb-8 px-16 gap-12 mb-12">
    <div class="flex flex-col h-full pt-6">
        <h1 class="text-3xl font-bold mb-6">Inbox Chat</h1>
        <div class="flex flex-col justify-between h-full w-3/4 border-4 border-gray-200 rounded-2xl">
            <div class="px-3">
                <div class="flex py-3 text-xl font-semibold items-center border-b-4 border-gray-200 mb-3">
                    <img src="{{url('/assets/user-icon.png')}}" alt="Photo Profile" class="w-12 rounded-full border-2 mr-2" />
                    Buyer
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
    <div class="pt-6">
        <form action="POST" class="w-4/5">
            @csrf
            <h1 class="text-3xl font-bold text-center mb-6">Tambah Iklan</h1>
            <div class="mb-3">
                <label for="judul" class="text-base font-bold">Judul Iklan</label><br>
                <input type="text" id="judul" name="judul" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
            </div>
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div>
                    <label for="merek" class="text-base font-bold">Merek</label>
                    <input type="text" id="merek" name="merek" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                </div>
                <div>
                    <label for="tahun" class="text-base font-bold">Tahun</label>
                    <input type="text" id="tahun" name="tahun" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                </div>
                <div>
                    <label for="jarak" class="text-base font-bold">Jarak Tempuh</label>
                    <input type="text" id="jarak" name="jarak" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                </div>
                <div>
                    <label for="wilayah" class="text-base font-bold">Wilayah</label>
                    <input type="text" id="wilayah" name="wilayah" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                </div>
                <div>
                    <label for="harga" class="text-base font-bold">Harga Jual</label>
                    <input type="text" id="harga" name="harga" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
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
                <label for="keterangan" class="text-base font-bold">Deskripsi</label><br>
                <textarea name="keterangan" id="keterangan" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1"></textarea>
            </div>
            <button type="submit" class="py-2 px-5 rounded-lg bg-blueish text-base font-semibold text-white-broke">
                Tambah
            </button>
        </form>
    </div>
</div>
@endsection