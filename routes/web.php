<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/creator/login', 'HomeController@index')->name('home');

// .com URL hit
Route::get('/', 'ArticleController@index');

// resource routes 
// Route::get('/a', 'ArticleController@index');
// Route::get('/a/create', 'ArticleController@create');
// Route::post('/a', 'ArticleController@store');
// Route::get('/a/{id}', 'ArticleController@show');
// Route::get('/a/{id}/edit', 'ArticleController@edit');
// Route::put('/a/{id}', 'ArticleController@update');
// Route::delete('/a{id}', 'ArticleController@destroy');

Route::resource('a', 'ArticleController');
