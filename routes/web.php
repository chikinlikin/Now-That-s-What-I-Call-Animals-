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

Route::get('/secret-page', 'SecretPageController@secret')->name('secret');
Route::get('/secret/download', 'SecretPageController@download')->name('download');

Route::get('/session/get','SessionController@accessSessionData')->name('getSession');
Route::get('/session/set','SessionController@storeSessionData')->name('setSession');
Route::get('/session/remove','SessionController@deleteSessionData')->name('removeSession');
