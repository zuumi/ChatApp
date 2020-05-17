<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
// Route::get('/chatapp',function(){ return view('chatapp.index'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/add','HomeController@add')->name('add');
Route::post('/result/ajax','HomeController@getData');
