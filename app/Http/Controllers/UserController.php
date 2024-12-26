<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin/users/users');
    }

    public function create()
    {
        return view('admin/users/create');
    }
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin/users/edit', [
            'user' => $user,
        ]);
    }
}
