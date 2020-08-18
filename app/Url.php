<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'url', 'shortener',
    ];

    function get_unique_short_url(){

        $shortener = str_random(5);
    
        if(App\Url::whereShortener($shortener)->count() > 0){
    
            return get_unique_short_url();
        }
    
        return $shortener;
    }
}
