<?php

namespace App\Http\Controllers;
use DB;
class controller_sdm extends Controller
{
	public function index(Request $request)
	{
		
		//if ($request->q) 
		//{
		//	$q = $request->q;
		//	$data=DB::table('tab_sdm')
		//	->where('nama', 'LIKE', "%$q%")->paginate(3);
		//	return $data;
		//}else{

		$all=DB::table('tab_sdm')->paginate(2);
		return $all;
		//}
	}

	function show($id)
	{
		return json_encode(\DB::table('tab_sdm')->find($id));
	}

	function store()
	{

	}

	function update($id)
	{

	}

	function destroy($id)
	{

	}
}
