<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Book', 'App\Http\Controllers\BookController@index');
Route::get('/Contact', 'App\Http\Controllers\ContactController@index');
