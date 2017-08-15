<?php

Route::get('/', 'ComicsController@index')->name('home');
Route::get('/comic/create', 'ComicsController@create');
Route::get('/comic/{comic}', 'ComicsController@show');
Route::get('/newest', 'ComicsController@newest');
Route::get('/top10', 'ComicsController@top10');
Route::post('/comic/{comic}/delete', 'ComicsController@destroy');
Route::post('/comic', 'ComicsController@store');
Route::post('/comic/{comic}/responses', 'ResponsesController@store');

Route::get('/logout', 'SessionsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
