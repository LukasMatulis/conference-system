<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id'=>1, 'name'=>'Lukas Matulis', 'email'=>'lukas@example.com'],
            ['id'=>2, 'name'=>'Jonas Jonaitis', 'email'=>'jonas@example.com']
        ];

        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = ['id'=>$id, 'name'=>'Lukas Matulis', 'email'=>'lukas@example.com'];
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        return redirect()->route('admin.users.index');
    }
}