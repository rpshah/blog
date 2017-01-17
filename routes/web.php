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

Route::get('about', 'StaticPageController@showAboutPage');
Route::get('contact', 'StaticPageController@showContactPage');

//All CRUD activities as per laravel Doc for Posts
Route::resource('post', 'PostController');


Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function() {
    return redirect()->route('post.index');
});

Auth::routes();
