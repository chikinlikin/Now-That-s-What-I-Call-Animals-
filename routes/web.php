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

Route::get('paypal/express-checkout', 'PaymentController@expressCheckout')->name('paypal.express-checkout');
Route::get('paypal/express-checkout-success', 'PaymentController@expressCheckoutSuccess');
Route::post('paypal/notify', 'PaymentController@notify');
