<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\DeclareDeclare;

class UserController extends Controller
{
    public function showProfile() {
//        dd(Auth::user());
        $id = Auth::id();
        $user = User::findOrFail($id);
        return view('my-profile', compact('user'));
    }
    public function updateProfile(Request $request) {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $user->fill($request->all());
        if ($request->hasFile('image')) {
            $image = time().'.'.$request->image->extension();
            $request->image->move(public_path('upload'), $image);
            $user->image = 'upload/'.$image;
        }

        // dd($request->all());
        $user->save();
        return redirect()->route('my-profile');
    }
}
