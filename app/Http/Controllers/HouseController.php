<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class HouseController extends Controller
{
    public function formAddHouse() {
        return view('house.add-house');
    }
    public function showInfor() {
//        $house = House::findOrFail($id);
        return view('house.show-infor');
    }
    public function listHouse() {
        return view('house.list-house');
    }
//, compact('house')
}
