<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group((array('before' => 'auth')),function(){
    Route::get('/phonebook/add','mainController@add');
    Route::post('/phonebook/save','mainController@save');
    Route::get('/phonebook/show','mainController@show');
    Route::get('/phonebook/edit/{id}','mainController@edit');
    Route::post('/phonebook/update','mainController@update');
    Route::get('/phonebook/delete/{id}','mainController@delete');
});

Route::get('/','mainController@index');
Route::get('/login','loginController@index');
Route::get('/logout','loginController@logout');
Route::post('/login','loginController@post');
