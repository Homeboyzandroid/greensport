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

Route::get('/', function()
{
	return View::make('master');
});

// SignUp View
Route::get('signup', ['as' => 'signup', 'uses'=> 'AuthController@signUp']);
// Create Account Route
Route::post('account', ['as' => 'account', 'uses' => 'AuthController@createAccount']);
// Sign In Route
Route::get('signin', ['as' => 'signin', 'uses'=> 'AuthController@signIn']);
// Login Route
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
// Logout
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

// Todos Routes
Route::get('todos/search', 'TodosController@search');
Route::resource('posts', 'PostController');

Route::get('all', ['as' => 'all', 'uses'=> 'AuthController@signIn']);

Route::get('dash', function()
{
	return View::make('pages.dashboard');
});
Route::get('register', function()
{
	$teams = Team::all();
	return View::make('pages.register',compact('teams'));
});
//team oweners registration
Route::post('register', ['as' => 'register', 'uses' => 'TeamOwnerContoller@create']);
Route::get('all', function()
{
	$users=Owner::all();
	return View::make('pages.all')->with('users',$users);
});
//search function route
Route::get('search',
  array('as' => 'search', 'uses' => 'TeamOwnerController@search'));

Route::resource('users', 'TeamOwnerContoller');

Route::get('edit', function()
{
	return View::make('pages.edit');
});

//the players route

Route::get('create', function()
{
	$teams = Team::all();
	return View::make('players.create',compact('teams'));
});


Route::get('index', function()
{
	
	return View::make('players.index');
});
Route::get('index', ['as' => 'index', 'uses'=> 'PlayersController']);


Route::resource('players','PlayersController');

//getting data in dropdown routes here
Route::get('dropdown', ['as' => 'dropdown', 'uses'=> 'TeamOwnerContoller@dropdown']);

//route for team
Route::resource('teams' ,'TeamController');

Route::get('team', function()
{
	//$users=Owner::all();
	return View::make('.team');
});

//view teams routes
Route::get('view','TeamController@index');





