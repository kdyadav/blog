<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('posts','PostController');
Route::resource('categories','CategoryController');
Route::resource('tags','TagController');

Route::auth();

Route::get('/register', function () {
    return redirect('http://www.vkulp.com/auth/register');
});
