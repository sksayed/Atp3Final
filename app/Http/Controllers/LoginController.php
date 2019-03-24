<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view ('Login.index');
    }

    public function FormPost (Request $request)
    {
      $uname = $request->username ;
      $passowrd =  $request->password ;
      $url =  $request->path();

      $x = $request->input();
      return view('Login.view' , $x);
    

      //return ("uname is ".$uname." password is ".$passowrd." and path is ".$url);

    }
}
