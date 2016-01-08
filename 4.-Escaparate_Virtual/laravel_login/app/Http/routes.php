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
//
Route::get('home', 'HomeController@index');
//
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Example 1
// login url http://www.example.com/account/login
// logout url http://www.example.com/account/logout
// registration url http://www.example.com/account/register
Route::controllers([
    'account' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
 
// Example 2
// login url http://www.example.com/login
// logout url http://www.example.com/logout
// registration url http://www.example.com/register
Route::controllers([
    '' => 'Auth\AuthController', 
    'password' => 'Auth\PasswordController',
]);
 
// Example 3
// redefine all routes
Route::get('example/register', 'Auth\AuthController@getRegister');
Route::post('example/register', 'Auth\AuthController@postRegister');
Route::get('example/login', 'Auth\AuthController@getLogin');
Route::post('example/login', 'Auth\AuthController@postLogin');
Route::get('example/logout', 'Auth\AuthController@getLogout');
Route::get('example/email', 'Auth\PasswordController@getEmail');
Route::post('example/email', 'Auth\PasswordController@postEmail');
Route::get('example/reset/{code}', 'Auth\PasswordController@getReset');
Route::post('example/reset', 'Auth\PasswordController@postReset');