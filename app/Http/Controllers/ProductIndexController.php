<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Banner;
use App\Models\ProductCategory;

class ProductIndexController extends Controller
{

    public function index(Request $request)
    {
        $data = $request->all();

        if (!empty($data['category'])) {
            $products = Product::where('category_id', $data['category'])->get();
        } else {
            $products = Product::get();
        }

        $categories = ProductCategory::where('parent_id', 0)->with('children')->get();
        $banners = Banner::orderByDesc('sort', 1)->where('status', 1)->get();

        $productCategory = ProductCategory::where('parent_id', 0)->get();

        return view('frontend.product.product', compact('products', 'categories', 'banners', 'productCategory'));
    }

    public function detail(Request $request, $product_id)
    {
        $banners = Banner::orderByDesc('sort', 1)->where('status', 1)->get();
        $product = Product::find($product_id);
        $productImages = ProductImage::where('product_id', $product_id)->get();

        return view(
            'frontend.product.product_detail',
            compact('product', 'productImages', 'banners')
        );
    }
}
