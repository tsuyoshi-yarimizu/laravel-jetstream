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

Route::get('/', 'App\Http\Controllers\SessionController@index');
Route::get('/session/login', 'App\Http\Controllers\SessionController@index');
Route::get('/session', 'App\Http\Controllers\SessionController@index');
Route::post('/session/login', 'App\Http\Controllers\SessionController@login');

Route::get('/user', 'App\Http\Controllers\UserController@index')->middleware('auth');
Route::get('/user/create', 'App\Http\Controllers\UserController@create')->middleware('auth');
Route::get('/user/{userId}/edit', 'App\Http\Controllers\UserController@edit')->middleware('auth');
Route::post('/user', 'App\Http\Controllers\UserController@store')->middleware('auth');
Route::put('/user/{userId}', 'App\Http\Controllers\UserController@update')->middleware('auth');
