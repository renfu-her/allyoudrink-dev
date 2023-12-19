<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    // 產品首頁
    public function index(Request $request)
    {

        $product_categories = ProductCategory::where('parent_id', 0)->get();
        foreach ($product_categories as $product_category) {
            $product_category->parent_name = $product_category->name;
        }
        
        return view(
            'backend.product_category.index',
            compact(
                'product_categories',
            )
        );
    }

    // 產品新增頁面
    public function create(Request $request)
    {

        $product_categories = ProductCategory::all();
        $categories = [];
        $categories[0] = '無上層分類';
        foreach($product_categories as $key => $product_category){
            $categories[$product_category->id] =  $product_category->name;
        }
        
        return view('backend.product_category.create', compact('categories'));
    }

    // 產品新增儲存
    public function store(Request $request)
    {

        $req = $request->all();

        $data = new ProductCategory();
        $data->parent_id = 0;
        $data->name = $req['name'];
        $data->sort = $req['sort'];
        $data->save();


        return redirect('/backend/product_category');
    }

    // 產品編輯頁面
    public function edit(Request $request, $id)
    {
        $product_category = ProductCategory::where('id', '=', $id)->first();
        // $product_categories = ProductCategory::all();
        
        dd($product_category->toArray());
        
        // $categories = [];
        // $categories[0] = '無上層分類';
        // foreach($product_categories as $key => $product_category){
        //     $categories[$product_category->id] =  $product_category->name;
        // }

        return view(
            'backend.product_category.edit',
            compact('product_category')
        );
    }

    // 產品編輯儲存
    public function update(Request $request, $productId)
    {

        $data = ProductCategory::find($productId);
        $data->parent_id = 0;
        $data->name = $request->name;
        $data->sort = $request->sort;
        $data->save();

        return redirect('/backend/product_category');
    }

    // 產品刪除
    public function delete(Request $request, $id)
    {
        $product = ProductCategory::find($id);
        $product->delete();

        return redirect('/backend/product_category');
    }
}
