<?php

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

//topページのモック
Route::get('/', function () {
    return view('welcome');
});

//マイページのモック
Route::get('/mypage', function () {
    return view('mypage');
});

//ポイント購入ページのモック
Route::get('/point_buy', function () {
    return view('point_buy');
});

//ポイント送信ページのモック
Route::get('/point_send', function () {
    return view('point_send');
});