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
Route::group(['middleware' => ['auth', 'admin']], function() {
    // your routes
    Route::get('users', 'UserController@list_all');
    Route::get('harkat', 'HarkkaController@list_all');
});
//Route::get('/pscores', 'KyselyController@list_personal_scores');
Route::get('/pscores', [
    'middleware' => 'auth',
    'uses' => 'KyselyController@list_personal_scores'
]);
// Lomake tiedoston lataamiseksi
Route::get('upload', 'CsvController@create');

// toiminto tiedoston rivien lisäämiseksi tietokantaan
Route::post('csvsaved', 'CsvController@store');
Route::get('/changePassword','HomeController@showChangePasswordForm')->name('changePassword');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');