<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// just importing validator will do the job
use Validator;

//importing the modle 
use App\RegistrationModel ;



class RegistrationController extends Controller
{
    //
    public function index()
    {
        return view ('Registration.RegistrationPage');
    }

    public function post ( Request $request)
    {
        $name =  $request->name ;
        $username = $request->username ;
        $email = $request->email;
        $pass = $request->password ;
        $repass = $request->repassword ;

        $validation =  Validator::make( $request->all() ,
            [
                'name' => 'required|max:50',
                'username' => 'bail|required|unique:user,username|max:50|min:3' ,
                'email' => 'bail|required|unique:user,email|email' ,
                'password' => 'required|max:50|min:6|confirmed' ,
                'password_confirmation' => 'required|max:50|min:6'
          ])->validate();

        /// science validated , we will add it into our database

         $user = new RegistrationModel ;
         $user->name = $name ;
         $user->username =$username ;
         $user->password = $pass ;
         $user->email = $email ;

         $user->save();
         
         return redirect ('/login');



          
          

    }
}
