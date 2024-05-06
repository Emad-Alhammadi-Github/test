<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Cat_Controller;
use App\Http\Controllers\Items_Controller;
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

// Route::get('/', function () {
//     return view('layout');
// });


// Route::controller(LoginController::class)->group(function(){
//     Route::get('adminlogin','indexadmin')->name('login.admin'); 
//     Route::post('adminlogin','admlogin')->name('adlogin'); 
    
//     Route::get('user','index')->name('login')->middleware('guest'); 
//     Route::post('user','login')->name('login')->middleware('guest'); 

//     Route::get('user/create','create');
//     Route::post('user/insert','insert')->name('user.insert');

// });

Route::controller(AuthController::class)->group(function(){
    Route::post('logut','logouta')->name('logout')->middleware('auth'); 

});


// Admin 
Route::controller(UserController::class)->group(function(){
    Route::get('/','showindex')->name('show.index');
    Route::get('/userall','showall')->name('userall.showall'); 
    Route::get('/userall/{id}/edit','edit')->name('userall.edit'); 
    Route::put('/userall/{id}','updata')->name('userall.updata'); 
    Route::delete('/userall/{id}','destroy')->name('userall.destroy'); 

    Route::post('/','Search')->name('serch.index'); 


    Route::get('/showit/{id}','showuseritem')->name('showit.showuser'); 
    Route::get('/card/{id}','carduseritem')->name('cardusers.carduser'); 

    Route::get('/cardcou','cardcount')->name('cardcount.cardcount'); 

  
});

Route::controller(Items_Controller::class)->group(function(){
    Route::get('/items','index')->name('items.index'); 
    Route::get('/items/create','create')->name('items.create'); 
    Route::post('/items','store')->name('items.store'); 
    Route::get('/items/{id}','show')->name('items.show'); 
    Route::get('/items/{id}/edit','edit')->name('items.edit'); 
    Route::put('/items/{id}','updata')->name('items.updata'); 
    Route::delete('/items/{id}','destroy')->name('items.destroy'); 



});

Route::controller(Cat_Controller::class)->group(function(){
    Route::get('/catogries','index')->name('cat.index'); 
    Route::get('/catogries/create','create')->name('cat.create');
    Route::post('/catogries','store')->name('cat.store');  
    Route::delete('/catogries/{id}','destroy')->name('cat.destroy'); 
    Route::get('/catogries/{id}/edit','edit')->name('cat.edit'); 
    Route::put('/catogries/{id}','updata')->name('cat.updata'); 
});


// Route::post('/', [Items_Controller::class,'Search'])->name('serch.index');
// Route::get('eme', function () {
//     return view('admin/login');
// });


