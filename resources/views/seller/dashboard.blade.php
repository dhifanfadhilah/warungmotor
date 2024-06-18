@extends('layouts.ecommerce')

@section('title')
<title>Dashboard Seller</title>
@endsection

@section('content')
@if (session('success'))
<div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Success!</span> Produk Berhasil Ditambahkan!.
    </div>
</div>
@elseif (session('updateSuccess'))
<div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Success!</span> Produk Berhasil Diperbarui!.
    </div>
</div>
@elseif (session('deleteSuccess'))
<div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Success!</span> Produk Berhasil Dihapus.
    </div>
</div>
@endif

<div class="flex mb-8 mt-12 justify-center font-inter px-16" aria-label="Breadcrumb">
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
            <a href="{{ route('seller.dashboard') }}" class="inline-flex items-center text-base font-medium text-navy hover:text-blueish">
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

<div class="py-8 px-16 mb-6">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
    @forelse ($products as $product)
    <div class="flex flex-col gap-3 mb-3">
        <div class="flex items-center justify-around w-full bg-white-broke h-40 gap-3">
            <div class="flex justify-center items-center w-2/5">
                <img src="{{ asset('images/' . $product->image) }}" alt="" class="object-cover h-36">
            </div>

            <div class="">
                <h1 class="text-2xl font-bold">{{$product->judul}}</h1>
                <p class="text-base font-bold">{{$product->deskripsi}}</p>
                <br />
                <a href="{{route('product.detail', ['id' => $product->id])}}" class="text-sm font-bold">Halaman Produk...</a>
            </div>
            <div class="flex flex-col gap-4 text-base font-semibold text-white-broke pr-6 ">

                <a href="{{ route('seller.dashboard', $product->id) }}" class="py-2 px-3 bg-blueish w-24 rounded-lg text-center">Edit</a>

                <button type="submit" class="py-2 px-3 bg-red-500 w-24 rounded-lg hover:bg-red-400" data-modal-target="popup-modal" data-modal-toggle="popup-modal">Hapus</button>
            </div>
        </div>
    </div>
    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda yakin ingin menghapus produk?</h3>
                    <form action="{{ route('delete.product', ['id' => $product->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                    </form>

                    <button data-modal-hide="popup-modal" type="button" class="mt-2 py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Batalkan</button>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="w-full text-center text-2xl font-bold py-6">
        <h1>Anda Belum Menambahkan Produk.</h1>
    </div>
    @endforelse
    <div class="flex justify-end w-full text-base font-semibold text-blueish mb-5">
        <button onclick="toggleTambah()" class="py-2 px-3 border-2 border-blueish w-24 rounded-lg text-center mr-10">Tambah</button>
    </div>
    {{ $products->links() }}
</div>

<div class="flex justify-center mb-16" id="productAddForm" style="display: none;">
    <form action="{{route('upload.product')}}" method="POST" enctype="multipart/form-data" class="w-3/5">
        @csrf
        <h1 class="text-3xl font-bold text-center mb-6">Tambah Iklan</h1>
        <div class="mb-3">
            <label for="judul" class="text-base font-bold">Judul Iklan</label><br>
            <input type="text" id="judul" name="judul" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
        </div>
        <div class="grid grid-cols-2 gap-3 mb-3">
            <div>
                <label for="merk" class="text-base font-bold">Merk</label>
                <input type="text" id="merk" name="merk" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
            </div>
            <div>
                <label for="model" class="text-base font-bold">Model</label>
                <input type="text" id="model" name="model" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
            </div>
            <div>
                <label for="tahun" class="text-base font-bold">Tahun</label>
                <input type="text" id="tahun" name="tahun" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
            </div>
            <div>
                <label for="jarak" class="text-base font-bold">Jarak Tempuh</label>
                <input type="number" id="jarak" name="jarak" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
            </div>
            <div class="relative">
                <label for="harga" class="text-base font-bold">Harga Jual</label>
                <span class="absolute start-3 bottom-2 text-gray-500 text-base font-semibold">
                    RP
                </span>
                <input type="text" id="harga" name="harga" class="pl-10 text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
            </div>
            <div>
                <label for="cc" class="text-base font-bold">CC Motor</label>
                <input type="number" id="cc" name="cc" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="nego" class="text-base font-bold">Opsi Negosiasi</label>
            <select name="nego" id="nego" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                <option value="true">Nego</option>
                <option value="false">Net</option>
            </select>
            <!-- <input type="checkbox" id="nego" name="nego" value="true" class="w-4 h-4 border-2 border-blue-old rounded bg-blue-old focus:ring-2 focus:ring-blue-300"> -->
        </div>
        <div class="mb-3 relative">
            <label for="kontak" class="text-base font-bold">Kontak (Whatsapp)</label>
            <span class="absolute start-3 bottom-2 text-gray-500 text-base font-semibold">
                (+62)
            </span>
            <input type="text" id="kontak" name="kontak" class="pl-14 text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
        </div>
        <div class="mb-3">
            <label for="image" class="text-base font-bold mr-2">Unggah Foto</label>
            <input type="file" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="text-base font-bold">Deskripsi</label><br>
            <textarea name="deskripsi" id="deskripsi" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required></textarea>
        </div>
        <button type="submit" class="py-2 px-5 rounded-lg bg-blueish text-base font-semibold text-white-broke">
            Tambah
        </button>
    </form>
