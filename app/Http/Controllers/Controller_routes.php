<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_routes extends Controller
{
      //page home
      public function index()
      {
          return view('home');
      }


      public function shop()
      {
          return view('shop');
      }

      public function contact()
      {
          return view('contact');
      }


}
