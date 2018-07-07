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

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {
    Route::get('/post/{id?}', 'PostController@form');
    Route::post('/post/save/{id?}', 'PostController@save');
    Route::get('/posts', 'PostController@list')->name('home');
    Route::get('/post/{id}/delete', 'PostController@delete');
});
Auth::routes();
