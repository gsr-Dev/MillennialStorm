<?php

use Illuminate\Support\Facades\Route;


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


Route::prefix('category')->group(function () {

    Route::get('politics', function () {
        return "politics";
    })->name('category.politics');

    Route::get('reviews', function () {
        return "reviews";
    })->name('category.reviews');

    Route::get('motivation', function () {
        return "motivation";
    })->name('category.motivation');

    Route::get('clap-back', function () {
        return "clap-back";
    })->name('category.clap-back');

    Route::get('in-my-backyard', function () {
        return "in-my-backyard";
    })->name('category.in-my-backyard');
});

// resource routes 
// Route::get('/article', 'ArticleController@index');
// Route::get('/article/create', 'ArticleController@create');
// Route::post('/article', 'ArticleController@store');
// Route::get('/article/{slug}', 'ArticleController@show');
// Route::get('/article/{slug}/edit', 'ArticleController@edit');
// Route::put('/article/{slug}', 'ArticleController@update');
// Route::delete('/article/{slug}', 'ArticleController@destroy');

Route::resource('article', 'ArticleController');

// .com URL hit
Route::get('/', 'ArticleController@index');
