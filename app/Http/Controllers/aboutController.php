<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerSupport;
use Illuminate\Support\Facades\Validator;


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
      public function privacy()
      {
            return view('privacy');
            
      }
      public function termsConditions()
      {
            return view('terms-and-conditions');
            
      }
      public function customerSupport(REQUEST $req)
      {
  
            customerSupport::create([
            'name' => $req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'subject'=>$req->subject,
            'note'=>$req->note
            
           ]);
      
      
           return redirect()->back()->with('status','Thank you for contacting us');

      }
      
      
}
