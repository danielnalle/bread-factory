<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('admin/payment/payment');
    }
    public function create()
    {
        return view('admin/payment/create');
    }
    public function edit($id)
    {
        $payment = PaymentMethod::where('id', $id)->first();
        return view('admin/payment/edit', [
            'payment' => $payment,
        ]);
    }
}
