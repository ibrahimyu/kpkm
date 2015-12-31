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
			'code',
			'fullname',
			'gender',
			'tanggal_lahir',
			'divisi',
			'sip',
			'alamat',
			'tlp',
			'jadwal_praktik'
			]);
		$save=DB::table('stafs')->where('id','=','id')->insert($data);
		return $data;
	}

	function update($id)
	{

	}

	function destroy($id)
	{

	}
}
