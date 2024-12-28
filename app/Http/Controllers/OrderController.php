<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('dashboard/orders/orders');
    }
    public function detail()
    {
        return view('dashboard/orders/detail');
    }
}
