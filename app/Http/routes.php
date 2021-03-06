<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return view('home');
});

Route::get('/sidebar', function () {
	$link=DB::table('tab_sidebar')->get();
    return view('sidebar_view')->with('link', $link);
});

Route::post('/simpan_pasien', 'controler_pasien@simpan');

Route::get('/pasien', 'controler_pasien@index');
Route::post('/add_sidebar', 'controler_sidebar@add');
Route::post('/sidebar_delete/{$id}', 'controler_sidebar@delete');

Route::get('/sdm', 'controller_sdm@index');
Route::get('/sdm/{id}', 'controller_sdm@show');
Route::post('/sdm', 'controller_sdm@simpan');
Route::put('/sdm/{id}', 'controller_sdm@update');
Route::delete('/sdm/{id}', 'controller_sdm@destroy');
