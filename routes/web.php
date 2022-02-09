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

Route::resource('transaction', 'TransactionController'); 
Route::get('/editTransaction/{id}','TransactionController@edit')->name('editTransaction');
Route::get('/hapusTransaction/{id}','TransactionController@destroy')->name('hapusTransaction');

Route::resource('type', 'TypeController');
Route::resource('size', 'SizeController'); 
Route::resource('unit', 'UnitController'); 
Route::resource('weight', 'WeightController'); 

Route::get('/item/add','ItemController@add');//membuat sebuah routing add
Route::post('item/addProcess','ItemController@addProcess');//membuat sebuah routing addProcess