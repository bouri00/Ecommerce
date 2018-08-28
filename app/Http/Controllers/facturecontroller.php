<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Facture;
use App\produit;


class facturecontroller extends Controller
{
	public function facture()
	{
		return view('Pages.facture');

	}
    public function downfunc($id){
    	$downloads= Facture::find($id);
    	return view('Pages.facture',['factures'=>$downloads]);
    }

}
