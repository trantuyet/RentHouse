<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $houses = House::where('status','=', StatusConst::LEASE)->get();
        return view('dashboard', compact('houses'));
    }
}
