<?php

namespace App\Services;

use App\Services\Service;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductCategory;

/**
 * Class CartService
 * @package App\Services
 */
class IndexService extends Service
{

    // cart item
    public function product($req){

        $products = Product::get();

        $productCategories = ProductCategory::get();
        
    }

}
