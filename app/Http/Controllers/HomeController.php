<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ( Request $request )
    {
        if ( $request->session()->has('username'))
        {
           // return view ('Home.home')->with('name', $request->session()->get('username'));
           return view('Admin.AdminDashboard');
        }
        else
        {
            return redirect('/login' );
        }

    }
}
