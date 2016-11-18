<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');

Route::get('/signup', 'PagesController@signup');

Route::get('/login', 'PagesController@login');

Route::get('/categories/drawing-and-graphics', 'PagesController@graphics');

Route::get('/categories/writing', 'PagesController@writing');

Route::get('/categories/web-and-programming', 'PagesController@programming');

Route::get('/categories/picture-and-video', 'PagesController@video');

Route::get('/categories/typing-and-administration', 'PagesController@data');

Route::get('/categories/sell-and-marketing', 'PagesController@marketing');

Route::get('/check-connect',function(){
 if(DB::connection()->getDatabaseName())
 {
 	DB::table('UsersData')->insert(
    ['firstname' => 'Parinya', 'lastname' => 'Jankrut', 'username' => 'iPopular','email' => 'popit1994@gmail.com', 'password' => Hash::make('iPopular'), 'role' => 'admin']);
 }else{
 	return 'Connection False !!';
 }
 
});

Route::get('/q',function(){
 if(DB::connection()->getDatabaseName())
 {
 	return DB::table('UsersData')->get();
 }else{
 	return 'Connection False !!';
 }
 
});

Auth::routes();

Route::get('/home', 'HomeController@index');
