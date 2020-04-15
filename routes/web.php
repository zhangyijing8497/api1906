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

Route::post('/reg','User\LoginController@reg');  //注册
Route::post('/login','User\LoginController@login');  //登陆
Route::get('/logout','User\LoginController@logout');  //退出登陆
