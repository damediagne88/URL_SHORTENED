<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlsController extends Controller
{
    public function create(){

        return view('welcome');
    }

    public function store(Request $request){

        Request()->validate([
            'url' =>['required','url'],
           
        ]);
    
        //Vérifier que l'url passer en argument n'a pas été raccourcie et la retourner si tel est le cas 
    
    $url = Url::where('url', request('url'))->first();
    
    if($url){
    
        return view('result')->with('shortener', $url->shortener);
        
    }
    
    
    $row = Url::create([
    
        'url' => request('url'),
        'shortener' =>Url::get_unique_short_url()
    ]);
    
    if($row){
    
        return view('result')->with('shortener', $row->shortener);
    }else{
    
        return   redirect('/');
    
    }
    
    }

    public function show($shortener){

        $url = Url::where('shortener',$shortener)->first();

        if(! $url){
    
          return   redirect('/');
            
        }else{
    
            return redirect($url->url);
        }
    }
}
