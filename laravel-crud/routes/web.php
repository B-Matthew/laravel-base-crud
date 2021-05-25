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

Route::get('/', 'myGameboy@home')
      ->name('home');

Route::get('/guest/{id}','myGameboy@guest')
      ->name('guest');

Route::get('/create', 'myGameboy@create')
      ->name('create');
Route::post('store', 'myGameboy@store')
      ->name('store');
