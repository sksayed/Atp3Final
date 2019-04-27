<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ( Request $request )
    {
        if ( $request->session()->has('username'))
        {
           // return view ('Home.home')->with('name', $request->session()->get('username'));
           //$username = DB::table('user')->get();
          
          
           return view('Admin.AdminDashboard');
        }
        else
        {
            return redirect('/login' );
        }

    }

     public function allUser(  )
    {
        $user = DB::table('user')->get();
        return view()

       
    }
}
