<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
       public function index()
      {
         return view('service');   
      }



      public function serviceDetails()
      {
        return view('service-details');
      }

      
      
}