</div>

@if ($productToUpdate)
<div class="flex justify-center mb-16" id="productUpdateForm">
    <form action="{{route('update.product', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data" class="w-3/5">
        @csrf
        @method('PATCH')
        <h1 class="text-3xl font-bold text-center mb-6">Update Iklan</h1>
        <div class="mb-3">
            <label for="judul" class="text-base font-bold">Judul Iklan</label><br>
            <input type="text" id="judul" name="judul" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" value="{{$productToUpdate->judul}}" required>
        </div>
        <div class="grid grid-cols-2 gap-3 mb-3">
            <div>
                <label for="merk" class="text-base font-bold">Merk</label>
                <input type="text" id="merk" name="merk" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" value="{{$productToUpdate->merk}}" required>
            </div>
            <div>
                <label for="model" class="text-base font-bold">Model</label>
                <input type="text" id="model" name="model" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" value="{{$productToUpdate->model}}" required>
            </div>
            <div>
                <label for="tahun" class="text-base font-bold">Tahun</label>
                <input type="text" id="tahun" name="tahun" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" value="{{$productToUpdate->tahun}}" required>
            </div>
            <div>
                <label for="jarak" class="text-base font-bold">Jarak Tempuh</label>
                <input type="number" id="jarak" name="jarak" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" value="{{$productToUpdate->jarak}}" required>
            </div>
            <div class="relative">
                <label for="harga" class="text-base font-bold">Harga Jual</label>
                <span class="absolute start-3 bottom-2 text-gray-500 text-base font-semibold">
                    RP
                </span>
                <input type="text" id="harga" name="harga" class="pl-10 text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" value="{{$productToUpdate->harga}}" required>
            </div>
            <div>
                <label for="cc" class="text-base font-bold">CC Motor</label>
                <input type="number" id="cc" name="cc" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" value="{{$productToUpdate->cc}}" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="nego" class="text-base font-bold">Opsi Negosiasi</label>
            <select name="nego" id="nego" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1">
                <option value="true">Nego</option>
                <option value="false">Net</option>
            </select>
        </div>
        <div class="mb-3 relative">
            <label for="kontak" class="text-base font-bold">Kontak (Whatsapp)</label>
            <span class="absolute start-3 bottom-2 text-gray-500 text-base font-semibold">
                (+62)
            </span>
            <input type="text" id="kontak" name="kontak" class="pl-14 text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" value="{{$productToUpdate->kontak}}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="text-base font-bold mr-2">Unggah Foto</label>
            <input type="file" id="image" name="image" value="{{$productToUpdate->image}}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="text-base font-bold">Deskripsi</label><br>
            <textarea name="deskripsi" id="deskripsi" class="text-base font-semibold w-full rounded-lg bg-gray-200 mt-1" required>
            {{$productToUpdate->deskripsi}}
            </textarea>
        </div>
        <button type="submit" class="py-2 px-5 rounded-lg bg-blueish text-base font-semibold text-white-broke">
            Update
        </button>
    </form>
</div>
@endif

<script>
    function toggleTambah() {
        var form = document.getElementById("productAddForm");
        if (form.style.display === "none") {
            form.style.display = "flex";
        } else {
            form.style.display = "none";
        }
    }
</script>
@endsection