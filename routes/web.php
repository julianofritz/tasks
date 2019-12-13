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

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('task', 'TaskController');

    Route::get('remove/{id}', 'TaskController@remove')->name('task.remove');
    Route::post('update/{id}', 'TaskController@update')->name('task.postupdate');
});
