<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    function changePassword(){
        return view('changepassword');
    }

    function updatePassword(ChangePasswordRequest $request): \Illuminate\Http\RedirectResponse
    {
        if (!(Hash::check($request->get('current-password'),Auth::user()->password))){

            return redirect()->back()->with("Lỗi","Mật khẩu hiện tại không được trùng với mật khẩu hiện tại, vui lòng nhập lại mật khẩu");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0){

            return redirect()->back()->with("Lôi","Mật khâu mới không giống với mật khẩu hiện tại, vui lòng nhập lại");
        }


        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->route('home')->with("Đổi mật khẩu thành công ");

    }

}
