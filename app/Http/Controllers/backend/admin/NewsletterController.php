<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(Request $request)
    {
        // $users = User::all();
        // $subscribers = Subscriber::all();
        return view('backend.marketing.newsletters.index');
    }
}
