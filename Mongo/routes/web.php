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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add','CarController@create');
Route::post('add','CarController@store');
Route::get('car','CarController@index');
Route::get('edit/{id}','CarController@edit');
Route::post('edit/{id}','CarController@update');
Route::delete('{id}','CarController@destroy');

Route::get('scienceadd','ScienceController@create');
Route::post('add','ScienceController@store');
Route::get('science','ScienceController@index');
Route::get('scienceshow','ScienceController@display');
Route::get('edit/{id}','ScienceController@edit');
Route::post('edit/{id}','ScienceController@update');
Route::delete('{id}','ScienceController@destroy');


