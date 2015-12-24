<?php

namespace App\Http\Controllers;

class controller_sdm extends Controller
{
	function index()
	{
		return \DB::table('tab_sdm')->get();
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
