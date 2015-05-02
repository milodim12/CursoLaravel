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
	return View::make('ejemplo');
});
Route::get('/camiloun',array('before'=>'auth', function()
{
    
}));
Route::get('/version', function()
{       $laravel = app();
        $version = $laravel::VERSION;
	return View::make('ejemplo4')->with("version",$version);
});
Route::get('/login',array('before'=>'guest' ,function()
{
        return View::make('general/login');
        
}));
Route::post('/loguear', function(){
    $email=Input::get('correo');
    $password=Input::get('password');
        if (Auth::attempt(['correo' => $email, 'password' => $password]))
        {
            return Redirect::to("/profile");
        }
        else{
           return Redirect::to("/login");
        }
    
});
Route::get('/logout', function()
{      
	
});
Route::group(array('before'=>'auth'), function()
{
Route::controller('personal',  'PersonalController');
Route::controller('clase2',  'Clase2Controller');
Route::controller('prueba','PruebaController');
Route::controller('publicacion','PublicacionController');
Route::controller('profile','ProfileController');
});