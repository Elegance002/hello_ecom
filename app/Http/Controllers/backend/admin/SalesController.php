<?php

namespace App\Http\Controllers\backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function allOrders(){
        return view('backend.admin.pages.all_orders');
    }

    public function inhouseOrders(){
        return view('backend.admin.pages.inhouse_orders');
    }

    public function sellerOrders(){
        return view('backend.admin.pages.seller_orders');
    }

    public function pickupOrders(){
        return view('backend.admin.pages.pickup_orders');
    }
}
