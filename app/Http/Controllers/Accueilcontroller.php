<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produit;
use Auth;

class Accueilcontroller extends Controller
{
	public function GetLogin()
	{
		return view('auth.login');
	}

    public function PostLogin(Request $req )
    {
        /*$this->validate($req,[
            'email' => 'email|required',
            'password' =>'password|required|min:6'
            ]);
        */
            
       if ( Auth::attempt(['email' => $req->input('email'),'password' =>$req->input('password')]))
        {
            return redirect('Auth.profile');

        }
        return redirect()->back();
    }

/*
	public function GetLog($id)
	{
        $log=produit::find($id);
		return view('auth.login',['lgs'=>$log]);
	}
*/
    public function Facture()
    {

        return view('Pages.facture');
    }




 

    /*
     
    public function login()
    {
        return view('auth.login');
    }
     public function register()
    {
        return view('auth.register');
    }

*/

}
