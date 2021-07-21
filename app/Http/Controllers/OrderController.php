<?php

namespace App\Http\Controllers;

use Codexshaper\WooCommerce\Facades\Order;

class OrderController extends Controller
{
    // get orders list
    public function list(){
        $orders = Order::all();
        return response()->json($orders);
    }
}
