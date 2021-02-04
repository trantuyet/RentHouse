<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddHouseRequest;
use Illuminate\Support\Facades\Session;

class HouseController extends Controller
{
    public function formAddHouse()
    {
        $categories = Category::all();
        return view('house.add-house', compact('categories'));
    }

    public function store(Request $request)
    {
        $house = new House();
        $house->fill($request->all());
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $path = $image->store('houses', 'public');
//            $house->image = $path;
//        }
        $house->user_id = Auth::id();
        $house->save();
        toastr()->success('Đăng nhà cho thuê thành công!');
        return redirect()->route('home');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
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

    public function showDetail($id)
    {
        $house = House::find($id);
        $user = User::find($house->user_id);
        return view('house.show-infor', compact('house', 'user'));
    }

    public function listHouse()
    {
        $houses = House::all();;
        return view('house.list-house', compact('houses'));
    }
//, compact('house')
}
