<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('dashboard/payment/payment');
    }
    public function create()
    {
        return view('dashboard/payment/create');
    }
    public function edit($id)
    {
        $payment = PaymentMethod::where('id', $id)->first();
        return view('dashboard/payment/edit', [
            'payment' => $payment,
        ]);
    }
}
