<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin/products/products');
    }
    public function create()
    {
        return view('admin/products/create');
    }
    public function edit()
    {
        return view('admin/products/edit');
    }
}
