<?php

namespace App\Http\Controllers;

use App\Models\BreadType;
use Illuminate\Http\Request;

class BreadTypeController extends Controller
{
    public function index()
    {
        return view('dashboard/bread_types/bread_types');
    }
    public function create()
    {
        return view('dashboard/bread_types/create');
    }
    public function edit($id)
    {
        $bread_type = BreadType::where('id', $id)->first();
        return view('dashboard/bread_types/edit', [
            'bread_type' => $bread_type,
        ]);
    }
}
