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

Route::get('/hitungLingkaran', 'App\Http\Controllers\BangunDatarController@lingkaran');
Route::get('/hitungPersegi', 'App\Http\Controllers\BangunDatarController@persegi');
Route::get('/hitungPersegiPanjang', 'App\Http\Controllers\BangunDatarController@persegiPanjang');
