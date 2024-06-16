<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductDetailResource;
use Illuminate\Http\Request;
use App\Models\Product;

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
}
