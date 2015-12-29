<?php

namespace App\Http\Controllers;

class controller_sdm extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
	 function index()
	{
		$all=DB::table('tab_sdm')->paginate(2);
		return $all;
=======
	function index()
	{
		return \DB::table('tab_sdm')->get();
>>>>>>> parent of 42e7774... pagination + search
=======
	function index()
	{
		return \DB::table('tab_sdm')->get();
>>>>>>> parent of 42e7774... pagination + search
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
