<?php

namespace App\Http\Controllers;
use DB;
class controller_sdm extends Controller
{
	 function index()
	{
		$all=DB::table('tab_sdm')->paginate(2);
		return $all;
	}

	function show($id)
	{
		return json_encode(\DB::table('tab_sdm')->find($id));
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
			'no_tlp'
			]);
		$save=DB::table('tab_sdm')->insert($data);
		return $data;
	}

	function update($id)
	{

	}

	function destroy($id)
	{

	}
}
