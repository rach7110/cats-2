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

Route::get('cats/breeds/{name}', function($name) {
  $name = ucfirst(strtolower($name));
	$breed = Breed::whereName($name)->with('cats')->first();
	return View::make('cats.index')
    ->with('breed', $breed)
    ->with('cats', $breed->cats);
});

// CREATE:
Route::get('cats/create', function() {
	$cat = new Cat;
	return View::make('cats.edit')
    ->with('cat', $cat)
    ->with('method', 'post');
});

// CREATE HANDLER: POST
Route::post('cats', function(){
  $cat=Cat::create(Input::all());
  return Redirect::to('cats/'.$cat->id)
    ->with('message', 'Succesfully created new cat!');
});

// SINGLE CAT:

Route::model('cat', 'Cat'); // <- bound model to route.
// Allows you to shorten the route and pass a 'Cat' object to it instead. Looks like this:
Route::get('cats/{cat}', function(Cat $cat) {
  return View::make('cats.single')
    ->with('cat', $cat);
});

// EDIT:
Route::get('cats/{cat}/edit', function(Cat $cat) {
  return View::make('cats.edit')
    ->with('cat', $cat) 
    ->with('method', 'put');
});

// EDIT HANDLER: 
Route::put('cats/{cat}', function(Cat $cat){
  $cat->update(Input::all());
  return Redirect::to('cats/'.$cat->id)
    ->with('message', 'Successfully updated $cat->id cat!');
});

// DELETE:
Route::get('cats/{cat}/delete', function(Cat $cat) {
  return View::make('cats.edit')
    ->with('cat', $cat)
    ->with('method', 'delete');
});

// DELETE HANDLER: 
Route::put('cats/{cat}', function(Cat $cat){
  $cat->delete();
  return Redirect::to('cats')
      ->with('message', 'Successfully deleted page!');
});

// View composer: allows you to bind a variable to a specific view each time.
View::composer('cats.edit', function($view){
  $breeds = Breed::all();
  if(count($breeds) > 0) {
    $breed_options = array_combine($breeds->lists('id'), $breeds->lists('name'));
  } else {
    $breed_options = array(null, 'Unspecified');
  }
  $view->with('breed_options', $breed_options);
});