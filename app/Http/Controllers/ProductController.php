<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductDetailResource;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return ProductResource::collection($products);
        }
        
    public function show($id){
        $product = Product::with('author:id,name')->findOrFail($id);
        return new ProductDetailResource($product);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required',
            'jarak' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'cc' => 'required',
            'harga' => 'required',
            'nego' => 'required',
            'kontak' => 'required',
        ]);

        $request['owner'] = Auth::user()->id;
        $product = Product::create($request->all());

        return new ProductDetailResource($product->loadMissing('author:id,name'));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required',
            'jarak' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'cc' => 'required',
            'harga' => 'required',
            'nego' => 'required',
            'kontak' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return new ProductDetailResource($product->loadMissing('author:id,name'));
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();

        return new ProductDetailResource($product->loadMissing('author:id,name'));
    }
}
