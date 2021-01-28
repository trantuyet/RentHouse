<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', [AuthController::class,'showFormLogin'] )->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('', function (){
    return view('dashboard');
});

//Route::get('admincp/login', ['as' => 'getLogin', 'uses' => 'Admin\AdminLoginController@getLogin']);
//Route::post('admincp/login', ['as' => 'postLogin', 'uses' => 'Admin\AdminLoginController@postLogin']);
//Route::get('admincp/logout', ['as' => 'getLogout', 'uses' => 'Admin\AdminLoginController@getLogout']);
//
//Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
//    Route::get('/', function() {
//        return view('admin.home');
//    });
//});
