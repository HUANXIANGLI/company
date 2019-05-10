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

//前台主页
Route::get('/index', 'Index\IndexController@index');
Route::get('/contact', 'Index\IndexController@contact');
Route::get('/single', 'Index\IndexController@single');

//前台登录页面
Route::get('/login', 'Index\LoginController@login');
