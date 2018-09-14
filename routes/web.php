<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth/login');
});

Route::resource('/hello_world/index', 'HelloWorldController');
Route::resource('/hello_world/index2', 'PokemonController');

// Route::get('/hello_world/index', 'HelloWorldController@index');

//Route::get('/hello_world/index', function() {
//    return view('hello');    
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');