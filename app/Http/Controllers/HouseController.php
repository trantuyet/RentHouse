<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddHouseRequest;
use Illuminate\Support\Facades\Session;
class HouseController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function postHouse(AddHouseRequest $request)
    {
        $house = new House();
        $house->name = $request->name;
        $house->price = $request->price;
        $house->address = $request->address;
        $house->typeOfRoom = $request->typeOfRoom;
        $house->bedroom = $request->bedroom;
        $house->bathroom = $request->bathroom;
        $house->user_id = $request->user_id;
        $house->desc = $request->desc;
        return redirect()->route('show-info');
    }

//    public function detail($id) {
//        $house = \App\Models\House::findOrFail($id);
//        return view('frontend.house.detail-house', compact('house'));
//    }

    public function rentHome(Request $request)
    {
        $userRent = [];
        $userRent['id'] = $request->user_id;
        $userRent['house_id'] = $request->house_id;
        $userRent['checkIn'] = $request->checkIn;
        $userRent['checkOut'] = $request->checkOut;

        Session::put('userRent', $userRent);
        // var_dump(Session::get('userRent'));
        return redirect()->route('show-info', $request->house_id);
    }

    public function showHouseList($id)
    {

        $houses = DB::table('bills')
            ->join('users as user_rent', 'bills.user_id', 'user_rent.id')
            ->join('houses', 'bills.house_id', 'houses.id')
            ->join('users', 'houses.user_id', 'users.id')
            ->select('bills.*', 'houses.name as house_name', 'users.name', 'users.phone', 'user_rent.name as rent_name')
            ->where('user_rent.id', $id)
            ->get();

        $totalPriceByUser = DB::table('bills')
            ->join('users', 'bills.user_id', 'users.id')
            ->select('users.*', DB::raw('SUM(bills.totalPrice) as total'))
            ->groupBy('users.name')
            ->having('users.id', '=', $id)
            ->get();
        return view('frontend.house.house-order', compact('houses', 'totalPriceByUser'));

    }
}
