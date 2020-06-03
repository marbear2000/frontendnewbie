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

Route::get('/', 'HomeController@index');

Route::get('/four-cards', 'HomeController@fourCard');
Route::get('/base-apparel', 'HomeController@baseApparel');
Route::get('/bootcamp-testimonials', 'HomeController@bootcamp');
Route::get('/fylo', 'HomeController@fylo');
Route::get('/huddle', 'HomeController@huddle');
Route::get('/huddle-2', 'HomeController@huddle2');
Route::get('/intro-form', 'HomeController@introForm');
Route::get('/ping', 'HomeController@ping');
Route::get('/single-price', 'HomeController@singlePrice');

