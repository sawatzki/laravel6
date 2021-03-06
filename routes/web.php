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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/appointments', 'AppointmentsController@index')->name('appointments.index');
Route::get('/appointments/my', 'AppointmentsController@my')->name('appointments.my');
Route::get('/appointments/edit/{id?}', 'AppointmentsController@edit')->name('appointments.edit');
Route::post('/appointments/store/{id?}', 'AppointmentsController@store')->name('appointments.store');
Route::get('/appointments/{id}', 'AppointmentsController@destroy')->name('appointments.destroy');

Route::get('/users', 'UsersController@index')->name('users.index');
//Route::get('/users/my', 'UsersController@appointments')->name('users.appointments');
Route::get('/users/show/{id}', 'UsersController@show')->name('users.show');
Route::get('/users/show/appointments/{id}', 'UsersController@appointments')->name('users.show.appointments');
Route::post('/users/store/{id?}', 'UsersController@store')->name('users.store');
Route::get('/users/{id}', 'UsersController@destroy')->name('users.destroy');


