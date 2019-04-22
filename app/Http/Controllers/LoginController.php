<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

      $user = DB::table('user')->where('username',$uname)->first();

      if ($passowrd == $user->password)
      {
         $request->session()->put('username' , $uname ) ;
          return view ('Home.home')->with('username' , $uname) ;
      }
      else
      {
        return redirect ('/login');

      }
    }

    //   $url =  $request->path();

    //   $x = $request->input();
    //   return view('Login.view' , $x);
    

      //return ("uname is ".$uname." password is ".$passowrd." and path is ".$url);
        // if ( $request->username == $request->password )
        // {
        //     $request->session()->put('username' , $request->username);

        //     return redirect('/home');
        // }
        // else
        // {
        //     return redirect('/login'); 
        // }
    
}
