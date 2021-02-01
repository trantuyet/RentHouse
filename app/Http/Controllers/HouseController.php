<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddHouseRequest;
use Illuminate\Support\Facades\Session;

class HouseController extends Controller
{

    public function index()
    {
        return view('house.add-house');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function formAddHouse(Request $request): \Illuminate\Http\RedirectResponse
    {

        if ($request->hasFile('photo')){
            $arr_images = array();
            $inputfile =  $request->file('photo');
            foreach ($inputfile as $filephoto) {
                $namefile = "house-"."-".$filephoto->getClientOriginalName();
                while (file_exists('uploads/images'.$namefile)) {
                    $namefile = "house-"."-".$filephoto->getClientOriginalName();
                }
                $arr_images[] = $namefile;
                $filephoto->move('uploads/images',$namefile);
            }
            $json_img =  json_encode($arr_images,JSON_FORCE_OBJECT);
        }
        else {
            $arr_images[] = "no_img_room.png";
            $json_img = json_encode($arr_images,JSON_FORCE_OBJECT);
        }
        $house = new House();
        $house->name = $request->name;
        $house->pricePerDay = $request->pricePerDay;
        $house->address = $request->address;
        $house->typeOfRoom = $request->typeOfRoom;
        $house->numberOfBedroom = $request->numberOfBedroom;
        $house->numberOfBathroom = $request->numberOfBathroom;
        $house->user_id = $request->user_id;
        $house->desc = $request->desc;
        $house -> save();
        return redirect()->route('home');
//
//        if ($request->hasFile('photos')) {
//            $allowedfileExtension = ['jpg', 'png', 'jpeg'];
//            $files = $request->file('photos');
//            $exe_flg = true;
//            foreach ($files as $file) {
//                $extension = $file->getClientOriginalExtension();
//                $check = in_array($extension, $allowedfileExtension);
//                if (!$check) {
//                    $exe_flg = false;
//                    break;
//                }
//            }
//            if ($exe_flg) {
//                $house->save();
//                foreach ($request->photos as $photo) {
//                    $filename = $photo->store('images', 'public');
//                    $image = new Image();
//                    $image->image = $filename;
//                    $image->house_id = $house->id;
//                    $image->save();
//                }
//                return redirect()->route('home');
//            } else {
//
//                return redirect()->route('listHouse');
//            }

//        }

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

    public function showInfor() {
//        $house = House::findOrFail($id);
        return view('house.show-infor');
    }
    public function listHouse() {
        return view('house.list-house');
    }
//, compact('house')
}
