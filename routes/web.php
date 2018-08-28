<?php


Route::get('/','produitcontroller@TopProd');
/*

Route::get('connexion','Accueilcontroller@GetLogin');

Route::post('Pconnexion','Accueilcontroller@PostLogin');


*/







Route::get('Facture','facturecontroller@downfunc');


Route::get('default','produitcontroller@TopProd');

Route::get('allproduit','produitcontroller@getproduit');


Route::get('collection','Collectioncontroller@Collection');

Route::get('aboutus','aboutuscontroller@about');

Route::get('liste','produitcontroller@getproduit');

Route::get('getlogin/{id}','Accueilcontroller@authentifier');

Route::post('getlogin/{id}','Accueilcontroller@GetLog');

Route::get('getfact','facturecontroller@facture');

Route::post('getfact/{id}','facturecontroller@downfunc');

Route::post('recherche','produitcontroller@search');

Route::post('Frecherche','produitcontroller@search');


Route::get('fact','Facture@Accueilcontroller');


Route::get('pani','produitcontroller@showpanier');

Route::get('panier/{id}','produitcontroller@pub');

Route::get('affiche/{id}','produitcontroller@afficheProduit');

Route::post('affiche/{id}','produitcontroller@afficheProduit');

/*

Route::get('login','Accueilcontroller@login');

Route::get('inscription','Accueilcontroller@register');
*/
/*

Route::get('login/{id}','produitcontroller@AfficheClient');

Route::post('login/{id}','produitcontroller@AfficheClient');

*/


Route::get('testfact','facturecontroller@facture');

//Route::post('testfact/{id}','facturecontroller@downfunc');




//Route::post('changelocale', ['as' => 'changelocale', 'uses' => 'TranslationController@changeLocale']);



/*
Route::get('contact',function()
{
	return view ('Pages/contact');

});

*/
//Route::get('email','contactcontroller@contact');
 

 //contact


Route::get('email','contactcontroller@contact');
Route::get('contact','contactcontroller@show');
/*
Route::get('contact',function()
{
	return view('favio.contact');
});
*/



Route::get('Produit',function()
{
	return view('Pages/liste_produit');
});


Auth::routes();

Route::get('/cont', 'HomeController@about')->name('cont');

Auth::routes();
 
Route::get('/cont', 'HomeController@about')->name('cont');

Auth::routes();

Route::get('/cont', 'HomeController@about')->name('cont');

/*

Route::post('/language-ch','languagecontroller@choselanguage');
Route::post('language/',array(
	'before' =>'csrf',
	'as'=>'language-ch',
	'uses' =>'languagecontroller@choselanguage',)
);

*/


/*      Authentification         */

//Route::group(['prefix' => 'user'])
/*Route::get('Inscription','UserController@getregister');
Route::post('Inscription','UserController@postregister');
Route::get('Connect','UserController@getlogin');
Route::post('Connect','UserController@postlogin');
Route::get('profile','UserController@Profile');
Route::get('logout','UserController@getlogout');
*/

Route::middleware('guest')->get('/Inscription','UserController@getregister');

Route::middleware('guest')->post('/Inscription','UserController@postregister');

Route::middleware('guest')->get('/Connect','UserController@getlogin');

Route::middleware('guest')->post('/Connect','UserController@postlogin');

Route::middleware('auth')->get('/profile','UserController@Profile');

Route::middleware('auth')->post('/logout','UserController@getlogout');