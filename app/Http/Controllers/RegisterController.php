<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => ['required', 'min:3', 'max:255'],
            'role' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);


        User::create($validatedData);


        return redirect('/login')->with('success', 'Anda berhasil melakukan registrasi!');
    }
}
