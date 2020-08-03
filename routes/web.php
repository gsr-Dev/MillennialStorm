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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('index', ['title' => 'Welcome to the blog']);
});

Route::get('/a/{id}', function ($id) {
    return 'This is for articles and here is the id: ' . $id;
});

Route::get('/about', function () {
    return 'This is the About page';
});

Route::get('/contributors', function () {
    return 'This is the contributors page';
});

Route::get('/contact', function () {
    return 'This is the contact page';
});
