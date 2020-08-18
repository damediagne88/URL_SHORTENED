<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'url', 'shortener',
    ];
}
