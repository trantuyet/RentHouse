<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showFormLogin()
    {

        return view('login');
    }

    function login(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $username = $request->username;
        $password = $request->password;

        $data = [
            'email' => $username,
            'password' => $password
        ];
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }

}
