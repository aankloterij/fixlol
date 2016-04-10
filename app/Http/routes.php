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
Route::get('/test', ['uses' => 'FixController@test']);

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile/{user}', ['uses' => 'FixController@profile', 'as' => 'profile']);
Route::get('/catagories/{catagory}', ['uses' => 'FixController@catagory', 'as' => 'catagory']);

Route::get('/search', ['uses' => 'FixController@search', 'as' => 'search']);

Route::get('/message/{niks}', function($niks){
	$messages = [
		[
			'from' => 'Jan van der Veen',
			'title' => 'Je hebt nog negenenzestig absenties open staan.',
			'stuff' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur voluptatum assumenda repudiandae qui dicta eum, exercitationem maiores cumque sapiente quia, impedit animi quo debitis? Laboriosam ipsam consequatur debitis necessitatibus id corrupti sunt explicabo pariatur vero at! Doloremque, voluptas deleniti, quod explicabo nisi adipisci ratione repellat amet, magnam, et numquam obcaecati? Id est laborum molestiae veritatis cumque consequatur totam, ad maxime voluptate? Nobis, molestiae perferendis nulla, voluptates amet sed dolor tempora. Velit cum dolorum harum, autem officiis, necessitatibus numquam maxime hic assumenda, corrupti repellendus repellat ducimus perferendis molestiae nostrum. Quibusdam et ad cupiditate in consequuntur numquam officia amet, soluta distinctio illo.'
		],
		[
			'from' => 'Kees van der Veen',
			'title' => 'Hallo, hoe lang ga je nog wachten todat je eindelijk je werk inleverdtdt?',
			'stuff' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur voluptatum assumenda repudiandae qui dicta eum, exercitationem maiores cumque sapiente quia, impedit animi quo debitis? Laboriosam ipsam consequatur debitis necessitatibus id corrupti sunt explicabo pariatur vero at! Doloremque, voluptas deleniti, quod explicabo nisi adipisci ratione repellat amet, magnam, et numquam obcaecati? Id est laborum molestiae veritatis cumque consequatur totam, ad maxime voluptate? Nobis, molestiae perferendis nulla, voluptates amet sed dolor tempora. Velit cum dolorum harum, autem officiis, necessitatibus numquam maxime hic assumenda, corrupti repellendus repellat ducimus perferendis molestiae nostrum. Quibusdam et ad cupiditate in consequuntur numquam officia amet, soluta distinctio illo.'
		],
		[
			'from' => 'De Jager van der Veen',
			'title' => 'Maar hoe moet ik hem nou aan doen dan?',
			'stuff' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur voluptatum assumenda repudiandae qui dicta eum, exercitationem maiores cumque sapiente quia, impedit animi quo debitis? Laboriosam ipsam consequatur debitis necessitatibus id corrupti sunt explicabo pariatur vero at! Doloremque, voluptas deleniti, quod explicabo nisi adipisci ratione repellat amet, magnam, et numquam obcaecati? Id est laborum molestiae veritatis cumque consequatur totam, ad maxime voluptate? Nobis, molestiae perferendis nulla, voluptates amet sed dolor tempora. Velit cum dolorum harum, autem officiis, necessitatibus numquam maxime hic assumenda, corrupti repellendus repellat ducimus perferendis molestiae nostrum. Quibusdam et ad cupiditate in consequuntur numquam officia amet, soluta distinctio illo.'
		],
	];

	switch($niks){
		case '1': return view('lolview')->withMessages($messages[0]);
		case '2': return view('lolview')->withMessages($messages[1]);
		case '3': return view('lolview')->withMessages($messages[2]);

	}
});
