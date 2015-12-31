<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Redirect;
use Hash;
class controller_auth extends Controller
{
    public function auth(){
      $username= input::get('username');
      $password= input::get('password');
      $sandi= hash::make('admin');
      $ceklogin=DB::table('users')

                  ->where('password','=',$sandi)
                  ->get();
      return $sandi;
    }
}
