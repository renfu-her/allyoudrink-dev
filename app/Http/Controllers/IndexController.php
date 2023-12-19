<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductCategory;

// use App\Services\IndexService as Service;
class IndexController extends Controller
{
    // index
    public function home(Request $request)
    {

        $req = $request->all();

        $products = Product::get();

        $categories = ProductCategory::where('parent_id', 0)->with('children')->get();

        return view('frontend.index', compact('products', 'categories'));
    }
}
