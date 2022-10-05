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


Route::get('/', 'Pub\IndexController@index');

Route::get('/memory', 'Pub\IndexController@memory');

Route::post('/formpost', 'Pub\IndexController@postform');


Route::get('/verregistros', 'Pub\IndexController@verRegistros');

Route::get('/check', 'Pub\IndexController@check');


Route::get('/ws/save', 'Pub\IndexController@wssave');
Route::get('/ws/live', 'Pub\IndexController@wslive');
Route::get('/ws/check', 'Pub\IndexController@checkws');
Route::get('/ws/checkuser', 'Pub\IndexController@checkuser');
Route::get('ws/reset', 'Pub\IndexController@wsreset');
