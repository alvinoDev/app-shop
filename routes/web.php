<?php
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'TestController@welcome'); //Use controller

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
