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
    public function edit()
    {
        return view('admin/users/edit');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees',
            'position' => 'required|string|max:255',
        ]);

        // Simpan data pegawai
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.employees.index')->with('success', 'Pegawai berhasil ditambahkan!');
    }
}
