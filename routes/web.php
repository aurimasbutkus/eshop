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

// ORDERS

Route::get('/order', 'OrderController@index')->name('order');

Route::get('/checkout', 'OrderController@checkout')->name('order');

Route::get('/payment', 'OrderController@payment')->name('payment');

// REVIEWS

Route::get('/allReviews', 'ReviewController@allReviews')->name('allReviews');

Route::get('/editReview', 'ReviewController@editReview')->name('editReview');

Route::get('/showStatistics', 'ReviewController@showStatistics')->name('showStatistics');

//PRODUCTS

Route::get('/', 'ProductController@index')->name('main');

Route::get('/product/{product}', 'ProductController@show')->name('product');

//USERS

Route::get('/deleteUser/{id}', [
    'uses' => 'UserController@deleteUser',
])->name('deleteUser');

Route::get('/editUser/{id}', [
    'uses' => 'UserController@editUser',
])->name('editUserRedirect');

Route::get('/allUsers', 'UserController@getallUsers')->name('allUsers');

Route::get('/editUser', 'UserController@editUser')->name('editUser');

Route::get('/exportbuyerList', 'UserController@userWithOderList')->name('exportbuyerList');

Route::get('/seePurchaseHistory/{user}', 'UserController@seePurchaseHistory')->name('seePurchaseHistory');
