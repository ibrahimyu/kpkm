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
Route::get('/add_sidebar', function () {
    $link=DB::table('tab_sidebar')->get();
    return view('add_sidebar')->with('link', $link);
});

Route::get('/pasien', 'controler_pasien@index');
Route::post('/add_sidebar', 'controler_sidebar@add');
Route::post('/sidebar_delete/{$id}', 'controler_sidebar@delete');
