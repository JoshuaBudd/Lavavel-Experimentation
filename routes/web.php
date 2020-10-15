<?php

use App\Models\User;
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

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/details/{id}', 'UserController@details')->name('user.details');
Route::get('/user/add', 'UserController@add')->name('user.add');
Route::post('/user/insert', 'UserController@insert')->name('user.insert');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
