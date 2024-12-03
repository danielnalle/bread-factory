<?php

namespace App\Http\Controllers;

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
    public function edit()
    {
        return view('admin/payment/edit');
    }
}
