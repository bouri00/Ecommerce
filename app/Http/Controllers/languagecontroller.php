<?php

namespace App\Http\Controllers;

use App;
use Lang;
use Illuminate\Support\facades\Session;
use Illuminate\Support\facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;

class languagecontroller extends Controller
{
    public function choselanguage(Request $req)
    {
        if($req->ajax())
        {
            $req->session()->put('locale',$req->locale);
            $req->session()->flash('alert-success',('app.Locale_change_success'));
        }

    }
}
