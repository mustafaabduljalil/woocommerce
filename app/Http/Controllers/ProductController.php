<?php

namespace App\Http\Controllers;

use Codexshaper\WooCommerce\Facades\Product;

class ProductController extends Controller
{
    // get products list
    public function list(){
        $products = Product::all();
        return $products;
    }
}
