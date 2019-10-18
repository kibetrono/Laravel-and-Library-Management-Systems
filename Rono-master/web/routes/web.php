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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@post')->middleware('auth');

Route::get('/profile', 'ProfileController@profile')->middleware('auth');

Route::get('/category', 'CategoryController@category')->middleware('auth');

Route::post('/addcategory', 'CategoryController@addcategory')->middleware('auth');

Route::post('/addprofile', 'ProfileController@addprofile')->middleware('auth');

Route::post('/addpost', 'PostController@addpost')->middleware('auth');

Route::get('/view/{id}','PostController@view')->middleware('auth');

Route::get('/edit/{id}','PostController@edit')->middleware('auth');

Route::post('/editPost/{id}','PostController@editPost')->middleware('auth');

Route::get('/delete/{id}','PostController@deletePost')->middleware('auth');

Route::get('/category/{id}','PostController@category')->middleware('auth');

Route::get('/like/{id}','PostController@like')->middleware('auth');

Route::get('/dislike/{id}','PostController@dislike');

Route::post('/comment/{id}','PostController@comment');

Route::post('/search','PostController@search');
