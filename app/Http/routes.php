<?php
Route::get('/', function(){
	return view('login');
});
Route::post('/login', 'controller_auth@auth');
Route::get('user','controller_user@index');
Route::get('/home', function(){
	return view('home');
});
Route::get('/adduser', 'controller_user@adduser');


Route::post('/simpan_pasien', 'controler_pasien@simpan');

Route::get('/pasien', 'controler_pasien@index');
Route::post('/add_sidebar', 'controler_sidebar@add');
Route::post('/sidebar_delete/{$id}', 'controler_sidebar@delete');

Route::get('/sdm', 'controller_sdm@index');
Route::get('/sdm/{id}', 'controller_sdm@show');
Route::post('/sdm', 'controller_sdm@simpan');
Route::post('/sdm/{id}', 'controller_sdm@update');
Route::delete('/sdm/{id}', 'controller_sdm@destroy');
