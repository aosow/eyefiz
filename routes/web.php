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

Route::get('/', 'MainController@index')->name('homepage');


Route::get('produits', 'MainController@products')->name('products');

Route::get('articles', 'MainController@posts')->name('posts');

// Recherche
Route::get('/search', 'MainController@search')->name('search');

