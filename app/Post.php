<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $gaurded = [];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
   	public function likes()
    {
   		return $this->hasMany('App\Like');
    }
    public function images()
    {
   		return $this->hasMany('App\Image');
    }
}
