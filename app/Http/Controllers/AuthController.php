<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auths.index');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
           'userID' => 'required',
           'password' => 'required'
        ]);

        return redirect()->route('index');
    }

}
