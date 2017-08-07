<?php

Route::get('/', 'ComicsController@index')->name('home');
Route::get('/comic/create', 'ComicsController@create');
Route::get('/comic/{comic}', 'ComicsController@show');
Route::post('/comic', 'ComicsController@store');

Route::post('/comic/{comic}/responses', 'ResponsesController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/login', 'SessionsController@create')->name('login');
