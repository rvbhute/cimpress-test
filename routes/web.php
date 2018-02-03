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

Route::prefix('admin')->group(function () {
	Route::get('posts', 'PostController@index');
	Route::get('posts/new', 'PostController@viewNewPostForm');
	Route::post('posts', 'PostController@saveNewPost');
	Route::get('posts/{id}', 'PostController@viewPost');
	Route::post('posts/{id}', 'PostController@savePost');
});
