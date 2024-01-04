<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ProductCategory;

class ProductCategoryDetailController extends Controller
{
    // 產品首頁
    public function index(Request $request, $categoryId)
    {

        $req = $request->all();

        $product_categories = ProductCategory::where('parent_id', $categoryId)->get();
        foreach ($product_categories as $product_category) {
            $product_category->parent_name = $product_category->name;
        }

        $productCategory = ProductCategory::where('id', $categoryId)->first();

        return view(
            'backend.product_category_detail.index',
            compact(
                'product_categories',
                'productCategory'
            )
        );
    }

    // 產品新增頁面
    public function create(Request $request, $categoryId)
    {

        $req = $request->all();

        $product_categories = ProductCategory::where('id', $categoryId)->first();

        return view('backend.product_category_detail.create', compact('product_categories'));
    }

    // 產品新增儲存
    public function store(Request $request)
    {

        $req = $request->all();

        $data = new ProductCategory();
        $data->parent_id = $req['parent_id'];
        $data->name = $req['name'];
        $data->sort = $req['sort'];
        $data->save();


        return redirect('/backend/product_category/detail/' . $req['parent_id']);
    }

    // 產品編輯頁面
    public function edit(Request $request, $categoryId, $categoryDetailId)
    {
        $product_category = ProductCategory::find($categoryDetailId);

        return view(
            'backend.product_category_detail.edit',
            compact('product_category', 'categoryId', 'categoryDetailId')
        );
    }

    // 產品編輯儲存
    public function update(Request $request, $categoryId)
    {

        $data = ProductCategory::find($categoryId);
        $data->name = $request->name;
        $data->sort = $request->sort;
        $data->save();

        return redirect('/backend/product_category/detail/' . $request->parent_id);
    }

    // 產品刪除
    public function delete(Request $request, $categoryId)
    {
        $product = ProductCategory::find($categoryId);
        $product->delete();

        return redirect('/backend/product_category/detail/' . $request->parent_id);
    }
}
