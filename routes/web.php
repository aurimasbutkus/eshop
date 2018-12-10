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

Route::get('/order/{id}', 'OrderController@index')->name('order');

Route::get('/checkout', 'OrderController@checkout')->name('checkout');

Route::post('/payment', 'OrderController@payment')->name('payment');


Route::post('/addcart', 'CartController@add')->name('addToCart');
Route::post('/addorder', 'OrderController@addOrder')->name('addOrder');

Route::post('/changeOrderStatus', 'OrderController@changeStatus')->name('changeOrderStatus');

Route::get('/removecart/{id}', 'CartController@remove')->name('removeFromCart');
// REVIEWS

Route::get('/orders', 'OrderController@orders')->name('orders');

// REVIEWS

Route::get('/allReviews', 'ReviewController@allReviews')->name('allReviews');

Route::get('/editReview', 'ReviewController@editReview')->name('editReview');

Route::get('/showStatistics', 'ReviewController@showStatistics')->name('showStatistics');

Route::post('newReview', 'ReviewController@review');

Route::get('/productReview/{id}', [
    'uses' => 'ReviewController@showReview',
])->name('showReview');

Route::post('newComment', 'ReviewController@comment');

Route::get('/reviewComent/{id}', [
    'uses' => 'ReviewController@showComment',
])->name('showComment');


Route::get('/deleteReview/{id}', [
    'uses' => 'ReviewController@deleteReview',
])->name('deleteReview');

Route::get('/editReview/{id}', [
    'uses' => 'ReviewController@editReview',
])->name('editRedirectReview');

Route::post('editR', 'ReviewController@updateR');

//PRODUCTS

Route::get('/', 'ProductController@index')->name('main');

Route::get('/products/new', 'ProductController@create')->name('new-product')->middleware('admin');
Route::post('/products', 'ProductController@store')->name('create-product')->middleware('admin');

Route::get('/products/{product}/edit', 'ProductController@edit')->name('edit-product')->middleware('admin');
Route::post('/products/{product}/edit', 'ProductController@update')->name('update-product')->middleware('admin');
Route::delete('/products/{product}/delete', 'ProductController@destroy')->name('delete-product')->middleware('admin');
Route::get('/products', 'ProductController@adminIndex')->name('list-products')->middleware('admin');

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
