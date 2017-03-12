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

Route::get('/', [
  'uses' => 'BlogController@index',  
  'as' => 'blog'
]);
Route::get('/post/{post}', [
    'uses' => 'BlogController@post',
    'as' => 'blog.post'
]);

Auth::routes();


Route::get('/home', 'Backend\HomeController@index');

Route::resource('/backend/blog', 'Backend\BlogController');


