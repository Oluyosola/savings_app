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

Route::get('/', 'SavingsController@index');
// Route::get('/', 'SavingsController@throw_error');
// Route::get('/add_money', 'SavingsController@add_money');
Route::get('/plans', 'SavingsController@plan');
Route::get('/add_money', 'SavingsController@select_plans');
Route::post('/add_money_submit', 'SavingsController@add_money_store');
Route::post('/submit', 'SavingsController@store');
Route::get('/withdraw', 'SavingsController@select_plans2');
Route::post('/withdraw_submit', 'SavingsController@withdraw_store');
Route::get('/myhome', 'Savingscontroller@show_plans');
Route::resource('savings', 'SavingsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
