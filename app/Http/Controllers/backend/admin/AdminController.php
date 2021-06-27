<?php

namespace App\Http\Controllers\backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin(){
        return view('backend.dashboard');
    }
}
