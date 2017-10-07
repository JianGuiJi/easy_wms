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


## 主页
Route::get('/', '\App\Http\Controllers\RouteController@RouteIndex');

# 商品页面
Route::get('/goods', '\App\Http\Controllers\RouteController@RouteGoods');

# 入库页面
Route::get('/storage', '\App\Http\Controllers\RouteController@RouteStorage');
# 出库页面
Route::get('/outstorage', '\App\Http\Controllers\RouteController@RouteOutStorage');


