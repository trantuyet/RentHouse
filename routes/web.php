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
Route::get('redirect', [\App\Http\Controllers\SocialController::class, 'redirect'])->name('redirect');
Route::get('callback', [\App\Http\Controllers\SocialController::class, 'callback']);
Route::middleware('auth')->group(function () {
    // Router me
    Route::prefix('me')->group(function () {
        Route::get('/change-password', [ChangePasswordController::class, 'changePassword'])->name('changePassword');
        Route::post('/change-password', [ChangePasswordController::class, 'updatePassword'])->name('updatePassword');
        Route::get('/profile', [UserController::class, 'showProfile'])->name('me.profile');
        Route::post('/profile', [UserController::class, 'updateProfile'])->name('profile.update');

        Route::prefix('houses')->group(function (){
            Route::get('/', [UserController::class, 'getListHouseOfUser'])->name('me.getListHouseOfUser');
            Route::get('/add-house', [HouseController::class, 'formAddHouse'])->name('me.showAddHouse');
            Route::post('/add-house', [HouseController::class, 'store'])->name('house.addhouse');
        });

    });
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Router  house
Route::prefix('houses')->group(function (){
    Route::get('/', [HouseController::class, 'listHouse'])->name('listHouse');
    Route::get('/{id}/detail', [HouseController::class, 'showDetail'])->name('houses.showDetail');
});
