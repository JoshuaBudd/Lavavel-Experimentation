<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;  //Allows us to reference the UserController file without typing the full file path every time we reference it.

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

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/details/{id}', [UserController::class, 'details'])->name('user.details');
Route::get('/user/add', [UserController::class, 'add'])->name('user.add');
Route::post('/user/insert', [UserController::class, 'insert'])->name('user.insert');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}',  [UserController::class, 'delete'])->name('user.delete');
