<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    public function shop()
    {
    	return view('Pages/liste_produit');
    }

  


}
