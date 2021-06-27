<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function admin_products(Request $request)
    {
        return view('backend.product.products.index');
    }

    public function seller_products(Request $request)
    {
        return view('backend.product.products.index');
    }

    public function all_products(Request $request)
    {
        return view('backend.product.products.index');
    }

    public function create(){
        return view('backend.product.products.create');
    }
}
