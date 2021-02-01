<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function showFormLogin()
    {

        return view('login');
    }

    function login(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $email = $request->email    ;
        $password = $request->password;

        $data = [
            'email' => $email,
            'password' => $password
        ];
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            Session::push('login',true);
            return redirect()->route('home');
        }
        return redirect()->route('login');
    }

    function register(RegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->image = 'upload/default.png';
        $user->save();

        return redirect()->route('login');

    }

    function showFormRes()
    {
        return view('register');
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }

}
