<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use redirect;
use Input;
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
    public function simpan(Request $request){
        $data= $request->only([
            'no_rm',
            'nama',
            'kode_jenis_kelamin',
            'tempat_lahir',
            'tgl_lahir',
            'alamat',
            'no_telp'
            ]);
        
        $save=DB::table('tab_pasien')->insert($data);
        return $data;
    }
}
