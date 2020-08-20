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
    
      $record = $this->getRecordUrl($request->url);

      return view('result')->withShortener($record->shortener);

    
    }

    public function show($shortener){

        $url = Url::where('shortener',$shortener)->firstOrFail();
        return redirect($url->url);
    }

    private function getRecordUrl($url){

        return Url::firstOrcreate(
            ['url' =>$url],['shortener' =>Url::get_unique_short_url()]
            
        );
    }

   
}
