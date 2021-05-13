<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //all product
    public function products()
    {
        $product = Product::all();

        return response($product);
    }

    //specified product
    public function product(Request $request)
    {
        $product = Product::find($request->id);

        return response($product);
    }
}
