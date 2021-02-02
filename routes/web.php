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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showFormRes'])->name('showFormRes');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('redirect', [\App\Http\Controllers\SocialController::class, 'redirect'])->name('redirect');
Route::get('callback', [\App\Http\Controllers\SocialController::class, 'callback']);
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/changePassword', [ChangePasswordController::class, 'changePassword'])->name('changePassword');
        Route::post('/changePassword', [ChangePasswordController::class, 'updatePassword'])->name('updatePassword');
        Route::get('/my-profile', [\App\Http\Controllers\UserController::class, 'showProfile'])->name('myProfile');
        Route::post('/my-profile', [\App\Http\Controllers\UserController::class, 'updateProfile'])->name('profileUpdate');
    });
    Route::group(['prefix' => 'house'], function () {
        Route::get('show-infor', [HouseController::class, 'showInfor']);
        Route::get('add-house', [HouseController::class, 'formAddHouse']);
    });
});
