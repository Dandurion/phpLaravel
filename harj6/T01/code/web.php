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
Route::get('/about', function () {
    return view('siteinfo');
});
Route::get('/aboutfolder', function () {
    return view('kansio/siteinfo');
});
Route::get('/customers/create', 'CustomerController@create');
Route::get('/contact1', 'ContactController@showinfo');
Route::get('/contact2', 'ContactController@returninfo');
Route::get('/person', 'ContactController@showperson');
Route::get('/listpersons', 'ContactController@listpersons');
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/{id}', 'CustomerController@show');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{id}/edit', 'CustomerController@edit');
Route::patch('/customers/{id}', 'CustomerController@update');
Route::delete('/customers/{id}', 'CustomerController@destroy');
Route::get('/layouts/app', 'CustomerController@layout');
