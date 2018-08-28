<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutuscontroller extends Controller
{
    public function about()
    {
    	return view('Pages/about-us');
    }
}