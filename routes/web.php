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



Route::get('/', 'HomeController@index');
Route::get('/result', 'HomeController@result')->name('result');
Route::get('/resultb', 'HomeController@resultb')->name('resultb');
Route::get('/resultc', 'HomeController@resultc')->name('resultc');
Route::get('/halaman_terakhir', 'HomeController@halaman_terakhir')->name('halaman_terakhir');
