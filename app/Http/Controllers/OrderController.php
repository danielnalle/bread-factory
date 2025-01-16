<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStatus;
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
        $order_status = OrderStatus::all();
        return view('dashboard/orders/detail', [
            'order' => $order,
            'order_status' => $order_status
        ]);
    }
}
