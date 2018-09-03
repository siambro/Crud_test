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

// Route::view('/contact', 'contact');
// Route::post('/contact/post', 'ContactController@store');
// Route::get('create', 'ContactController@create');
// Route::get('index', 'ContactController@index');

Route::get('/', 'ContactController@readItems');
Route::post('addItem', 'ContactController@addItem');
Route::post('editItem', 'ContactController@editItem');
Route::post('deleteItem', 'ContactController@deleteItem');
