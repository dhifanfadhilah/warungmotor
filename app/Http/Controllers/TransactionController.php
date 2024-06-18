<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function index()
    {

        // $transactions = Transaction::where('user_id', Auth::user()->id)->get();

        // $transactions->transform(function ($transaction, $key) {
        //     $transaction->product = collect(config('products'))->firstWhere('id', $transaction->product_id);
        //     return $transaction;
        // });

        $transactions = Transaction::with('product')
            ->where('user_id', Auth::user()->id)
            ->get();

        // $transactions = Transaction::where('user_id', Auth::user()->id)
        //     ->get();

        return view('transactions', compact('transactions'));
    }
}
