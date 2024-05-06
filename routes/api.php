<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(LoginController::class)->group(function(){
    Route::get('adminlogin','indexadmin')->name('login.admin'); 
    Route::post('adminlogin','admlogin')->name('adlogin'); 
    
    Route::get('user','index')->name('login')->middleware('guest'); 
    Route::post('user','login')->name('login')->middleware('guest'); 

    Route::get('user/create','create');
    Route::post('user/insert','insert')->name('user.insert');

});
