<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use redirect;
class controler_pasien extends Controller
{
    public function lihat(){
        $link=DB::table('tab_sidebar')->get();
        $all=DB::table('tab_pasien')->get();
        return view('pasien')->with([
            'pasien'=>$all,
            'link'=>$link
            ]);

    }
    public function index(){
    	$link=DB::table('tab_sidebar')->get();
    	$all=DB::table('tab_pasien')->get();
        return $all;
    }
}
