<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddHouseRequest;
use Illuminate\Support\Facades\Session;

class HouseController extends Controller
{

    public function index()
    {
        return view('dashboard');    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(AddHouseRequest $request)
    {
        $house = new House();
        $house->name = $request->name;
        $house->price = $request->price;
        $house->address = $request->address;
        $house->typeOfRoom = $request->typeOfRoom;
        $house->bedRoom = $request->bedRoom;
        $house->bathRoom = $request->bathRoom;
        $house->user_id = $request->user_id;
        $house->desc = $request->desc;
        return redirect()->route('house.show-infor');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    public function rentHome(Request $request)
//    {
//        $userRent = [];
//        $userRent['id'] = $request->user_id;
//        $userRent['house_id'] = $request->house_id;
//        $userRent['checkIn'] = $request->checkIn;
//        $userRent['checkOut'] = $request->checkOut;
//
//        Session::put('userRent', $userRent);
//        // var_dump(Session::get('userRent'));
//        return redirect()->route('house.show-infor', $request->house_id);
//    }

    function showInfor()
    {
        return view('house.show-infor');
    }
}
