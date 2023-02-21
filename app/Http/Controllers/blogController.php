<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
  public function index()
  {
     return view('blog');
  }

  public function blogDetails()
      {
         return view('blog-details');
      }

      
      
}
