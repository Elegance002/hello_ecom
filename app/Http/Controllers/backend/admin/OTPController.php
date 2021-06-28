<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OTPController extends Controller
{
    public function configure_index(){
        return view('backend.otp.configure_intex');
    }

    public function credentials_index(){
        return view('backend.otp.credential_index');
    }
}
