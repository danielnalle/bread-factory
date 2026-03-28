<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('dashboard/customers/customers');
    }

    public function create()
    {
        return view('dashboard/customers/create');
    }
    public function edit()
    {
        return view('dashboard/customers/edit');
    }
}
