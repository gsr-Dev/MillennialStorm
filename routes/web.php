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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ArticlesController@index');

//Route::get('/a/{id}', 'ArticlesController@show');

//Route::get('/a/all', 'ArticlesController@index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contributors', function () {
    return 'This is the contributors page';
});

Route::get('/contact', function () {
    return 'This is the contact page';
});
