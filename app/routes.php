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
	return View::make('hello');
});


Route::get('/prueba', function()
{
	return View::make('prueba');
});

Route::controller('personal',  'PersonalController');
Route::controller('clase2',  'Clase2Controller');