<?php

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

Route::get('/', 'IndexController@index');

Route::get('about', 'AboutController@index');

Route::get('checks' , 'ChecksController@all');

Route::get('checks/{name}' , 'ChecksController@mychecks');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/home/checkin', 'HomeController@checkin');

Route::get('/home/checkout', 'HomeController@checkout');
