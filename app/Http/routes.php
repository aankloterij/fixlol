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

Route::group(['domain' => 'emailkenissysteem.kpnconsulting.ml'], function ()
{
	Route::get('/', function () {
		return '<h1>Email Kennis Systeem</h1><img src="http://pimpraat.com/pim.jpg">';
	});
});

Route::get('/', ['middleware' => 'auth', 'uses' => 'FixController@fix']);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/test', function ()
{
	echo "<pre>", var_dump(App\User::find(1)->fix);
});


Route::get('/mentions/{mention}', ['uses' => 'FixController@mention', 'as' => 'mention']);

Route::get('/catagories/{catagory}', ['uses' => 'FixController@catagory', 'as' => 'catagory']);