<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register(Register $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

    }

    function showFormRes()
    {
        return view('register');
    }
}
