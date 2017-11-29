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

Auth::routes();

// 获取验证码
Route::get('/captcha',function(){
    return \Mews\Captcha\Facades\Captcha::create();
})->name('getCaptcha');

Route::get('/usercenter', 'UserCenterController@index')->name('user.center');
Route::get('/home', 'HomeController@index')->name('home');
