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
Route::get('studentjson', 'StudentController@studentjson');
Route::get('coursejson', 'StudentController@coursejson');

Route::get('student', 'StudentController@studentlist');
Route::get('course', 'StudentController@courselist');
Route::get('studentincourses', 'StudentController@studentincourses');

Route::get('coursestudents', 'StudentController@coursestudents');

Route::get('studentcredits', 'StudentController@studentcredits');

Route::get('/studentform', 'StudentController@studentform');
Route::post('/storestudent','StudentController@store');