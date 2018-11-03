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
Route::get('/staff', 'StaffMemberController@index');
Route::get('/staff/create', 'StaffMemberController@create');
Route::get('/staff/store', 'StaffMemberController@store');
Route::get('/staff/{staff}', 'StaffMemberController@edit');
Route::patch('/staff/{staff}', 'StaffMemberController@update');

Route::get('/calculate', 'StaffMemberController@calculate');
Route::get('/staffall', 'StaffMemberController@staff');
Route::get('/test', 'StaffMemberController@test');
