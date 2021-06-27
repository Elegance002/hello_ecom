<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function all_orders(Request $request){
        return view('backend.sales.all_orders.index');
    }

    public function admin_orders(Request $request){
        return view('backend.sales.inhouse_orders.index');
    }

    public function seller_orders(Request $request){
        return view('backend.sales.seller_orders.index');
    }

    public function pickup_point_order_index(Request $request){
        return view('backend.sales.pickup_point_orders.index');
    }
}
