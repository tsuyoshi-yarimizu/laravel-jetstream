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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'App\Http\Controllers\UserController@index');
Route::get('/user/create', 'App\Http\Controllers\UserController@create');
Route::get('/user/{userId}/edit', 'App\Http\Controllers\UserController@edit');
Route::post('/user', 'App\Http\Controllers\UserController@store');
Route::put('/user/{userId}', 'App\Http\Controllers\UserController@update');
