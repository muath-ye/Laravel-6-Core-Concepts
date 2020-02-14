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

Route::get('/service-container-payment', 'tshfiirController@payment')->name('view.payment');
Route::post('/service-container-payment', 'tshfiirController@payment')->name('payment');

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);
