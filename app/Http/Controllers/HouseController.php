<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function showInfor() {
        return view('house.show-infor');
    }
}
