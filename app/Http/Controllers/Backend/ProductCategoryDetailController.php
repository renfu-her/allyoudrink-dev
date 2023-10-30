<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ProductCategory;

class ProductCategoryDetailController extends Controller
{
     // 產品首頁
     public function index(Request $request)
     {
 
        $req = $request->all();

         $product_categories = ProductCategory::where('parent_id', $req['parent_id'])->get();
         foreach ($product_categories as $product_category) {
             $product_category->parent_name = $product_category->name;
         }
         
         return view(
             'backend.product_category_detail.index',
             compact(
                 'product_categories',
             )
         );
     }
 
     // 產品新增頁面
     public function create(Request $request)
     {
 
        $req = $request->all();

         $product_categories = ProductCategory::where('parent_id', $req['parent_id'])->get();
         $categories = [];
         $categories[0] = '無上層分類';
         foreach($product_categories as $key => $product_category){
             $categories[$product_category->id] =  $product_category->name;
         }
         
         return view('backend.product_category_detail.create', compact('categories'));
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
     public function edit(Request $request, $categoryId)
     {
         $product_category = ProductCategory::find($categoryId);
         $product_categories = ProductCategory::all();
         $categories = [];
         $categories[0] = '無上層分類';
         foreach($product_categories as $key => $product_category){
             $categories[$product_category->id] =  $product_category->name;
         }
 
         return view(
             'backend.product_category_detail.edit',
             compact('product_category','categories')
         );
     }
 
     // 產品編輯儲存
     public function update(Request $request, $categoryId)
     {
 
         $data = ProductCategory::find($categoryId);
         $data->parent_id = $request->parent_id;
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
