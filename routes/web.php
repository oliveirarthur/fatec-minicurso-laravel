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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/post/{id?}', 'Admin\PostController@form');
Route::post('/admin/post/save/{id?}', 'Admin\PostController@save');
Route::get('/admin/posts', 'Admin\PostController@list');