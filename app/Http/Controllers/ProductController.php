<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductDetailResource;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        $heroproducts = Product::orderBy('jarak', 'asc')->take(3)->get();
        return view('ecommerce.index', compact('products', 'heroproducts'));
    }

    public function show($id)
    {
        $product = Product::with('author:id,name')->findOrFail($id);
        $slideproduct = Product::orderBy('jarak', 'desc')->take(3)->get();
        $sprod = Product::orderBy('jarak', 'asc')->take(3)->get();
        // return new ProductDetailResource($product);
        return view('product.index', compact('product', 'slideproduct', 'sprod'));
    }

    public function nego($id){
        $product = Product::with('author:id,name')->findOrFail($id);
        return view('product.negotiate', compact('product'));
    }

    public function beli($id){
        $product = Product::with('author:id,name')->findOrFail($id);
        $user = Auth::user();
        return view('product.buy', compact('product', 'user'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'nego' => $request->input('nego') === 'true' ? true : false
        ]);

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

        $image = '';

        if ($request->hasFile('image')) {
            $fileName = $this->generateRandomString();
            $extension = $request->file('image')->getClientOriginalExtension();
            $image = $fileName . '.' . $extension;

            // Storage::putFileAs('image', $request->file('image'), $image);
            $request->file('image')->move(public_path('images'), $image);

            // if (file_exists(public_path('images/' . $image))) {
            //     dd('File successfully moved to: ' . public_path('images/' . $image));
            // } else {
            //     dd('File not found after moving: ' . public_path('images/' . $image));
            // }


            // dd($request->image);
        }

        // $request['image'] = $image;
        // $request['owner'] = Auth::user()->id;
        $product = new Product($validated);
        $product->image = $image;
        $product->owner = Auth::user()->id;
        $product->save();
        // $product = Product::create($request->all());

        return redirect()->route('seller.dashboard')->with('success', 'Product updated successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->merge([
            'nego' => $request->input('nego') === 'true' ? true : false
        ]);

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
        return redirect()->route('seller.dashboard')->with('updateSuccess', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('seller.dashboard')->with('deleteSuccess', 'Product updated successfully!');
    }

    public function sellerproduct($id = null)
    {
        $seller = Auth::user()->id;
        $products = Product::orderBy('created_at', 'DESC')->where('owner', $seller)->paginate(3);
        $productToUpdate = null;

        if ($id) {
            $productToUpdate = Product::find($id);
        }

        return view('seller.dashboard', compact('products', 'productToUpdate'));
    }

    function generateRandomString($length = 40)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
