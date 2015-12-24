<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Redirect;
class controler_sidebar extends Controller
{
    public  function add() {
    $data=array(
    'id'=>"",
    'link'=>input::get('link'),
    'menu'=>input::get('menu'),
    'icon'=>input::get('icon'),
    'status'=>input::get('status')
    );
    $save=DB::table('tab_sidebar')->insert($data);
    $link=DB::table('tab_sidebar')->get();
    return view('sidebar_view')->with('link', $link);
}
public function delete($id){
	DB::table('tab_sidebar')->where('id','=',$id)->delete();
	return view('sidebar_view');
}
}
