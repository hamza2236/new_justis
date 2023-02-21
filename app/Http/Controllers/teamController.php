<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamController extends Controller
{
      public function index()
      {
        return view('index');
      }
      

      public function teamDetails()
      {
        return view('team-details');
      }

      
     public function testi()
      {
        return view('testimonial');
      }
      


      
      
}
