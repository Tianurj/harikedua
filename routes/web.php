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

//controller digunakan sebagai pengatur alur program
//latihan controller
Route::get('test','PrakerinController@percobaan');
Route::get('jurusan','PrakerinController@jurusan');
Route::get('kelas','PrakerinController@kelas');
Route::get('eskul','PrakerinController@ekstakulikuller');
Route::get('guru','PrakerinController@namaguru');
Route::get('matpel','PrakerinController@matapelajaran');
Route::get('/{a}','PrakerinController@parameter');
