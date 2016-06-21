<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $gaurded = [];
    
    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
