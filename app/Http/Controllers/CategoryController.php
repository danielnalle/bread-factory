<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin/categories/categories');
    }
    public function create()
    {
        return view('admin/categories/create');
    }
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin/categories/edit', [
            'category' => $category,
        ]);
    }
}
