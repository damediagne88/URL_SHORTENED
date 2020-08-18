<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {

    //Vérifier que l'url passer en argument n'a pas été raccourcie et la retourner si tel est le cas 

$url = App\Url::where('url', request('url'))->first();

if($url){

    return view('result')->with('shortener', $url->shortener);
}


});

Route::get('/{shortener}', function ($shortener) {
   
    $url = App\Url::where('shortener',$shortener)->first();

    if(! $url){

      return   redirect('/');

        
    }else{

        return redirect($url->url);
    }

    
});
