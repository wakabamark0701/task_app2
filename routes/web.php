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



Route::get('/','TaskController@index');

Route::group(['prefix'=>'task','middleware'=>'auth'],function(){
    Route::get('index','TaskController@index')->name('task.index');
    Route::post('store','TaskController@store')->name('task.store');
    Route::post('destroy/{id}','TaskController@destroy')->name('task.destroy');
    Route::get('show/{id}','TaskController@show')->name('task.show');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
