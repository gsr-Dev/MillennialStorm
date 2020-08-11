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
// Route::get('/a/{slug}', 'ArticleController@show');
// Route::get('/a/{slug}/edit', 'ArticleController@edit');
// Route::put('/a/{slug}', 'ArticleController@update');
// Route::delete('/a{slug}', 'ArticleController@destroy');

Route::resource('article', 'ArticleController');
