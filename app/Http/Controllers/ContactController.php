<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');

        
}

// public function na(Request $request){
//     $message=$request->validate([
//     'name' =>'required',
//     'yourmessage' =>'required',
//     'email'=>'required',
//     ]);
//    Mail::to('ruanomaxi@gmail.com')->send(new MessageReceived);
  
//     return 'mensaje enviado';
    
// }

}
