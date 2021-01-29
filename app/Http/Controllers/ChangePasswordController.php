<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    function changePassword(){
        return view('changepassword');
    }

    function updatePassword(Request $request): \Illuminate\Http\RedirectResponse
    {
        if ((Hash::check($request->get('current-password'),$request->password))){

            return redirect()->back();
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0){

            return redirect()->back();
        }

        $user = new User();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->route('home');
    }
}
