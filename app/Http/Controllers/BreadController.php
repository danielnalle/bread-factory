<?php

namespace App\Http\Controllers;

use App\Models\Bread;
use Illuminate\Http\Request;

class BreadController extends Controller
{
    public function index()
    {
        return view('dashboard/breads/breads');
    }
    public function create()
    {
        return view('dashboard/breads/create');
    }
    public function edit($id)
    {
        $bread = Bread::where('id', $id)->first();
        return view('dashboard/breads/edit', [
            'bread' => $bread,
        ]);
    }
}
