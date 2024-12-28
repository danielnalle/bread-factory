<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard/users/users');
    }

    public function create()
    {
        return view('dashboard/users/create');
    }
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard/users/edit', [
            'user' => $user,
        ]);
    }
}
