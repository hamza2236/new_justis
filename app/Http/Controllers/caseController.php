<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caseController extends Controller
{
       public function index()
      {
          return view('cases');
      }

      public function casesDetails()
      {
          return view('cases-details');
      } 


      
      


}
