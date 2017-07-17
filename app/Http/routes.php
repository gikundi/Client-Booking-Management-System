<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//Route::get('home', function () {
//
//    // $user = Auth::user()->name;
//
//
//    Alert::message('Welcome back!');
//
//    return view('home');
//});




Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/book', function () {
    return view('booking');
});


Route::get('/booking', function () {
    return view('book');
});


///Route::get('auth/login', 'Front@login');

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::get('delete_customer_details/{id}', 'ClientController@delete_customer');

Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'api/v1'], function() {

    Route::resource('client', 'ClientController');
});


Route::get('/clientsdetails', 'ClientController@displayClients');
Route::get('client.invoice_print/{id}', 'ClientController@invoice_print');
Route::post('/clientview/{id}', 'ClientController@displayBased');



Route::get('home', 'ClientController@clientcount');


Route::get('client.invoice', [
    'middleware' => 'auth',
    'uses' => 'ClientController@invoice_index']);


Route::get('client.invoice_read/{id}', 'ClientController@invoice_read');


Route::get('client.add_payments', 'ClientController@add_payments');

Route::get('client.invoice_print/{id}', 'ClientController@invoice_print');

Route::get('customer_edit/{id}','ClientController@edit');


Route::get('client.eka_payment/{id}', 'ClientController@weka_payment');


Route::resource('client', 'ClientController');
Route::resource('customer', 'BookController');

Route::resource('reports', 'ReportController');


Route::get('reports.payments/{id}', 'ReportController@displayPayments');

 Route::get('client_edit/{id}','ClientController@edit');

Route::get('/client.save_payments/{id}', 'ClientController@save_payments');

Route::get('/exportexcel', 'ClientController@downloadSummary');



Route::get('/payment_history/{id}', 'ReportController@PaymentsHistory');
