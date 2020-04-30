<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Response;

class SendEmailController extends Controller
{
   function send(Request $Request)
   {
   
      $details = array('name' => $Request->name,
      'phone' => $Request->phone,
      'email' => $Request->email,
      'visa' => $Request->visa        
   );

   // var_dump($data);
   Mail::send(new SendEmail($details));
   if (Mail::failures()) {
      // return failed mails
      return new Error(Mail::failures()); 
  }
       return back()->with('success', 'Thanks for contacting Us');
   }


   function contact(request $request)
   {
    $details = array('name' => $request->name, 
                     'phone' => $request->phone,
                     'email' => $request->email,
                     'visa' => $request->visa,  
                     'message' => $request->message        
                     );
                     //  var_dump($details);
                  Mail::send(new SendEmail($details));
                  return back()->with('success', 'Thanks for contacting Us');
   }
   
}
