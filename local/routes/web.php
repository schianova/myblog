<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('noarticle', function(){
	return view('articles/noarticle');
});
Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::resource('articles', 'ArticleController');


Auth::routes();

Route::get('/home', 'HomeController@index');
