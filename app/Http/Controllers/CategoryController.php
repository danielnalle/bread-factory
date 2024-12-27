<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('dashboard/categories/categories');
    }
    public function create()
    {
        return view('dashboard/categories/create');
    }
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('dashboard/categories/edit', [
            'category' => $category,
        ]);
    }
}
