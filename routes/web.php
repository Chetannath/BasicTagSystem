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
Route::get('/company','CompanyController@index');
Route::get('/companyGet','CompanyController@store')->name('Cget');
Route::post('/companyCreate','CompanyController@create')->name('Ccreate');
Route::get('/companyUpdate/{id}','CompanyController@edit')->name('Cupdate');
