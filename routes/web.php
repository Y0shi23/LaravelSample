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

// アクセス時のルーティング
Route::get('sample/vali', 'Sample_vali@index');
// Route::get('sample/contact', 'Contact@index');
Route::resource('sample/contact', 'PokemonController');
Route::get('sample/news', 'News@index');

// フォーム送信時のルーティング
//Route::post('sample/vali', 'Sample_vali@receiveData');

Route::post('sample/vali/confirm', [
    'uses' => 'Sample_vali@receiveData',
    'as' => 'validation.confirm'
]);

Route::post('sample/vali/confirm/insert', [
    'uses' => 'Sample_vali@save',
    'as' => 'validation.inputconfirm'
]);
Route::delete('sample/vali/destroy/{name}','Sample_vali@destroy');
Route::get('sample/vali/edit/{name}', 'Sample_vali@edit');
Route::post('sample/vali/edit/confirm', [
    'uses' => 'Sample_vali@updateReceiveData',
    'as' => 'validation.confirm'
]);

//Route::post('sample/vali/edit/{name}','Sample_vali@update');



// Route::get('/hello_world/index', 'HelloWorldController@index');

//Route::get('/hello_world/index', function() {
//    return view('hello');    
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
