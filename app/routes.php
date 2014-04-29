<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return Redirect::to('cats');
});

Route::get('cats', function(){
	$cats = Cat::all();
	return View::make('cats.index')
		->with('cats', $cats);
});

Route::get('cats/breed/{name}', function($name) {
	$breed = Breed::whereName($name)->with('cats')->first();
	return View::make('cats.index')
		->with('breed', $breed)
		->with('cats', $breed->cats);
});

Route::get('cats/{id}', function($id){
	$cat = Cat::find($id);
	return View::make('cats.single')
		->with('cat', $cat);
});