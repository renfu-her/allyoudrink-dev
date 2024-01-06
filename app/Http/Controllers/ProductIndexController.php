<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

class ProductIndexController extends Controller
{

    public function detail(Request $request, $product_id)
    {

        $product = Product::find($product_id);
        $productImages = ProductImage::where('product_id', $product_id)->get();

        return view(
            'frontend.product.product_detail',
            compact('product', 'productImages')
        );
    }
}
