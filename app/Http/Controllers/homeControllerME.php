<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeControllerME extends Controller
{
    public function index()
    {
        return view('index');
    }

    
    public function pricing()
    {
        return view('pricing');
    }
    

    
}
