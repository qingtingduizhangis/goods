<?php

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

Route::get('/', function () {
    return view('welcome');
});

//第三周周考
Route::get('user/getUserinfo','UserController@getUserinfo')->name('user.getUserinfo');
Route::get('user/upUserform','UserController@upUserform')->name('user.upUserform');
Route::post('user/upUserdata','UserController@upUserdata')->name('user.upUserdata');
Route::get('user/addGoodsform','UserController@addGoodsform')->name('user.addGoodsform');
Route::post('user/addGoods','UserController@addGoods')->name('user.addGoods');
Route::get('user/getGoodslist','UserController@getGoodslist')->name('user.getGoodslist');
Route::get('user/delGoods','UserController@delGoods')->name('user.delGoods');
Route::get('user/upGoodsform','UserController@upGoodsform')->name('user.upGoodsform');
Route::post('user/upGoodsdata','UserController@upGoodsdata')->name('user.upGoodsdata');
Route::get('user/addInfoform','UserController@addInfoform')->name('user.addInfoform');
Route::post('user/addInfo','UserController@addInfo')->name('user.addInfo');
Route::get('user/getInfolist','UserController@getInfolist')->name('user.getInfolist');
Route::get('user/delInfo','UserController@delInfo')->name('user.delInfo');
Route::get('user/upInfoform','UserController@upInfoform')->name('user.upInfoform');
Route::post('user/upInfodata','UserController@upInfodata')->name('user.upInfodata');













