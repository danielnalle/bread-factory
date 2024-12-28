<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('dashboard/products/edit', [
            'product' => $product,
        ]);
    }
}
