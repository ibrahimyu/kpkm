<?php

namespace App\Http\Controllers;

class controller_sdm extends Controller
{
	function index()
	{
		return \DB::table('tab_sdm')->get();
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
