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

        $categories = ProductCategory::whereNull('parent_id')->with('children')->get();

        dd($categories);

        return view('index', compact('products', 'categories'));
    }
}
