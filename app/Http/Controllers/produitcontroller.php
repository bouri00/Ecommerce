<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produit;
use App\Categorier;

class produitcontroller extends Controller
{
    public function TopProd(){
        //top produit (plus chere)
       $top= produit::orderBy('prix', 'desc')->take(3)->get();
       //dernier produit acheter
       $dernier_produit= produit::orderBy('created_at', 'desc')->take(4)->get();
       return view('Pages.index',['pros'=>$top],['derniers'=>$dernier_produit]);
      }
      public function Categories()
      {
        $cat=Categorier::all();
        return view('layouts.MasterPage',['cats'=>$cat]);
      }

      public function getproduit()
      {
         $lis=produit::all();
         return view('Pages.liste_produit',['produits'=>$lis]);
     
      }


    public function rech()
   {
      return view('Pages.recherche');
   }

    //rechercher sur un produit par titre
    public function search(Request $request){
        $ch = $request->input('rech');
    $user = produit::where('titre','LIKE','%'.$ch.'%')->get();
    if(count($user) > 0)
        return view('Pages.recherche')->withDetails($user)->withQuery ( $ch );
    else return view ('Pages.search_false'); 
    }

    public function deta($id)
    {
    $dets = produit::find($id);

     return view('Pages.dts',['detls'=>$dets]);
    }

    public function afficheProduit($id)
    {
      $pro =produit::find($id);

      return view('Pages.detailProduit',['prod' => $pro]);
    }


    public function showpanier()
    {
        return view('pages.panier');
    }

    public function pub($id)
    {
        $pan =produit::find($id);

        return view('pages.panier' ,['paniers'=> $pan]);

    }

    public function AfficheClient($id)
    {
        $CL =produit::find($id);

        return view('pages.Authentifier' ,['Aclt'=> $CL]);

    }





}
