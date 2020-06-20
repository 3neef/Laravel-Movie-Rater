<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movie/{movie}', 'MoviesController@show')->name('movies.show');

//Route::view('/', 'index');
//Route::view('/movie', 'show');