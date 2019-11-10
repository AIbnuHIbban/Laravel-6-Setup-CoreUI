<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


// Templating
Route::get('/admin/{pages}', 'AdminController@pages');