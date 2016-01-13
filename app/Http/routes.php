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

Route::get('/', ['as' => 'welcome', 'uses'  => 'WelcomeController@index'])->middleware('guest');

// Team Routes
Route::get('/teams', 		  ['as' => 'teams.index',  'uses'  => 'TeamController@index']);
Route::post('/team', 		  ['as' => 'team.store',   'uses'  => 'TeamController@store']);
Route::delete('/team/{team}', ['as' => 'team.destroy', 'uses'  => 'TeamController@destroy']);

// Authentication Routes...
Route::get('auth/login',	['as' => 'getLogin',  'uses'  => 'Auth\AuthController@getLogin']);
Route::post('auth/login',	['as' => 'postLogin', 'uses'  => 'Auth\AuthController@postLogin']);
Route::get('auth/logout',	['as' => 'getLogout', 'uses'  => 'Auth\AuthController@getLogout']);

// Registration Routes...
Route::get('auth/register',  ['as' => 'getRegister',  'uses'  => 'Auth\AuthController@getRegister']);
Route::post('auth/register', ['as' => 'postRegister', 'uses'  => 'Auth\AuthController@postRegister']);