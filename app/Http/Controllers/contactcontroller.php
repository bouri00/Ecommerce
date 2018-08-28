<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class contactcontroller extends Controller
{
    public function show()
    {
    return view ('Pages/contact');
    }
    public function contact(Request $request){
        $nom =$request->input('nom');
        $email =$request->input('email');
        $msg =$request->input('message');
        $data = array(
            'nom' => $nom,
            'email' => $email,
            'message'=> $msg
        );
        Mail::send('Pages.email',$data,function($message){
            $message->to("Mustafabouri@gmail.com")->subject('contact');
        });
        return redirect('contact');
    }

}
