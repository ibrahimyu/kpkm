<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Hash;
class controller_user extends Controller
{
      public function index(){
        $all=DB::table('users')->get();
        return $all;
      }
      public function adduser(){
        $username='admin';
      	$password=hash::make('admin');
        $data=([
          'id' => "",
          'username' => $username,
          'password' => $password,
          'fullname' => 'admin',
          'jobdesc' => 'admin'
        ]);
        $save=DB::table('users')->insert($data);
        return $data;
      }
}
