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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index');

Route::get('/allReviews', 'ReviewController@allReviews')->name('allReviews');


Route::get('/editReview', 'ReviewController@editReview')->name('editReview');

Route::get('/showStatistics', 'ReviewController@showStatistics')->name('showStatistics');
Route::get('/', 'ProductController@index')->name('main');

Route::get('/product', 'ProductController@show')->name('product');

Route::get('/allUsers', 'UserController@getallUsers')->name('allUsers');

Route::get('/editUser', 'UserController@editUser')->name('editUser');

Route::get('/exportbuyerList', 'UserController@userWithOderList')->name('exportbuyerList');

Route::get('/seePurchaseHistory', 'UserController@seePurchaseHistory')->name('seePurchaseHistory');