<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard/products/products');
    }
    public function create()
    {
        return view('dashboard/products/create');
    }
    public function edit()
    {
        return view('dashboard/products/edit');
    }
}
