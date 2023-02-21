<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
      public function index()
      {
          return view('about');
      }
      
      public function contact()
      {
            return view('contact');
            
      }
      public function faq()
      {
            return view('faq');
            
      }
      
}
