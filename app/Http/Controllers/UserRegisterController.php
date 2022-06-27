<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('auths.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'userID' => 'required',
            'password' => 'confirmed|required',
            'name' => 'required',
            'resno' => 'required',
            'email' => 'required',
            'address01' => 'required',
            'address02' => 'required'
        ]);
        return redirect()->route('auths.index');
    }
}
