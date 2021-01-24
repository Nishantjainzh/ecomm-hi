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

Route::get('/logout', function () {
	Session::forget('user');
    return redirect('/');
});
Route::get('login','UserController@Showlogin');
Route::post('/login','UserController@login');
Route::get('/','ProductController@index');
Route::get('/search','ProductController@search');
Route::get('detail/{id}','ProductController@detail');
Route::post('/addtocart','ProductController@addtocart');
Route::get('/countItem','ProductController@countItem');
Route::get('/cartItem','ProductController@cartItem');
Route::get('/itemremove','ProductController@itemRemove');




