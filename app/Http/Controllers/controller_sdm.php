<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
class controller_sdm extends Controller
{
	 function index()
	{
		$all=DB::table('stafs')->paginate(2);
		return $all;
	}

	function show($id)
	{
		return json_encode(\DB::table('stafs')->find($id));
	}

	public function simpan(Request $request){
		$data= $request->only([
			'nama',
			'gender',
			'tempat_lahir',
			'tgl_lahir',
			'divisi',
			'no_izin',
			'alamat',
			'no_telp'
			]);
		$save=DB::table('stafs')->insert($data);
		return $save;
	}

	function update($id)
	{

	}

	function destroy($id)
	{

	}
}
