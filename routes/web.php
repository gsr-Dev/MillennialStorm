<?php

use App\Http\Controllers\ArticleController;
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

// Route::get('/dashboard/login', 'HomeController@index')->name('home');

Route::prefix('category')->group(function () {
    Route::get('irl', 'CategoryController@index')->name('category.irl');
    Route::get('on-the-web', 'CategoryController@index')->name('category.on-the-web');
    Route::get('lifestyle-&-motivation', 'CategoryController@index')->name('category.lifestyle-&-motivation');
    Route::get('in-my-backyard', 'CategoryController@index')->name('category.in-my-backyard');
});

// dashboard routes 
Route::resource('dashboard', 'DashboardController');

Route::get('/about', function () {
    return 'about';
});

Route::get('/articles', 'CategoryController@index');
Route::get('/articles/{slug}', 'ArticleController@show');

Route::get('/', 'ArticleController@index')->name('home');
