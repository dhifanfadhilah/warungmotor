@extends('layouts.ecommerce')

@section('title')
<title>Transaksi</title>
@endsection

@section('content')
@if (session('success'))
<div class="flex items-center p-4 mb-4 text-xl text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Success!</span> Pembayaran Telah Berhasil!
    </div>
</div>
@endif
<div class="container mx-auto py-8">
    <div class="w-full">
        <h1 class="text-3xl font-bold mb-6">Transaksi</h1>
        <div class="w-full mt-3">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Produk</th>
                            <th class="py-2 px-4 border-b">Harga</th>
                            <th class="py-2 px-4 border-b">Status</th>
                            <th class="py-2 px-4 border-b">Tanggal</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $transaction)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $transaction->product->judul }}</td>
                                <td class="py-2 px-4 border-b">RP {{ number_format($transaction->product->harga, 0, ',', '.') }}</td>
                                <td class="py-2 px-4 border-b">
                                    @if ($transaction->status == 'pending')
                                        <span class="px-2 py-1 text-sm font-semibold text-yellow-700 bg-yellow-100 rounded">{{ $transaction->status }}</span>
                                    @elseif ($transaction->status == 'success')
                                        <span class="px-2 py-1 text-sm font-semibold text-green-700 bg-green-100 rounded">{{ $transaction->status }}</span>
                                    @else
                                        <span class="px-2 py-1 text-sm font-semibold text-red-700 bg-red-100 rounded">{{ $transaction->status }}</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b">{{ $transaction->created_at }}</td>
                                <td class="py-2 px-4 border-b">
                                    @if ($transaction->status == 'pending')
                                        <form action="{{ route('checkout-process') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $transaction->id }}">
                                            <input type="hidden" name="product_id" value="{{ $transaction->product->id }}">
                                            <input type="hidden" name="harga" value="{{ $transaction->product->harga }}">
                                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Bayar</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-4 text-center">Tidak ada transaksi</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection