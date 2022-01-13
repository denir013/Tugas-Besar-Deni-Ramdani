<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('item', 'ItemController');
Route::get('/editItem/{id}','ItemController@edit')->name('editItem');
Route::get('/hapusItem/{id}','ItemController@destroy')->name('hapusItem');

Route::resource('type', 'TypeController');
Route::get('/editType/{id}','TypeController@edit')->name('editType');
Route::get('/hapusType/{id}','TypeController@destroy')->name('hapusType');

Route::resource('transaction', 'TransactionController');