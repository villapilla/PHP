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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('register/verify/{confirmationCode}', [
    'as'     => 'confirmation_path',
    'uses'   => 'ConfirmUser@confirmRegister'
]);

Route::group(['prefix' => 'profile', 'namespace' => '\Profiles'], function() {
    Route::resource('users', 'UsersProfile');
});

Route::get('categories/products/{id}', 'CategoriesController@show');

Route::post('/categories/{id}/sort', 'CategoriesController@sort');

Route::post('/categories/search', 'CategoriesController@search');

/*Route::group(['prefix' => 'categories'], function() {
    Route::resource('category', 'CategoriesController');
});*/