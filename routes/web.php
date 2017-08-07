<?php

Route::get('/', 'ComicsController@index');
Route::get('/comic/create', 'ComicsController@create');
Route::get('/comic/{comic}', 'ComicsController@show');
Route::post('/comic', 'ComicsController@store');

Route::post('/comic/{comic}/responses', 'ResponsesController@store');

