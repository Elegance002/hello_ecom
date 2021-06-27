<?php

namespace App\Http\Controllers\backend\vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function vendor(){
        return view('backend.vendor.pages.vendor');
    }
}
