<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class TodoController extends Controller
{
    public function getAll ()
    {
        $todo =todo::all();
        
        return view('Todo.getAll')->with('todo' , $todo);
    }
    
}
