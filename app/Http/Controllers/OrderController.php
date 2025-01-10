<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('dashboard/orders/orders');
    }
    public function detail($order)
    {
        $order = Order::where('no_order', $order)->first();
        return view('dashboard/orders/detail', [
            'order' => $order,
        ]);
    }
}
