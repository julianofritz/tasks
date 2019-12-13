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

Auth::routes();

Route::resource('task', 'TaskController')->middleware('auth');

Route::get('/', 'Auth\LoginController@showLoginForm')->name('/login');
Route::get('remove/{id}', 'TaskController@remove')->name('task.remove')->middleware('auth');
Route::post('update/{id}', 'TaskController@update')->name('task.postupdate')->middleware('auth');
Route::get('/logout', 'Auth\LoginController@logout')->middleware('auth');
