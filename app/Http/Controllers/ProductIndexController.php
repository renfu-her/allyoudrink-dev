<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductIndexController extends Controller
{
    
    public function detail(Request $request, $product_id){

        $product = Product::find($product_id);

        return view('frontend.product.product_detail', compact('product'));
    }
}
