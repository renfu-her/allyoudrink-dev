<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Banner;

// use App\Services\IndexService as Service;
class IndexController extends Controller
{
    // index
    public function home(Request $request)
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

        return view(
            'frontend.index',
            compact(
                'products',
                'categories',
                'banners',
                'productCategory',
                'data'
            )
        );
    }
}
