<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class UserController extends Controller
{
    public function getregister()
    {
        return view('User.register');
    }

    public function postregister(Request $request)
    {
        $user =new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        return  redirect("default");
       
     
    }

    public function getlogin()
    {
        return view('User.login');
    }

    public function postlogin(Request $request)
    {
       if( Auth::attempt([ 'email' => $request->input('email'),
       'password' =>$request->input('password')]) )
       {
           return redirect("profile");
       }
       else
       {

        return redirect("Inscription");

       }
        
        return  redirect()->back();
   
     
    }

    public function Profile()
    {
        return view('User.Profile');
    }

    public function getlogout()
    {
        Auth::logout();

        return  redirect()->back();

    }
}
