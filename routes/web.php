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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('dash', function(){
	return view('dash');

});

Route::get('sign', function(){
	return view('sign');

});
Route::get('log', function(){
	return view('log');

});

Route::get('appoint', function(){
	return view('appoint');

});

Route::get('admin', function(){
	return view('admin');

});

Route::get('profile', function(){
	return view('profile');

});
Route::get('update', function(){
	return view('update');

});

Route::post('/sign_action', 'SignController@store');
Route::post('/login_check', 'SignController@login');
Route::post('/appoint_action', 'BookController@book');
Route::post('/admin', 'AdminController@index');
Route::get('/profile', 'ProfileController@index');

Route::get('/logout', function(){
	Auth::logout();

	return Redirect::to('');
})->middleware("auth");





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
