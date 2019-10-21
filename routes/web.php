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

Route::get('/',			'PageController@getIndex')->name('get-index');
Route::get('/masthead',	'PageController@getMasthead')->name('get-masthead');
Route::get('/privacy',	'PageController@getPrivacy')->name('get-privacy');
