<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rules\Login_username;
use App\Rules\Login_password;
use Validator;
use Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view ('Login.LoginPage');
    }

    public function FormPost (Request $request)
    {
       $validation =  Validator::make( $request->all() , 
       [
        'username' => 'bail|required|max:50|min:3' ,
        'username' => new Login_username ,
        'password' => 'bail|required|max:50|min:6',
        'password' => new Login_password 
       ])->validate();

       


      $uname = $request->username ;
      $password =  $request->password ;

      ///autheticate 
      // $attempt = Auth::attempt(['username' => $uname, 'password' => $password]);
      // if ($attempt)
      // {
      //   $request->session()->put('username' , $uname ) ;
      //   return view ('Home.home')->with('username' , $uname) ;
      // }
      // else
      // {
      //   return redirect ('/login');
      // }
      $user = DB::table('user')->where('username',$uname)->first();

      if ($password == $user->password)
      {
         $request->session()->put('username' , $uname ) ;
          return redirect('/home');
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
