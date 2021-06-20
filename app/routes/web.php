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
    return view('admin.home');
});


Route::get('/user/create', 'UserController@create')->name('create');
Route::post('/user/create', 'UserController@store');
Route::get('/user/edit/{user}', 'UserController@edit')->name('edit');
Route::post('/user/edit/{user}', 'UserController@update');
