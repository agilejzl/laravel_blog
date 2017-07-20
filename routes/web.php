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

Route::get('/', function() {
    return view('welcome');
});

Route::post('/user/register', 'UserController@store');
Route::post('/user/login', 'UserController@signin');
Route::get('/user/logout', 'UserController@logout');

Route::resource('posts', 'PostController', ['only' => [
    'index', 'show'
]]);
