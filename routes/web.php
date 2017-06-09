<?php

Route::get('/', function () {
    return view('welcome');
});

//controller digunakan sebagai pengatur alur program
//latihan controller
//Route::get('test','PrakerinController@percobaan');
//Route::get('jurusan','PrakerinController@jurusan');
// Route::get('kelas','PrakerinController@kelas');
// Route::get('eskul','PrakerinController@ekstakulikuller');
// Route::get('guru','PrakerinController@namaguru');
// Route::get('matpel','PrakerinController@matapelajaran');
// Route::get('/{a}','PrakerinController@parameter');
Route::get('test1', 'CobaController@test');
Route::get('test2/{id}','CobaController@test2');
Route::get('tampilan','CobaController@indeex');
Route::get('data', 'CobaController@ulang');
Route::get('/{test}', 'CobaController@data');