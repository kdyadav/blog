<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
   	public function likes()
    {
   		return $this->hasMany('App\Like');
    }
    public function tags()
    {
   		return $this->hasMany('App\Tag');
    }
    public function images()
    {
   		return $this->hasMany('App\Image');
    }
    public function categories()
    {
   		return $this->hasMany('App\Category');
    }
}
