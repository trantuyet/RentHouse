<?php

use App\Http\Controllers\HouseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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



Route::get('show-infor', [HouseController::class, 'showInfor']);
Route::get('list-house', [HouseController::class, 'listHouse']) ->name('listHouse');
Route::get('/add-house', [HouseController::class, 'index']) ->name('house.showAddHouse');
Route::post('/add-house', [HouseController::class, 'formAddHouse']) ->name('house.addhouse');
Route::get('/login', [AuthController::class,'showFormLogin'] )->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/register', [AuthController::class,'showFormRes'])->name('showFormRes');
Route::post('/register', [AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/changePassword',[ChangePasswordController::class,'changePassword'])->name('changePassword');
Route::post('/changePassword',[ChangePasswordController::class,'updatePassword'])->name('updatePassword');
Route::get('/my-profile',[UserController::class,'showProfile'])->name('my-profile');
Route::post('/my-profile', [UserController::class,'updateProfile'])->name('profile.update');
