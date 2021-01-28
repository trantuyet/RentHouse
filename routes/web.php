<?php

use App\Http\Controllers\HouseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('show-infor', [HouseController::class, 'showInfor']);
Route::get('/register', [AuthController::class,'showFormRes'])->name('showFormRes');
Route::post('/register', [AuthController::class,'register'])->name('register');

Route::get('/', [HomeController::class, 'index'])->name('home');


