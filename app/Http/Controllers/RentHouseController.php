<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\House;

class RentHouseController extends Controller
{
    public function rentHouse(Request $request) {
        $user= new User();
        $user->$request->user_id;
        $house = new House;
        
    }
}
