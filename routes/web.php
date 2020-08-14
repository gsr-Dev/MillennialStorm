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





// dashboard routes 
Route::resource('dashboard', 'DashboardController');

Route::get('/about', function () {
    return 'about';
});

Route::get('/articles', 'ArticleController@index');
Route::get('/articles/{slug}', 'ArticleController@show');

Route::get('/', 'ArticleController@index');
