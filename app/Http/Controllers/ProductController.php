<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductDetailResource;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        $image = null;

        if ($request->file) {
            $fileName = $this->generateRandomString();
            $extension = $request->file->extension();
            $image = $fileName . '.' . $extension;

            Storage::putFileAs('image', $request->file, $image);
        }

        $request['image'] = $image;
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

    function generateRandomString($length = 40) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
