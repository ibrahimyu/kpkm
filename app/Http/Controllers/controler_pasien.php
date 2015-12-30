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

        $all=DB::table('pasiens')->get();
        return view('pasien')->with([
            'pasien'=>$all

            ]);

    }
    public function index(Request $request){

        if ($request->q)
        {
            $q = $request->q;
            return DB::table('pasiens')
                ->where('no_rm', 'LIKE', "%$q%")
                ->orWhere('nama', 'LIKE', "%$q")
                ->orWhere('tanggal_lahir', 'LIKE', "%$q")
                ->orWhere('alamat', 'LIKE', "%$q")
                ->orWhere('no_telp', 'LIKE', "%$q")
                ->paginate(15);
        }

    	$all=DB::table('pasiens')->paginate(15);
        return $all;
    }
    public function simpan(Request $request){
        $data= $request->only([
            'no_rm',
            'no_ktp',
            'nama',
            'gender',
            'tanggal_lahir',
            'alamat',
            'pendidikan',
            'pekerjaan',
            'pernikahan',
            'agama',
            'status_keluarga',
            'no_telp',
            'jaminan'
            ]);

        $save=DB::table('pasiens')->insert($data);
        return $save;
    }
}
