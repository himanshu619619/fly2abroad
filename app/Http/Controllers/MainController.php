<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function contact(){

         return view('contact');
    }

    function about(){

        return view('about');
   }

   function services(){

    return view('services');
}

}
